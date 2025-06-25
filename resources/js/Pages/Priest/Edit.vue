<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm,router } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import SelectInput from '@/Components/SelectInput.vue';
import { computed } from 'vue';





const status = ['active','inactive'];

const options = computed(() => {
    return status.map(data => ({
        value : data,
        label : data.charAt(0).toUpperCase() + data.slice(1)
    }))
});

let prop = defineProps({
    priest : Object
});

const form = useForm({
    first_name: prop.priest.first_name,
    last_name : prop.priest.last_name,
    address : prop.priest.address,
    position : prop.priest.address,
    dob : prop.priest.dob,
    status : prop.priest.status   
});




const submit = () => {
    form.post(route('update_priest',prop.priest.id), {
        // go to document type page
        onSuccess : () => {
            router.visit(route('priests'));
        }
    });
};
</script>

<template>
    <Head title="Create Priest" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Priest
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form @submit.prevent="submit">
                            <div class="space-y-6 ">
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <InputLabel for="first_name" value="First Name" />

                                        <TextInput
                                            id="first_name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="form.first_name"
                                            required
                                            autofocus
                                            autocomplete="first_name"
                                        />

                                        <InputError class="mt-2" :message="form.errors.first_name" />
                                    </div>
                                    <div>
                                        <InputLabel for="last_name" value="Last Name" />

                                        <TextInput
                                            id="last_name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="form.last_name"
                                            required
                                            autofocus
                                            autocomplete="last_name"
                                        />

                                        <InputError class="mt-2" :message="form.errors.last_name" />
                                    </div>
                                    <div>
                                        <InputLabel for="last_name" value="Address" />

                                        <TextInput
                                            id="address"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="form.address"
                                            required
                                            autofocus
                                            autocomplete="address"
                                        />

                                        <InputError class="mt-2" :message="form.errors.address" />
                                    </div>
                                    <div>
                                        <InputLabel for="position" value="Position" />

                                        <TextInput
                                            id="position"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="form.position"
                                            required
                                            autofocus
                                            autocomplete="position"
                                        />

                                        <InputError class="mt-2" :message="form.errors.position" />
                                    </div>
                                    <div>
                                        <InputLabel for="dob" value="Date of Birth" />

                                        <TextInput
                                            id="dob"
                                            type="date"
                                            class="mt-1 block w-full"
                                            v-model="form.dob"
                                            required
                                            autofocus
                                            autocomplete="dob"
                                        />

                                        <InputError class="mt-2" :message="form.errors.dob" />
                                    </div>
                                    <div>
                                        <SelectInput
                                            v-model="form.status"
                                            :options="options"
                                            label="Status"
                                            placeholder="Select a status"
                                            valueKey="value"
                                            labelKey="label"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.status" />
                                    </div>
                                </div>
                                
                                

                                <div class="flex justify-end">
                                    <PrimaryButton :disabled="form.processing">
                                        Update Priest
                                    </PrimaryButton>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template> 