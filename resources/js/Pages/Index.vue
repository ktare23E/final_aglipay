<!-- resources/js/Pages/Members.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import DynamicTable from '@/Components/DynamicTable.vue';
import { computed, onMounted } from 'vue';
import CreateButton from '@/Components/CreateButton.vue';

const props = defineProps({
    name: String,
    frameworks : Array
});


</script>

<template>

    <Head title="Learn Laravel Vue Inertia" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Learn Laravel Vue Inertia</h2>
            <CreateButton name="Create Members" />
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h1>Hello, {{props.name}}</h1>
                        <p>Lord please help me clean myself</p>
                        <p>In this lesson we will going to learn</p>
                        <ul>
                            <li v-for="framework in frameworks" :key="framework" v-text="framework"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
