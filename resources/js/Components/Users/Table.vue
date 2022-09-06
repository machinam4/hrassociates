<template>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-x-auto rounded-md">
                    <table class="table-fixed min-w-full text-center">
                        <thead class="bg-blue-300 border-b">
                            <tr>
                                <th
                                    scope="col"
                                    class="text-md font-bold text-gray-900 px-6 py-2 text-center"
                                >
                                    #
                                </th>
                                <th
                                    scope="col"
                                    class="text-md font-bold text-gray-900 px-6 py-2 text-center"
                                >
                                    Full Names
                                </th>
                                <th
                                    scope="col"
                                    class="text-md font-bold text-gray-900 px-6 py-2 text-center"
                                >
                                    Email
                                </th>
                                <th
                                    scope="col"
                                    class="text-md font-bold text-gray-900 px-6 py-2 text-center"
                                >
                                    Phone
                                </th>
                                <th
                                    scope="col"
                                    class="text-md font-bold text-gray-900 px-6 py-2 text-center"
                                >
                                    Date Added
                                </th>
                                <th
                                    scope="col"
                                    class="text-sm font-medium text-gray-900 px-6 py-3 text-center"
                                >
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b hover:bg-blue-100 hover:cursor-pointer"
                                v-for="user in users"
                                :key="id"
                            >
                                <td
                                    class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900"
                                >
                                    1
                                </td>
                                <td
                                    class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap"
                                >
                                    {{ user.first_name }}&nbsp;{{
                                        user.middle_name
                                    }}&nbsp;{{ user.last_name }}
                                </td>
                                <td
                                    class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap"
                                >
                                    {{ user.email }}
                                </td>
                                <td
                                    class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap"
                                >
                                    {{ user.phone }}
                                </td>
                                <td
                                    class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap"
                                >
                                    {{ user.created_at }}
                                </td>
                                <td
                                    class="text-sm text-gray-900 font-light py-3 whitespace-nowrap"
                                >
                                    <div
                                        class="flex items-center justify-center"
                                    >
                                        <div class="inline-flex" role="group">
                                            <button
                                                type="button"
                                                @click="modalEditData(user)"
                                                class="rounded-md inline-block px-6 py-2.5 bg-blue-300 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-500 focus:bg-blue-500 focus:outline-none focus:ring-0 active:bg-blue-600 transition duration-150 ease-in-out"
                                            >
                                                Edit
                                            </button>
                                            <button
                                                type="button"
                                                @click="DeleteData(user)"
                                                class="rounded-md mx-2 inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-0 active:bg-red-800 transition duration-150 ease-in-out"
                                            >
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useInterfaceStore } from "@/stores/interface";
import { storeToRefs } from "pinia";

const interfaceStore = useInterfaceStore();
const { EditModalIsOpen, DeleteModalIsOpen, EditData } =
    storeToRefs(interfaceStore);
const { toggleModal, setEditData } = interfaceStore;
defineProps({
    users: Array,
});
function modalEditData(user) {
    setEditData(user);
    toggleModal("Edit");
}
</script>
