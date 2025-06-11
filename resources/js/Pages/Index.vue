<!-- resources/js/Pages/Members.vue -->
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import DynamicTable from '@/Components/DynamicTable.vue';
import { computed, onMounted, ref } from 'vue';
import CreateButton from '@/Components/CreateButton.vue';
import { usePage } from '@inertiajs/vue3';
import LearnNavLink from '@/Components/LearnNavLink.vue';

const props = defineProps({
    frameworks : Array,
    time : String
});


const logout =  () => {
    router.post('logout',{}, {
        onSuccess : () => {
            alert('User Log out sucessfully')
        },
        onError : (error) => {
            console.log('Log out failed',error);
            
        }
    });
}



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
                        <h1>Hello, {{ $page.props.auth.full_name }}</h1>
                        <p>Lord please help me clean myself</p>
                        <p>In this lesson we will going to learn</p>
                        <ul>
                            <li v-for="framework in props.frameworks" :key="framework" v-text="framework"></li>
                        </ul>
                    </div>
                    <div class="p-6">
                        <h1>Navigate Links Active Links Lesson</h1>
                        <ul>
                            <li>
                                <LearnNavLink :href="'/dashboard'" :active="$page.component === 'Dashboard'">Home</LearnNavLink>
                            </li>
                            <li>
                                <LearnNavLink href="/learning" :active="$page.component === 'Index'">Learning</LearnNavLink>
                            </li>
                        </ul>
                    </div>
                    <div class="p-6 mt-[1000px]">
                        <p>The currrent time right now is {{ props.time }}</p>
                        <Link href="/learning" class="text-blue-500" preserve-scroll>Reload </Link>
                    </div>
                    <div class="p-6">
                        <!-- <Link href="logout" :data="{name : 'Kristian Tare'}" method="post" as="button">Logout</Link> -->
                        <button @click="logout">Logout</button>
                    </div>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
