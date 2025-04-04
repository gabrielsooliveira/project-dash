<script setup>
import { Link, Head } from '@inertiajs/vue3';

const items = [
    {
        id: 1,
        name: 'Grupo de Estudo 1',
        description: 'Descrição do Grupo de Estudo 1',
        created_at: '2023-01-01'
    },
    {
        id: 2,
        name: 'Grupo de Estudo 2',
        description: 'Descrição do Grupo de Estudo 2',
        created_at: '2023-01-03'
    },
    {
        id: 3,
        name: 'Grupo de Estudo 3',
        description: 'Descrição do Grupo de Estudo 3',
        created_at: '2023-01-03'
    },
    {
        id: 4,
        name: 'Grupo de Estudo 4',
        description: 'Descrição do Grupo de Estudo 4',
        created_at: '2023-01-03'
    },
    {
        id: 5,
        name: 'Grupo de Estudo 5',
        description: 'Descrição do Grupo de Estudo 5',
        created_at: '2023-01-03'
    },
]
</script>

<template>
    <Head title="Grupos"></Head>

    <div class="py-1 px-4 rounded text-bg-primary">
        <h1 class="display-4 fst-italic text-white">Grupos de Estudo</h1>
    </div>

    <section class="mt-5">
        <div class="row g-4">
            <div class="col-lg-4" v-for="item in items" :key="item.id">
                <div class="card border-primary border-2 shadow-md">
                    <div class="p-4 ">
                        <strong class="d-inline-block mb-2 text-success">{{ item.name }}</strong>
                        <h4 class="mb-0">Contéudos: </h4>
                        <div class="row g-2 text-primary">
                            <div class="col-auto">
                                <font-awesome-icon icon="fa-brands fa-python" />
                            </div>
                            <div class="col-auto">
                                <font-awesome-icon icon="fa-solid fa-database" />
                            </div>
                            <div class="col-auto">
                                <font-awesome-icon icon="fa-solid fa-square-root-variable" />
                            </div>
                        </div>

                        <div class="mb-0 mt-3 text-muted">Iniciado: {{ item.created_at }}</div>
                        <p class="mb-auto">{{ item.description }}</p>
                        <Link :href="route('group_show')" class="btn btn-sm btn-primary mt-3">Acessar</Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
