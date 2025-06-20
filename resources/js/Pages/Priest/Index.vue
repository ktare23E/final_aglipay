<script setup>
import DynamicTableVue from '@/Components/DynamicTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed, h, onMounted } from 'vue';
import CreateButton from '@/Components/CreateButton.vue';

const columns = ['id', 'first_name', 'last_name', 'address','position','date_of_birth', 'Actions'];

const formatDocumentType = (type) => {
    return type.split('_')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
        .join(' ');
};

const formatDate = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
        month: 'long',
        day: 'numeric',
        year: 'numeric'
    });
};

onMounted(() => {
    // Initialize DataTable once DOM is rendered
    setTimeout(() => {
        $('#myTable').DataTable();
    }, 0);
});

defineProps({
    priests: {
        type: Array,
        required: true,
    }
});

</script>

<template>
    <Head title="Document Type" />

    <AuthenticatedLayout>
        <template #header>
            <div class="w-full flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Priest
                </h2>
                <CreateButton name="Create Priest" :link="route('create_document_type')"/>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <DynamicTableVue
                            :columns="columns"
                            :rows="priests.map(type => ({
                                ...type,
                                document_type: formatDocumentType(type.document_type),
                                created_at: formatDate(type.created_at)
                            }))"
                        >
                            <template #Actions="{ row }">
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

