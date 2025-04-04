<script setup>
import { computed } from 'vue';

// Propriedades recebidas pelo componente
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    icon: {
        type: [String],
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
    <div class="card text-center border-0 shadow-md p-3">
        <font-awesome-icon :icon="props.icon" class="fa-3x text-secondary mb-3"/>
        <h5 class="fw-bold">{{ title }}</h5>
        <p>{{ formattedValue }}</p>
    </div>
</template>
