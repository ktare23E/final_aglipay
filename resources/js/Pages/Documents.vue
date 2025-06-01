<script setup>
import DynamicTableVue from '@/Components/DynamicTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed,h } from 'vue';



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


        
        
    </AuthenticatedLayout>
</template>

