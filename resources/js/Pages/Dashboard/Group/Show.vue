<script setup>
import { Head } from '@inertiajs/vue3';

const items = [
        {
            'Autor': 'Mark',
            'Url': 'https://www.google.com',
        },
        {
            'Autor': 'Mark',
            'Url': 'https://www.google.com',
        },
        {
            'Autor': 'Steven',
            'Url': 'https://www.google.com',
        },
        {
            'Autor': 'Mark',
            'Url': 'https://www.google.com',
        },
        {
            'Autor': 'Hugo',
            'Url': 'https://www.google.com',
        }
]
</script>

<template>
    <Head title="Grupo"></Head>
    <div class="row">

    </div>

    <div class="card shadow-md p-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Autor</th>
                <th scope="col">Url</th>
                <th scope="col">Conteudos</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="index">
                    <td>{{ item.Autor }}</td>
                    <td>
                        <a :href="item.Url" target="_blank" rel="noopener noreferrer">{{ item.Url }}</a>
                    </td>
                    <td>
                        <font-awesome-icon icon="fa-brands fa-python" />
                        <font-awesome-icon icon="fa-solid fa-database" />
                        <font-awesome-icon icon="fa-solid fa-square-root-variable" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
