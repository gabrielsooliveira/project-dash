<script setup>
import { useForm, Head, Link } from '@inertiajs/vue3';
import Toast from '@/js/Components/Toast.vue';

const form = useForm({
    name: '',
    email: '',
    address: '',
    password: '',
    password_confirmation: '',
});
</script>

<template>
    <Head title="Registro"></Head>

    <div class="bg-body-tertiary vh-100">
        <div class="container">

            <div class="row vh-100 d-flex justify-content-center align-items-center px-2 py-4">
                <div class="col-xl-7 text-start d-none d-xl-block">
                    <h2 class="text-uppercase text-primary display-3 fw-bold">cadastro</h2>
                </div>

                <div class="col-lg-5">
                    <div class="p-5 card shadow-lg rounded w-100 h-100">
                        <div class="text-start">
                            <h2 class="fw-bold">Registre-se agora mesmo!</h2>
                            <p class="fw-light">Faça o cadastro para continuar</p>
                        </div>
                        <div>
                            <form @submit.prevent="form.post(route('register_store'))">
                                <div>
                                    <label class="form-label fw-semibold" for="name">Nome</label>
                                    <input class="form-control" id="name" v-model="form.name" type="text" required autocomplete="name" />
                                    <span v-if="form.errors.name">{{ form.errors.name }}</span>
                                </div>

                                <div>
                                    <label class="form-label fw-semibold" for="email">Email</label>
                                    <input class="form-control" id="email" v-model="form.email" type="email" required autocomplete="email" />
                                    <span v-if="form.errors.email">{{ form.errors.email }}</span>
                                </div>

                                <div>
                                    <label class="form-label fw-semibold" for="password">Senha</label>
                                    <input class="form-control" id="password" v-model="form.password" type="password" required />
                                    <span v-if="form.errors.password">{{ form.errors.password }}</span>
                                </div>

                                <div>
                                    <label class="form-label fw-semibold" for="password_confirmation">Confirme sua senha</label>
                                    <input class="form-control" id="password_confirmation" v-model="form.password_confirmation" type="password" required />
                                    <span v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</span>
                                </div>

                                <div class="mt-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="term">
                                    <label class="form-check-label fs-7" for="term">Li e concordo com os <a href="#" target="_blank">Termos de Uso</a> e <a href="#" target="_blank">Política de Privacidade</a></label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary text-white mt-3" type="submit" aria-label="botão de registro">Registre-se</button>
                                </div>
                            </form>
                        </div>

                        <Link class="mt-2 text-decoration-none fw-bold" :href="route('login')" aria-label="login">Já tem uma conta? <span class="text-info">Faça login.</span></Link>

                        <Link class="mt-2 text-decoration-none fw-bold" :href="route('home')" aria-label="retornar para home">Ir para home <font-awesome-icon icon="fa-solid fa-door-open" /></Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Toast />
</template>
