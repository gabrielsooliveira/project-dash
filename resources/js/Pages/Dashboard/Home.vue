<script setup>
import { Head, Link } from '@inertiajs/vue3';
import CardSimple from '@/js/Components/Cards/CardSimple.vue';

const items = [
    {
        title: 'Projeto X',
        icon: 'fa-solid fa-users',
        value: 10,
        formatter: (value) => `${value} membros`,
    },
    {
        title: 'Projeto B',
        icon: 'fa-solid fa-file-alt',
        value: 5,
        formatter: (value) => `${value} membros`,
    },
    {
        title: 'Projeto F',
        icon: 'fa-solid fa-comments',
        value: 20,
        formatter: (value) => `${value} membros`,
    },
    {
        title: 'Projeto G',
        icon: 'fa-solid fa-comments',
        value: 20,
        formatter: (value) => `${value} membros`,
    },{
        title: 'Projeto H',
        icon: 'fa-solid fa-comments',
        value: 20,
        formatter: (value) => `${value} membros`,
    },{
        title: 'Projeto Y',
        icon: 'fa-solid fa-comments',
        value: 20,
        formatter: (value) => `${value} membros`,
    },{
        title: 'Projeto Z',
        icon: 'fa-solid fa-comments',
        value: 20,
        formatter: (value) => `${value} membros`,
    }
];
</script>

<template>
    <Head title="Dashboard"></Head>
    <div class="row ps-0 mb-auto">
        <div class="col-lg-7 display-3 text-primary">
            Bem-vindo de volta, <span class="fw-bold">{{ $page.props.auth.user.name }}</span>! Aqui estão suas atualizações mais recentes.
        </div>
        <div class="col-lg-5">
            <div class="bg-body rounded shadow-md p-3">
                <h6 class="border-bottom pb-2 mb-0">Atualizações Recentes</h6>
                <div class="d-flex text-muted pt-3">
                    <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" src="https://dummyimage.com/600x400/48549b/fff" width="32" height="32">

                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@Projeto X</strong>
                        Novo arquivo adicionado no Grupo "Projeto X". Você pode acessá-lo na aba "Arquivos" do grupo.
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" src="https://dummyimage.com/600x400/849dd1/fff" width="32" height="32">

                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@Projeto Y</strong>
                        Arquivo alterado no Grupo "Projeto Y". Você pode acessá-lo na aba "Arquivos" do grupo.
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" src="https://dummyimage.com/600x400/384385/fff" width="32" height="32">

                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@Projeto Z</strong>
                        Usuário "user_3" adicionado ao Grupo "Projeto Z". Você pode acessá-lo na aba "Membros" do grupo.
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" src="https://dummyimage.com/600x400/384385/fff" width="32" height="32">

                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@Projeto Z</strong>
                        Usuário "user_2" adicionado ao Grupo "Projeto Z". Você pode acessá-lo na aba "Membros" do grupo.
                    </p>
                </div>
                <small class="d-block text-end mt-3">
                <a href="#">Todas Atualizações</a>
                </small>
            </div>
        </div>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3 shadow-md mt-5">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Organize e acompanhe seus grupos de estudo com facilidade!</h1>
            <p class="col-md-8 fs-4">Gere relatórios completos, visualize o progresso dos participantes e mantenha tudo sob controle em um só lugar</p>
            <button class="btn btn-primary bg-gradient btn-lg" type="button">Comece agora</button>
        </div>
    </div>
</template>
