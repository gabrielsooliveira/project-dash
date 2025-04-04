<script setup>
import { ref } from 'vue';

const props = defineProps({
    targetId: {
        type: String,
        required: true
    },
    label: {
        type: String,
        required: true
    },
    initialState: {
        type: Boolean,
        default: false
    }
});

const isCollapsed = props.initialState ? ref(false) : ref(true);

const toggleCollapse = () => {
    isCollapsed.value = !isCollapsed.value;
};
</script>

<template>
    <div class="d-grid">
        <button
            class="btn btn-toggle text-start rounded collapsed fw-semibold fs-6 p-0 m-0 border-0 d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse"
            :data-bs-target="'#' + targetId"
            :aria-expanded="!isCollapsed"
            @click="toggleCollapse"
        >
            {{ label }}
            <font-awesome-icon :icon="isCollapsed ? 'fa-solid fa-caret-down' : 'fa-solid fa-caret-up'" />
        </button>
    </div>
</template>
