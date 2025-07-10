<!-- resources/js/Pages/Members.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import DynamicTable from '@/Components/DynamicTable.vue';
import { computed, onMounted } from 'vue';
import CreateButton from '@/Components/CreateButton.vue';

const props = defineProps({
    users: Array
});

onMounted(() => {
    // Initialize DataTable once DOM is rendered
    setTimeout(() => {
        $('#myTable').DataTable();
    }, 0);
});

// Columns for the table
const columns = ['First Name', 'Last Name', 'Email', 'Action'];

// Rows mapped from users, include ID for link routing
const rows = computed(() => {
    return props.users.map(user => ({
        id: user.id,
        'First Name': user.first_name,
        'Last Name': user.last_name,
        'Email': user.email
    }));
});


</script>

<template>

    <Head title="Members" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Members</h2>
            <CreateButton name="Create Members" />
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <DynamicTable :columns="columns" :rows="rows">
                            <!-- Slot for Action column -->
                            <template #Action="{ row }">
                                <Link :href="`/view_member/${row.id}`"
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs mr-2">
                                View
                                </Link>
                                <Link :href="`/users/${row.id}/edit`"
                                    class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-xs">
                                Edit
                                </Link>
                            </template>
                        </DynamicTable>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
