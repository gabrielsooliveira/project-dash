<script setup>
import MenuSidebar from '@/js/Components/MenuSidebar.vue';
import Toast from '@/js/Components/Toast.vue';
</script>

<template>
    <!-- Container principal com altura total da tela e sem overflow -->
    <div class="d-flex vh-100 bg-body-tertiary overflow-hidden">
        <!-- Sidebar fixo -->
        <MenuSidebar class="position-sticky top-0 h-100 flex-shrink-0" />

        <!-- Conteúdo principal com scroll -->
        <main class="flex-grow-1 overflow-auto position-relative">
            <nav class="navbar d-lg-none bg-primary px-2">
                <a class="navbar-brand text-white" :href="route('dashboard')">Dashboard</a>
                <button class="btn btn-sm btn-primary"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <font-awesome-icon icon="fa-solid fa-bars" />
                </button>
            </nav>

            <div class="container-fluid p-5">
                <slot></slot>
                <Toast />
            </div>
        </main>
    </div>
</template>
