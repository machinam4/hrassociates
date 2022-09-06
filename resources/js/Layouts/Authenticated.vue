<script setup>
import { ref } from "vue";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
/*Toggle dropdown list*/
const userMenuActive = ref(false);
const navMenuActive = ref(true);
function toggleMenu(menu) {
    if (menu === "nav") {
        navMenuActive.value = !navMenuActive.value;
    }
    if (menu === "user") {
        userMenuActive.value = !userMenuActive.value;
    }
}
</script>

<template>
    <!-- <div class="leading-normal font-sans tracking-normal"> -->
    <div class="min-h-screen bg-gray-100 font-sans leading-normal tracking-normal">
        <nav id="header" class="bg-white fixed w-full top-0 shadow">
            <div
                class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0"
            >
                <div class="w-1/2 pl-2 md:pl-0">
                    <Link
                        :href="route('dashboard')"
                        class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold"
                    >
                        <BreezeApplicationLogo class="mr-2 inline h-9 w-auto" />HR Associates
                    </Link>
                    <!-- <a
                            
                            href="#"
                    >-->
                    <!-- <i class="fas fa-sun text-pink-600 pr-3"></i>  -->
                    <!-- </a> -->
                </div>
                <div class="w-1/2 pr-0">
                    <div class="flex relative inline-block float-right">
                        <div class="relative text-sm">
                            <button
                                id="userButton"
                                @click="toggleMenu('user')"
                                class="flex items-center focus:outline-none mr-3"
                            >
                                <img
                                    class="w-8 h-8 rounded-full mr-4"
                                    src="http://i.pravatar.cc/300"
                                    :alt="$page.props.auth.user.first_name"
                                />
                                <span class="hidden md:inline-block">
                                    Hi,
                                    {{ $page.props.auth.user.first_name }}
                                </span>
                                <svg
                                    class="pl-2 h-2"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 129 129"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    enable-background="new 0 0 129 129"
                                >
                                    <g>
                                        <path
                                            d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"
                                        />
                                    </g>
                                </svg>
                            </button>
                            <div
                                v-show="userMenuActive"
                                id="userMenu"
                                class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30"
                            >
                                <ul class="list-reset">
                                    <li>
                                        <a
                                            href="#"
                                            class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline"
                                        >My account</a>
                                    </li>
                                    <li>
                                        <a
                                            href="#"
                                            class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline"
                                        >Notifications</a>
                                    </li>
                                    <li>
                                        <hr class="border-t mx-2 border-gray-400" />
                                    </li>
                                    <li>
                                        <BreezeDropdownLink
                                            :href="route('logout')"
                                            method="post"
                                            as="button"
                                        >Log Out</BreezeDropdownLink>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="block lg:hidden pr-4">
                            <button
                                id="nav-toggle"
                                @click="toggleMenu('nav')"
                                class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none"
                            >
                                <svg
                                    class="fill-current h-3 w-3"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    v-if="navMenuActive"
                    class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block mt-2 lg:mt-0 bg-white z-20"
                    id="nav-content"
                >
                    <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                        <li class="mr-6 my-2 md:my-0">
                            <BreezeNavLink
                                :href="route('dashboard')"
                                :active="route().current('dashboard')"
                            >Dashboard</BreezeNavLink>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <BreezeNavLink
                                :href="route('users_index')"
                                :active="route().current('users_index')"
                            >Users</BreezeNavLink>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <BreezeNavLink
                                :href="route('roles_index')"
                                :active="route().current('roles_index')"
                            >Roles</BreezeNavLink>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <BreezeNavLink
                                :href="route('emp_index')"
                                :active="route().current('emp_index')"
                            >Employees</BreezeNavLink>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <BreezeNavLink
                                :href="route('comp_index')"
                                :active="route().current('comp_index')"
                            >Companies</BreezeNavLink>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <BreezeNavLink
                                :href="route('jobs_index')"
                                :active="route().current('jobs_index')"
                            >Vacancies</BreezeNavLink>
                        </li>
                    </ul>

                    <div class="relative pull-right pl-4 pr-4 md:pr-0">
                        <input
                            type="search"
                            placeholder="Search"
                            class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal"
                        />
                        <div class="absolute search-icon" style="top: 0.375rem; left: 1.75rem">
                            <svg
                                class="fill-current pointer-events-none text-gray-800 w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="bg-white mt-10 md:mt-24 shadow" v-if="$slots.header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <slot />
        </main>

        <footer class="bg-white border-t border-gray-400 shadow">
            <div class="container max-w-md mx-auto flex py-8">
                <div class="w-full mx-auto flex flex-wrap">
                    <div class="flex w-full md:w-1/2">
                        <div class="px-8">
                            <h3 class="font-bold font-bold text-gray-900">About</h3>
                            <p class="py-4 text-gray-600 text-sm">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Maecenas vel mi ut felis tempus
                                commodo nec id erat. Suspendisse consectetur
                                dapibus velit ut lacinia.
                            </p>
                        </div>
                    </div>

                    <div class="flex w-full md:w-1/2">
                        <div class="px-8">
                            <h3 class="font-bold font-bold text-gray-900">Social</h3>
                            <ul class="list-reset items-center text-sm pt-3">
                                <li>
                                    <a
                                        class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1"
                                        href="#"
                                    >Add social link</a>
                                </li>
                                <li>
                                    <a
                                        class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1"
                                        href="#"
                                    >Add social link</a>
                                </li>
                                <li>
                                    <a
                                        class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1"
                                        href="#"
                                    >Add social link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- </div> -->
</template>
