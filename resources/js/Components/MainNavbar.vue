<script setup>
import { Link } from '@inertiajs/vue3';
import IconLogo from "@/assets/images/icon.svg";
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-white fixed-top" aria-label="Navbar site">
        <div class="container-fluid">
            <a :href="route('home')" class="d-flex align-items-center link-primary text-decoration-none">
                <img :src="IconLogo" alt="imagem principal" class="img-fluid me-1" width="40">
                <span class="fs-4 fw-bold">Dash</span>
            </a>
            <button class="btn btn-primary d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSite"
            aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
                <font-awesome-icon :icon="['fas', 'bars']" size="lg"/>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarSite">
                <ul class="navbar-nav col-lg-6 justify-content-lg-center fw-semibold">
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" :href="route('home')" :class="{ 'active': $page.url === '/' }">Home</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" href="#">Sobre</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" href="#">FAQ</Link>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-6 justify-content-lg-end mt-2">
                    <Link class="btn btn-primary btn-sm bg-gradient shadow-lg fw-semibold" :href="route('login')">Acesso</Link>
                </div>
            </div>
        </div>
    </nav>
</template>
