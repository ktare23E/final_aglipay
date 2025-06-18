<!-- resources/js/Pages/ViewMember.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps({
    user: Object,
    documents : Object
});

const back = () => {
    router.get(route('members'));
}
</script>

<template>
    <Head title="View Member" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{user.first_name}} {{user.last_name}} Documents</h2>
        </template>
        <div>
            <button @click="back" class="py-1 px-2 text-white bg-blue-500 ">Go Back</button>
            <p v-if="documents.length > 0">{{documents}}</p>
            <p v-else class="text-center text-2xl">No documents yet.</p>
        </div>
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
        <div class="py-12">
            <h1 class="text-center font-bold mb-2">{{user.first_name}} {{user.last_name}} Documents</h1>
            <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
                <div class="bg-white shadow sm:rounded-lg p-6 grid grid-cols-3 gap-4">
                    <div class="bg-gray-100 p-8 rounded-sm shadow-md transition-all hover:shadow-xl"></div>
                    <div class="bg-gray-100 p-8 rounded-sm shadow-md transition-all hover:shadow-xl"></div>
                    <div class="bg-gray-100 p-8 rounded-sm shadow-md transition-all hover:shadow-xl"></div>
                    <div class="bg-gray-100 p-8 rounded-sm shadow-md transition-all hover:shadow-xl"></div>
                    <div class="bg-gray-100 p-8 rounded-sm shadow-md transition-all hover:shadow-xl"></div>
                    <div class="bg-gray-100 p-8 rounded-sm shadow-md transition-all hover:shadow-xl"></div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
