<!-- resources/js/Pages/ViewMember.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps({
    priest: Object,
});

const back = () => {
    router.get(route('priests'));
}
</script>

<template>
    <Head title="View Member" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{priest.first_name}} {{priest.last_name}} Profile</h2>
        </template>
        <div>
            <button @click="back" class="py-1 px-2 text-white bg-blue-500 ">Go Back</button>
        </div>
        <div class="py-12">
            <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
                <div class="bg-white shadow sm:rounded-lg p-6">
                    <div>
                        <h1 class="text-center">Image ni dre</h1>
                    </div>
                    <div class="grid grid-cols-2 place-items-center">
                        <p><strong>First Name:</strong> {{ priest.first_name }}</p>
                        <p><strong>Last Name:</strong> {{ priest.last_name }}</p>
                        <p><strong>Address:</strong> {{ priest.address }}</p>
                        <p><strong>Date of Birth:</strong> {{ priest.dob }}</p>
                        <p><strong>Position:</strong> {{ priest.position }}</p>
                        <p class="capitalize"><strong>Status:</strong> {{ priest.status }}</p>
                    <!-- Add more priest info as needed -->
                    </div>
                </div>
            </div>
        </div>
        
    </AuthenticatedLayout>
</template>
