<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import CreateButton from '@/Components/CreateButton.vue';
import Modal from '@/Components/Modal.vue';
import { ref } from 'vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';

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
                        <div class="w-full flex justify-center mb-2">
                            <input type="file">
                            <button class="py-1 px-2 bg-blue-500 text-white rounded-sm text-sm">Scan File</button>
                        </div>
                    </Modal>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

