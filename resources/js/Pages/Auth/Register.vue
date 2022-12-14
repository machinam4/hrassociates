<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    first_name: "",
    middle_name: "",
    last_name: "",
    phone: "",
    role: "",
    email: "",
    password: "",
    password_confirmation: "",
    terms: false,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Register" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="first_name" value="First Name" />
                <BreezeInput
                    id="first_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.first_name"
                    required
                    autofocus
                    autocomplete="first_name"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel for="middle_name" value="Middle Name" />
                <BreezeInput
                    id="middle_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.middle_name"
                    required
                    autocomplete="middle_name"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel for="last_name" value="Last Name" />
                <BreezeInput
                    id="last_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.last_name"
                    required
                    autocomplete="last_name"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel for="phone" value="Phone" />
                <BreezeInput
                    id="phone"
                    type="tel"
                    class="mt-1 block w-full"
                    v-model="form.phone"
                    required
                    autocomplete="phone"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel for="role" value="Role" />
                <BreezeInput
                    id="role"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.role"
                    required
                    autocomplete="role"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel for="email" value="Email" />
                <BreezeInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />
            </div>
            <div class="mt-4">
                <BreezeLabel for="password" value="Password" />
                <BreezeInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <BreezeLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />
                <BreezeInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900"
                >
                    Already registered?
                </Link>

                <BreezeButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Register
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
