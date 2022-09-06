<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps(["href", "active"]);
// const classes = computed(() => props.active
//     ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition  duration-150 ease-in-out'
//     : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
// );

const classes = computed(() =>
    props.active
        ? "block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600"
        : 'block py-1 md:py-3 pl-1 align-middle hover:text-pink-600 no-underline text-gray-900 hover:border-orange-600"'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
