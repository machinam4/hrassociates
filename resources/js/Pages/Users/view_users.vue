<script setup>
import { ref } from "vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import RolesTable from "@/Components/Users/Table.vue";
import { PlusIcon } from "@heroicons/vue/outline";
// import RolesModal from "@/Components/Roles/Modal.vue";
import { useInterfaceStore } from "@/stores/interface";
import { storeToRefs } from "pinia";
import EditUserModal from "@/Components/Users/EditUserModal.vue";
import AddUserModal from "@/Components/Users/AddUserModal.vue";

const interfaceStore = useInterfaceStore();
const { AddModalIsOpen, EditModalIsOpen } = storeToRefs(interfaceStore);
const { toggleModal } = interfaceStore;

defineProps({
    users: Array,
});
</script>

<template>
    <Head title="Users" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="container w-full mx-auto">
            <div
                class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal"
            >
                <!--Console Content-->
                <button
                    type="button"
                    @click="toggleModal('Add')"
                    class="inline-block px-4 pt-2.5 pb-2 bg-green-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out flex align-center"
                >
                    <PlusIcon class="h-4 w-4" /> &nbsp; New User
                </button>
                <RolesTable :users="users" />
                <AddUserModal :isOpen="AddModalIsOpen" />
                <EditUserModal :isOpen="EditModalIsOpen" />
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
