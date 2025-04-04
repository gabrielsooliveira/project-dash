<script setup>
import { ref } from 'vue'
import ModalDialog from '@/js/Components/Modals/ModalDialog.vue';

const props = defineProps({
    isVisible: Boolean,
    title: String,
    message: String,
    confirmText: { type: String, default: 'Confirmar' },
    cancelText: { type: String, default: 'Cancelar' }
});

const emit = defineEmits(['confirm', 'close']);

const confirmAction = () => {
    emit('confirm');
};

const closeModal = () => {
    emit('close');
};
</script>

<template>
    <ModalDialog :isVisible="isVisible" @close="closeModal" :title="title">
        <p class="mb-4">{{ message }}</p>
        <div class="flex justify-end gap-3">
            <button @click="closeModal" class="btn btn-sm btn-secondary me-2">
                {{ cancelText }}
            </button>
            <button @click="confirmAction" class="btn btn-sm btn-primary">
                {{ confirmText }}
            </button>
        </div>
    </ModalDialog>
</template>
