<script setup>
import { ref, onMounted, onUnmounted, watch, defineProps } from 'vue';
import Chart from 'chart.js/auto';

const props = defineProps({
    labels: {
        type: Array,
        required: true
    },
    datasets: {
        type: Array,
        required: true
    },
    chartTitle: {
        type: String,
        default: 'Gráfico'
    },
    type: {
        type: String,
        default: 'bar'
    },
    options: {
        type: Object,
        default: () => ({
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Gráfico'
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return `${tooltipItem.dataset.label}: ${tooltipItem.raw}%`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            hover: {
                mode: 'index',
                intersect: false
            }
        })
    }
});

const chartCanvas = ref(null);
let chartInstance = null;

const createChart = () => {
    if (chartInstance) {
        chartInstance.destroy();
    }

    const ctx = chartCanvas.value.getContext('2d');

    chartInstance = new Chart(ctx, {
        type: props.type,
        data: {
            labels: props.labels,
            datasets: props.datasets
        },
        options: props.options
    });
};

onMounted(() => {
    createChart();
});

onUnmounted(() => {
    if (chartInstance) {
        chartInstance.destroy();
    }
});

watch(
    () => [props.labels, props.datasets, props.options],
    () => {
        if (chartInstance) {
            chartInstance.data.labels = props.labels;
            chartInstance.data.datasets = props.datasets;
            chartInstance.options = props.options;
            chartInstance.update();
        }
    },
    { deep: true }
);
</script>

<template>
    <div class="h-100 w-100">
        <canvas ref="chartCanvas"></canvas>
    </div>
</template>
