<script setup>
import { computed } from 'vue';

// Propriedades recebidas pelo componente
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    value: {
        type: [Number, String],
        required: true,
    },
    formatter: {
        type: Function,
        default: null,
    }
});

const formattedValue = computed(() => {
    return props.formatter ? props.formatter(props.value) : props.value;
});
</script>

<template>
    <div class="card shadow-lg h-100 border-0">
        <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
            <p class="fw-semibold fs-4 m-0">{{ formattedValue }}</p>
            <p class="fw-light text-uppercase fs-5 m-0">{{ title }}</p>
        </div>
    </div>
</template>
