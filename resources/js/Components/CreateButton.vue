<template>
    <Link :href="link" class="py-1 px-2 bg-blue-600 text-white text-sm rounded-sm">{{ name }}</Link>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';


    defineProps({
        name : String,
        link : String
    })
</script>