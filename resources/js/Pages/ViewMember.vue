<!-- resources/js/Pages/ViewMember.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    user: Object
});
</script>

<template>
    <Head title="View Member" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">View Member</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
                <div class="bg-white shadow sm:rounded-lg p-6">
                    <p><strong>First Name:</strong> {{ user.first_name }}</p>
                    <p><strong>Last Name:</strong> {{ user.last_name }}</p>
                    <p><strong>Email:</strong> {{ user.email }}</p>
                    <!-- Add more user info as needed -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
