<style scoped>

#avatar-upload {
    @apply text-sm;
}

#avatar-upload > label{
    @apply mt-2 p-2 cursor-pointer border-dashed border-4 border-base-content/30
    shadow-lg flex justify-center items-center h-24 w-24 rounded-lg;
}

.avatar-upload > svg {
    @apply text-primary-content drop-shadow;
}

.avatar-upload > img {
    @apply w-full h-full;
}


.plain-text-input > label {
    @apply text-sm font-medium;
}

.plain-text-input > input {
    @apply input input-bordered shadow-lg w-full;
}

.select-input {
    @apply text-sm font-medium;
}
.select-input > select {
    @apply select select-bordered w-full shadow-lg;
}

.phone-input {
    @apply flex gap-2 items-center;
}

.phone-input > input {
    @apply input text-center shadow-lg font-bold input-bordered;
}

.phone-input > label {
    @apply font-bold text-3xl;
}
</style>

<template>
    <div>
        <div class="-mt-28 mx-24">
            <div class="flex justify-end mb-3">
                <Link href="" class="btn btn-primary shadow-lg">Create Theme</Link>
            </div>

            <div class="glass shadow-lg rounded-lg mb-5 p-4">

                <form @submit.prevent="submitForm">
                    <!-- Personal Information Section -->
                    <div class="flex gap-4">
                        <!-- Avatar Upload Field -->
                        <div id="avatar-upload">
                            <p>Upload Avatar</p>
                            <p v-if="formData.errors && formData.errors.avatar" class="text-error">
                                {{ formData.errors.avatar }}
                            </p>
                            <label for="avatar"
                                   :class="formData.errors && formData.errors.avatar ? '!border-error !shadow-lg !shadow-error-content' : ''">
                                <img
                                    v-if="formData.avatar !== ''"
                                    :src="avatar_preview"
                                    alt="Avatar Preview"
                                />
                                <svg
                                    v-else xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    width="40" height="40">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 4v16m8-8H4"
                                    />
                                </svg>

                                <input
                                    type="file"
                                    id="avatar"
                                    @change="handleAvatarUpload"
                                    class="hidden"
                                    accept="image/*"
                                />
                            </label>
                        </div>

                        <div class="w-full">
                            <!-- Name Field -->
                            <div class="mb-4 plain-text-input">
                                <label for="name">
                                    Name
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    v-model="formData.name"
                                    :class="formData.errors && formData.errors.name ? '!input-error !shadow-lg !shadow-error-content' : ''"
                                    required
                                />
                            </div>

                            <!-- Gender Select Field -->
                            <div
                                class="select-input"
                                :class="formData.errors && formData.errors.gender ? '!input-error !shadow-lg !shadow-error-content' : ''"
                            >
                                <label for="gender">Gender</label>
                                <select id="gender" v-model="formData.gender" required>
                                    <option value="" disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Date of Birth Select Field -->
                    <div class="mb-4 plain-text-input">
                        <label for="dob">
                            Date of Birth
                            <span v-if="formData.errors && formData.errors.dob" class="text-error">
                        {{ formData.errors.dob }}
                    </span>
                        </label>
                        <input
                            type="date"
                            id="dob"
                            v-model="formData.dob"
                            required
                            :class="formData.errors && formData.errors.dob ? '!input-error !shadow-lg !shadow-error-content' : ''"
                        />
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-full my-4"
                            :class="formData.processing ? 'btn-loading' : ''">
                        Register
                    </button>
                </form>

            </div>

        </div>
    </div>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

defineOptions({
    layout: Admin
});

let avatar_preview = ref(null);

const formData = useForm({
    name: '',
    password: '',
    gender: '',
    country: '',
    phone: '',
    dob: '',
    avatar: ''
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
