<script setup>
import { Link, Head } from '@inertiajs/vue3';

const props = defineProps({
    groups: Array
});
</script>

<template>
    <Head title="Grupos"></Head>

    <div class="py-1 px-4 rounded text-bg-primary">
        <h1 class="display-4 fst-italic text-white">Grupos de Estudo</h1>
    </div>

    <section class="mt-5">
        <div class="row g-4">
            <div class="col-lg-4" v-for="item in groups" :key="item.id">
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

                        <Link :href="route('group_show')" class="btn btn-sm btn-primary mt-3">Acessar</Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
