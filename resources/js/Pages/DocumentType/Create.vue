<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm,router } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import SelectInput from '@/Components/SelectInput.vue';
import { computed } from 'vue';

const props = defineProps({
    categories: {
        type: Array,
        default: () => ['wedding_certificate', 'birth_certificate', 'death_certificate', 'marriage_certificate', 'divorce_certificate', 'other'],
    }
});

// Transform snake_case to Title Case and create options array
const formattedOptions = computed(() => {
    return props.categories.map(category => ({
        value: category,
        label: category
            .split('_')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ')
    }));
});

const form = useForm({
    document_type: '',
});

const submit = () => {
    form.post(route('store_document_type'), {
        // go to document type page
        onSuccess : () => {
            router.visit(route('document_type'));
        }
    });
};
</script>

<template>
    <Head title="Create Document Type" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create Document Type
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form @submit.prevent="submit">
                            <div class="space-y-6">
                                

                                <div>
                                    <SelectInput
                                        v-model="form.document_type"
                                        :options="formattedOptions"
                                        label="Document Type"
                                        placeholder="Select a document type"
                                        valueKey="value"
                                        labelKey="label"
                                        required
                                    />
                                    <InputError class="mt-2" :message="form.errors.type" />
                                </div>

                                <div class="flex justify-end">
                                    <PrimaryButton :disabled="form.processing">
                                        Create Document Type
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