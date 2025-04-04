<script setup>
import MainNavbar from '@/js/Components/MainNavbar.vue';
import Toast from '@/js/Components/Toast.vue';
</script>

<template>
    <MainNavbar></MainNavbar>
    <main class="vh-100 d-flex flex-column justify-content-center align-items-center overflow-hidden">
        <slot></slot>
        <Toast />
    </main>
</template>
