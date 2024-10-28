<template>
    <div class="p-6 pb-4 relative">
        <div v-if="showPermissionPopup"
             class="fixed top-0 left-0 w-full bg-black bg-opacity-50 px-6 z-10 pt-40" style="min-height: 800px">
            <div class="bg-base-100 p-6 rounded shadow-lg text-center">
                <h3 class="text-lg font-bold mb-4">
                    To Continue Further We need your permission to access your Microphone and Location.
                </h3>
                <img :src="permission_image" class="rounded shadow-inner mb-4" alt="">
                <p class="text-warning drop-shadow">
                    Once you have enabled the permissions please reload the App or click the button below.
                </p>
                <button @click="requestPermissions" class="btn btn-primary w-full mt-3">
                    Yes I granted the permissions.
                </button>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-6">Registration Form</h2>
        <form @submit.prevent="submitForm">

            <!-- Personal Information Section -->
            <div class="flex mb-4">
                <!-- Avatar Upload Field -->
                <div>
                    <p class="text-sm font-bold text-gray-500">Upload Avatar</p>
                    <p v-if="formData.errors && formData.errors.avatar" class="text-error">
                        {{ formData.errors.avatar }}
                    </p>
                    <label for="avatar"
                           class="mt-2 p-2 cursor-pointer border-dashed border-2
                           border-primary/30 shadow-xl shadow-primary/10 bg-base-100
                           flex justify-center items-center h-24 w-24 rounded-lg">
                        <img v-if="formData.avatar !== ''" :src="avatar_preview" alt="Avatar Preview" class="w-full h-full"/>
                        <svg v-else class="text-primary-content drop-shadow" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor" width="40" height="40">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>

                        <input type="file" id="avatar" @change="handleAvatarUpload" class="hidden" accept="image/*"/>

                    </label>
                </div>

                <div class="ml-6 w-full">
                    <!-- Name Field -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1" for="name">
                            Name
                        </label>
                        <input type="text" id="name" v-model="formData.name" class="input input-sm input-bordered w-full" required/>
                    </div>

                    <!-- Gender Select Field -->
                    <div>
                        <label class="block text-sm font-medium mb-1" for="gender">Gender</label>
                        <select id="gender" v-model="formData.gender" class="select select-sm select-bordered w-full" required>
                            <option value="" disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Date of Birth Select Field -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1" for="dob">
                    Date of Birth
                    <span v-if="formData.errors && formData.errors.password" class="text-error">
                        {{ formData.errors.password }}
                    </span>
                </label>
                <input type="date" id="dob" v-model="formData.dob" class="input input-bordered w-full" required/>
            </div>

            <!-- Country Select Field -->
            <div class="mb-4">
                <CountryInput v-model="selectedCountry" :errorMessages="formData.errors && formData.errors.phone ? formData.errors.phone : ''"/>
            </div>

            <!-- Phone Number Field -->
            <div class="mb-4" v-show="selectedCountry.length">
                <label class="block text-sm font-medium mb-1" for="phone">
                    Phone Number
                    <span class="text-primary text-sm">{{ !formData.phone ? formData.phone : '' }}</span>
                    <br>
                    <span v-if="formData.errors && formData.errors.phone" class="text-error">
                        {{ formData.errors.phone }}
                    </span>
                </label>

                <div class="flex gap-1 items-center">
                    <input type="text" disabled :value="selectedCountry[2]" max="5" class="input bg-base-100 text-center shadow-lg input-sm font-bold input-bordered w-full" required/>
                    <label id="phone_body" class="font-bold text-2xl">-</label>
                    <input type="number" id="phone_body" v-model="phone_body" max="99999999999"
                           class="input input-sm input-bordered" required/>
                </div>
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1" for="password">
                    Password
                    <span v-if="formData.errors && formData.errors.password" class="text-error">
                        {{ formData.errors.password }}
                    </span>
                </label>
                <input
                    type="password" id="password" v-model="formData.password" class="input input-bordered w-full"
                    :class="formData.errors && formData.errors.password ? 'input-error shadow-error' : ''" required
                />
            </div>

            <div v-show="!allPermissionsGranted" class="mb-2 flex items-center gap-4">
                <button type="button" @click="showPermissionPopup = !showPermissionPopup"
                        class="btn btn-sm btn-warning">Grant Required Permissions</button>
            </div>
            <!-- Submit Button -->
            <button type="submit" :disabled="!allPermissionsGranted" class="btn btn-primary w-full my-4"
                    :class="formData.processing ? 'btn-loading' : ''">
                Register
            </button>


            <!-- Inertia Link to Login Route -->
            <Link href="/login" class="link link-info drop-shadow">Already have an Account? Login</Link>
        </form>

    </div>
</template>

<script setup>
import {onMounted, ref, watch} from "vue";
import CountryInput from "../Components/CountryInput.vue";
import getGeoLocation from "../Composables/useGetGeoLocation.js";
import getMic from "../Composables/useGetMicroPhonePermission.js";
import permission_image from '../../../public/storage/permissions_request.png';
import {useForm} from "@inertiajs/vue3";
// Variables
const showPermissionPopup = ref(false);
const selectedCountry = ref({});
const phone_body = ref(null);
let avatar_preview = ref(null);
let allPermissionsGranted = ref(false);
// Variables End

const formData = useForm({
    name: '',
    phone: '',
    password: '',
    gender: '',
    country: '',
    dob: '',
    avatar: ''
});

watch([selectedCountry, phone_body], ([newCountry, new_phone_body]) => {
    formData.country = newCountry[1];
    formData.phone = `+${newCountry[2]}${new_phone_body}`;
});

const requestPermissions = async () => {
    try {
        await Promise.all([getMic(), getGeoLocation()]);
        allPermissionsGranted.value = true;
        showPermissionPopup.value = false;
    } catch (error) {
        allPermissionsGranted.value = false;
        showPermissionPopup.value = true;
    }
};

onMounted(() => {
    requestPermissions();
});

const handleAvatarUpload = (event) => {
    if (event.target.files[0]) {
        avatar_preview = URL.createObjectURL(event.target.files[0]);
        formData.avatar = event.target.files[0];
    }
};

const submitForm = () => {
    formData.post(route('register.post'));
};

</script>
