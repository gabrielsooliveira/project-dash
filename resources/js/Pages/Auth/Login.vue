<script setup>
import { useForm, Head, Link } from '@inertiajs/vue3';
import Toast from '@/js/Components/Toast.vue';

const form = useForm({
    email: '',
    password: '',
});
</script>

<template>
    <Head title="Login"></Head>

    <div class="bg-body-tertiary vh-100">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center px-2 py-4">
                <div class="col-xl-7 text-center d-none d-xl-block">
                    <h2 class="text-uppercase text-primary display-3 fw-bold">login</h2>
                </div>

                <div class="col-xl-5">
                    <div class="p-5 card shadow-lg rounded w-100 h-100">
                        <div class="text-center">
                            <h2 class="fw-bold text-primary">Bem vindo de volta!</h2>
                            <p class="fw-light">Faça o login para continuar</p>
                        </div>
                        <div>
                            <form @submit.prevent="form.post(route('login_store'))">
                                <div>
                                    <label class="form-label fw-semibold" for="email">Email</label>
                                    <input class="form-control" id="email" v-model="form.email" type="email" required
                                        autocomplete="email" />
                                    <span v-if="form.errors.email">{{ form.errors.email }}</span>
                                </div>

                                <div>
                                    <label class="form-label fw-semibold" for="password">Senha</label>
                                    <input class="form-control" id="password" v-model="form.password" type="password"
                                        required />
                                    <span v-if="form.errors.password">{{ form.errors.password }}</span>
                                </div>
                                <Link class="text-decoration-none" href="#" aria-label="registre-se">Esqueceu sua senha?
                                </Link>
                                <div class="d-grid gap-2 my-4">
                                    <button type="submit" class="btn btn-primary mt-3">Entrar</button>
                                    <p class="fs-7">Ao fazer login você concorda com os <a href="#" target="_blank">Termos de Uso</a> e <a href="#" target="_blank">Política de Privacidade</a></p>
                                </div>
                            </form>
                        </div>

                        <Link class="mt-2 text-decoration-none fw-bold" :href="route('register')" aria-label="registre-se">Ainda não possui uma conta? <span class="text-info">Registra-se.</span></Link>

                        <Link class="mt-2 text-decoration-none fw-bold" :href="route('home')" aria-label="retornar para home">Ir para home <font-awesome-icon icon="fa-solid fa-door-open" /></Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Toast />
</template>
