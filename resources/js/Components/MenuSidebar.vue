<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from "@inertiajs/vue3";
import CollapsedButton from '@/js/Components/CollapsedButton.vue';

const page = usePage();
const user = computed(() => page.props.auth.user);

const isCollapsed = ref(true);

const toggleCollapse = () => {
    isCollapsed.value = !isCollapsed.value;
};
</script>

<template>
    <div class="d-none d-lg-flex flex-column flex-shrink-0 p-3 bg-light vh-100 left-0 top-0 shadow-lg" id="sidebar">
        <a :href="route('dashboard')" class="d-flex align-items-center mb-1 link-dark text-decoration-none fw-bold">
            Dashboard
        </a>
        <hr>

        <ul class="list-unstyled ps-0 mb-auto">
            <li class="mb-1">
                <CollapsedButton targetId="admin-collapse" label="Gestão" initialState="true" />
                <div class="collapse show" id="admin-collapse">
                    <ul class="nav nav-pills flex-column fw-normal pb-1 small ms-2">
                        <li class="nav-item mt-2">
                            <Link :href="route('dashboard')" class="nav-link rounded" :class="{ 'active': $page.url === '/dashboard' }">
                                <font-awesome-icon icon="fa-solid fa-house" class="me-2" /> Home
                            </Link>
                        </li>
                        <li :href="route('dashboard')" class="nav-item mt-2">
                            <Link :href="route('group_index')" class="nav-link rounded" :class="{ 'active': $page.url === '/group' }">
                                <font-awesome-icon icon="fa-solid fa-users-line" class="me-2" /> Grupos
                            </Link>
                        </li>
                        <li :href="route('dashboard')" class="nav-item mt-2">
                            <Link  class="nav-link rounded disabled">
                            <font-awesome-icon icon="fa-solid fa-magnifying-glass-chart" class="me-2" /> Relatórios
                            </Link>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{ user.name }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
                <li>
                    <Link class="dropdown-item" href="#">Perfil</Link>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <Link :href="route('logout')" method="post" as="button" class="dropdown-item">Logout</Link>
                </li>
            </ul>
        </div>
    </div>

    <!-- Offcanvas para telas pequenas -->
    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom">
            <a :href="route('dashboard')" class="d-flex align-items-center link-dark text-decoration-none">
                <span class="fs-4 fw-bold">Dashboard</span>
            </a>
            <button type="button" class="btn-close btn-close-primary" data-bs-dismiss="offcanvas" aria-label="botão de fechamento"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column">
            <ul class="list-unstyled ps-0 mb-auto">
            <li class="mb-1">
                <CollapsedButton targetId="admin-collapse" label="Gestão" initialState="true" />
                <div class="collapse show" id="admin-collapse">
                    <ul class="nav nav-pills flex-column fw-normal pb-1 small ms-2">
                        <li class="nav-item mt-2">
                            <Link :href="route('dashboard')" class="nav-link rounded" :class="{ 'active': $page.url === '/dashboard' }">
                                <font-awesome-icon icon="fa-solid fa-house" class="me-2" /> Home
                            </Link>
                        </li>
                        <li :href="route('group_index')" class="nav-item mt-2" :class="{ 'active': $page.url === '/group' }">
                            <Link class="nav-link rounded">
                                <font-awesome-icon icon="fa-solid fa-users-line" class="me-2" /> Grupos
                            </Link>
                        </li>
                        <li :href="route('dashboard')" class="nav-item mt-2">
                            <Link  class="nav-link rounded disabled">
                            <font-awesome-icon icon="fa-solid fa-magnifying-glass-chart" class="me-2" /> Relatórios
                            </Link>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{ user.name }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
                <li>
                    <Link class="dropdown-item" href="#">Perfil</Link>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <Link :href="route('logout')" method="post" as="button" class="dropdown-item">Logout</Link>
                </li>
            </ul>
        </div>
        </div>
    </div>
</template>

<style scoped>
#sidebar {
    width: 280px;
}
</style>
