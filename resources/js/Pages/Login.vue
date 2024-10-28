<script setup>
import CountryInput from "@/Components/CountryInput.vue";
import {useForm} from "@inertiajs/vue3";
import {ref, watch} from "vue";

const selectedCountry = ref({});
const phone_body = ref(null);

const formData = useForm({
    country: '',
    phone: '',
    password: '',
});

watch([selectedCountry, phone_body], ([newCountry, new_phone_body]) => {
    formData.phone = `+${newCountry[2]}${new_phone_body}`;
});

const submit = (e) => {
    formData.post(route('login'));
};

</script>

<template>
    <div>
        <h1>Login Page</h1>
        <!-- Phone Number Field -->
        <form @submit.prevent="submit" class="m-6">
            <div class="flex mb-4 align-baseline items-center">

                <CountryInput
                    v-model="selectedCountry"
                    typeIs="small"
                    :errorMessages="formData.errors && formData.errors.phone ? formData.errors.phone : ''"
                    class="w-3/12"
                />

                <p class="font-bold text-2xl text-center px-2 mt-4">-</p>

                <label class="text-sm font-medium col-span-7" for="phone">
                    Phone Number
                    <span class="text-primary text-sm">{{ formData.phone !== '' ? formData.phone : '' }}</span>
                    <br>
                    <span v-if="formData.errors && formData.errors.phone" class="text-error">
                        {{ formData.errors.phone }}
                    </span>
                    <input type="number" id="phone_body" v-model="phone_body" max="99999999999"
                           class="input input-bordered w-full py-5" required/>
                </label>

            </div>
            <!-- Password Field -->
            <div class="mb-6">
                <label class="block text-sm font-medium mb-1" for="password">
                    Password
                    <span v-if="formData.errors && formData.errors.password" class="text-error">
                        {{ formData.errors.password }}
                    </span>
                </label>
                <input type="password" id="password" v-model="formData.password" class="input input-bordered w-full"
                       :class="formData.errors && formData.errors.password ? 'input-error shadow-error' : ''" required
                />
            </div>

            <button type="submit" class="btn btn-primary text-white w-full px-12">Login</button>
        </form>



        <Link :href="route('register')" class="btn btn-info m-5">Register</Link>
    </div>
</template>

<style scoped>

</style>
