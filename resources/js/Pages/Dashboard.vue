<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import { ref } from 'vue';


const showModal = ref(false);

function openModal() {
    showModal.value = true;
}
function closeModal() {
    showModal.value = false;
}


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>        
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>            
            <button class="py-1 px-2 bg-blue-500 text-white rounded-sm text-sm" @click="openModal">Scan File</button>
        </template>


        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        You're logged in!
                    </div>
                    <Modal :show="showModal" @close="closeModal">
                        <div class="p-4 text-center">Scan File Modal Content</div>
                        <div class="w-full flex items-center justify-center gap-4 mb-2">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                            </div>
                            <div>
                                <button class="py-1 px-2 bg-blue-500 text-white rounded-sm text-sm ">Upload</button>
                            </div>
                        </div>
                    </Modal>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

