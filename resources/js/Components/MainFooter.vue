<script setup>

</script>

<template>
    <footer class="container">
        <div class="row">
            <div class="col-md-6 row">
                <div class="col-6 mb-3">
                    <h5>Informações</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Condições Gerais</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Faq</a></li>
                    </ul>
                </div>

                <div class="col-6 mb-3">
                    <h5>Suporte</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Central de Ajuda</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contato</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Inscreva-se na nossa newsletter</h5>
                    <p>Toda semana dicas para novas apostas.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email">
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between pt-2 border-top">
            <p class="mt-2">© 2025 OddsAnalytics</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a class="link-dark fs-4" href="#" target="_blank">
                        <font-awesome-icon icon="fa-brands fa-square-x-twitter" />
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-dark fs-4" href="#" target="_blank">
                        <font-awesome-icon icon="fa-brands fa-square-facebook" />
                    </a>
                </li>
                <li class="ms-3">
                    <a class="link-dark fs-4" href="#" target="_blank">
                        <font-awesome-icon icon="fa-brands fa-square-instagram" />
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</template>
