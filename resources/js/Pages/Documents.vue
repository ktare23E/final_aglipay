<script setup>
import DynamicTableVue from '@/Components/DynamicTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import DynamicTable from '@/Components/DynamicTable.vue'
import { computed,h } from 'vue';

$(document).ready( function () {
    $('#myTable').DataTable();
} );

const props = defineProps({
    users : Array
});

// Define table columns
const columns = ['First Name', 'Last Name', 'Email','Action'];

const rows = computed(() => {
    return props.users.map( user => ({
        'First Name' : user.first_name,
        'Last Name' : user.last_name,
        'Email' : user.email,
        'Action' : '<button>Hello</button>'
    }))
})

</script>

<template>
    
    <Head title="Documents" />

    <AuthenticatedLayout>
    
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Documents
            </h2>
        </template>


        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6">
                        <DynamicTable
                            :columns="columns"
                            :rows="rows"
                        />
                    </div>
                </div>
            </div>
        </div>
        
    </AuthenticatedLayout>
</template>

