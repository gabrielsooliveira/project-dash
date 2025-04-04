<script setup>
import { Head } from '@inertiajs/vue3';
import IconLogo from "@/assets/images/logo.svg";
</script>

<template>
    <Head title="Home"></Head>

    <section class="text-center">
        <img :src="IconLogo" alt="imagem principal" class="img-fluid" width="500">
    </section>
</template>
