<script setup>
import DynamicTableVue from '@/Components/DynamicTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed, h, onMounted } from 'vue';

const columns = ['id', 'title', 'type', 'created_at', 'actions'];

onMounted(() => {
    // Initialize DataTable once DOM is rendered
    setTimeout(() => {
        $('#myTable').DataTable();
    }, 0);
});

const documents = [
    {
        id: 1,
        title: 'Sample Document 1',
        type: 'PDF',
        created_at: '2024-03-20',
    },
    {
        id: 2,
        title: 'Sample Document 2',
        type: 'DOCX',
        created_at: '2024-03-21',
    },
];
</script>

<template>
    <Head title="Documents" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Documents
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <DynamicTableVue
                            :columns="columns"
                            :rows="documents"
                        >
                            <template #actions="{ row }">
                                <div class="flex space-x-2">
                                    <button class="px-3 py-1 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">
                                        View
                                    </button>
                                    <button class="px-3 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </div>
                            </template>
                        </DynamicTableVue>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

