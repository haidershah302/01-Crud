<style scoped>
#avatar-upload {
    @apply text-sm font-bold;
}

#avatar-upload > label{
    @apply mt-2 p-0 cursor-pointer border-dashed border-4 border-base-content/30
    shadow-lg flex justify-center items-center h-24 w-24 rounded-lg overflow-hidden;
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
        <Subheader :from="route('profile.user')">
            <div class="h-full w-ful flex flex-col justify-center">
                <h1 class="text-center">Modify Profile</h1>
            </div>
        </Subheader>

        <div class="h-16"></div>

        <form @submit.prevent="submitForm" class="p-6 pb-4 relative">
            <!-- Avatar Upload Field -->
            <div class="flex w-full justify-center">
                <div id="avatar-upload">
                    <p>Upload Avatar</p>
                    <p v-if="formData.errors && formData.errors.avatar" class="text-error">
                        {{ formData.errors.avatar }}
                    </p>
                    <label for="avatar" :class="formData.errors && formData.errors.avatar ? '!border-error !shadow-lg !shadow-error-content' : ''">
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
            </div>

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
                />
            </div>

            <!-- Gender Select Field -->
            <div class="flex justify-between">
                <h2 class="text-xl">Gender:</h2>
                <p class="mb-4 text-lg">{{user.gender.toUpperCase()}}</p>
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
                    :class="formData.errors && formData.errors.dob ? '!input-error !shadow-lg !shadow-error-content' : ''"
                />
            </div>

            <!-- Signature Field -->
            <div class="mb-4 plain-text-input">
                <label for="name">
                    Signature
                </label>
                <input
                    type="text"
                    id="signature"
                    :placeholder="formData.signature"
                    v-model="formData.signature"
                    :class="formData.errors && formData.errors.signature ? '!input-error !shadow-lg !shadow-error-content' : ''"
                />
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-full my-4"
                    :class="formData.processing ? 'btn-loading' : ''">
                Update
            </button>

        </form>
    </div>
</template>
<script setup>
import Subheader from "@/Components/subheader.vue";
import Sub from "@/Layouts/Sub.vue";
import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";

defineOptions({layout: Sub});

const props = defineProps({
    user: Object
})


const selectedCountry = ref({});
let avatar_preview = ref(props.user.avatar);

// Variables End
const formData = useForm({
    avatar: null,
    name: props.user.name,
    dob: props.user.dob,
    signature: props.user.signature
});

const handleAvatarUpload = (event) => {
    if (event.target.files[0]) {
        avatar_preview = URL.createObjectURL(event.target.files[0]);
        formData.avatar = event.target.files[0];
    }
};

const submitForm = () => {
    formData.post(route('profile.edit'));
};
</script>
