<template>
    <TransitionRoot appear :show="EditModalIsOpen" as="template">
        <Dialog as="div" @close="toggleModal('Edit')" class="relative z-10">
            <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div class="fixed inset-0 bg-black bg-opacity-25" />
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div
                    class="flex min-h-full items-center justify-center p-4 text-center"
                >
                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95"
                    >
                        <DialogPanel
                            class="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
                        >
                            <DialogTitle
                                as="h3"
                                class="text-lg font-medium leading-6 text-gray-900"
                                ><p>
                                    Edit {{ EditData.first_name }}
                                    {{ EditData.last_name }} Form
                                </p>
                            </DialogTitle>
                            <div class="mt-2">
                                <form @submit.prevent="submit">
                                    <div class="form-group mb-6">
                                        <BreezeLabel
                                            for="exampleInputEmail1"
                                            class="form-label inline-block mb-2 text-gray-700"
                                            >Roles Name</BreezeLabel
                                        >
                                        <BreezeInput
                                            type="text"
                                            v-model="form.name"
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            id="exampleInputEmail1"
                                            placeholder="Enter name"
                                            required
                                            autofocus
                                        />
                                    </div>
                                    <div class="form-group form-check mb-6">
                                        <BreezeInput
                                            type="checkbox"
                                            v-model="form.status"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="exampleCheck1"
                                        />
                                        <BreezeLabel
                                            class="form-check-label inline-block text-gray-800"
                                            for="exampleCheck1"
                                            >Active</BreezeLabel
                                        >
                                    </div>
                                    <div class="mt-4">
                                        <button
                                            type="reset"
                                            @click="toggleModal('Edit')"
                                            class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                        >
                                            cancel
                                        </button>
                                        <BreezeButton
                                            :disabled="form.processing"
                                            type="submit"
                                            class="ml-3 px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                                        >
                                            Save
                                        </BreezeButton>
                                    </div>
                                </form>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
} from "@headlessui/vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { useInterfaceStore } from "@/stores/interface";
import { storeToRefs } from "pinia";
import { onMounted, onUpdated } from "@vue/runtime-core";

const interfaceStore = useInterfaceStore();
const { EditModalIsOpen, EditData } = storeToRefs(interfaceStore);
const { toggleModal } = interfaceStore;

const props = defineProps({
    isOpen: Boolean,
});
onUpdated(() => {
    console.log(EditData.value.name);
    form.defaults({
  name: 'Updated Example',
  email: 'updated-default@example.com',
})
});
const form = useForm({
    name: EditData.value.first_name,
    status: EditData.value.role,
});

const submit = () => {
    form.put(route("roles_update"), {
        onFinish: () => form.reset(),
    });
    toggleModal("Edit");
};
</script>
