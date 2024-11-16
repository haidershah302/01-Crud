<style scoped>
#avatar-upload {
    @apply text-sm font-bold;
}

#avatar-upload > label{
    @apply mt-2 p-0 cursor-pointer border-dashed border-4 border-base-content/30 mx-auto
    shadow-lg flex justify-center items-center h-32 w-32 rounded-lg overflow-hidden;
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
                <h1 class="text-center">Create Your Room</h1>
            </div>
        </Subheader>

        <div class="h-16"></div>

        <form @submit.prevent="submitForm" class="p-6 pb-4 relative">
            <!-- Room Profile Upload Field -->
            <div id="avatar-upload" class="text-center">
                <p>Upload Room Profile</p>
                <p v-if="formData.errors && formData.errors.image" class="text-error">
                    {{ formData.errors.image }}
                </p>
                <label for="image" :class="formData.errors && formData.errors.image ? '!border-error !shadow-lg !shadow-error-content' : ''">
                    <img v-if="formData.image !== null" :src="image_preview" alt="Avatar Preview"/>
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
                        id="image"
                        @change="handleAvatarUpload"
                        class="hidden"
                        accept="image/*"
                    />
                </label>
            </div>
            <!-- Name Field -->
            <div class="mb-4 mt-4 plain-text-input">
                <label for="name">
                    Room Name
                </label>
                <input
                    type="text"
                    id="name"
                    v-model="formData.name"
                    :class="formData.errors && formData.errors.name ? '!input-error !shadow-lg !shadow-error-content' : ''"
                />
            </div>
            <!-- Greetings Field -->
            <div class="mb-4 mt-4 plain-text-input">
                <label for="greetings">
                    Greetings Name
                </label>
                <input
                    type="text"
                    id="greetings"
                    v-model="formData.greetings"
                    :class="formData.errors && formData.errors.greetings ? '!input-error !shadow-lg !shadow-error-content' : ''"
                />
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-full my-4"
                    :class="formData.processing ? 'btn-loading' : ''">
                Create Room
            </button>

        </form>
    </div>
</template>
<script setup>
import Subheader from "@/Components/subheader.vue";
import Sub from "@/Layouts/Sub.vue";
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

defineOptions({layout: Sub});

let image_preview = ref(null);
// Variables End
const formData = useForm({
    name: null,
    image: null,
    greetings: '',
});
const handleAvatarUpload = (event) => {
    if (event.target.files[0]) {
        image_preview = URL.createObjectURL(event.target.files[0]);
        formData.image = event.target.files[0];
    }
};
const submitForm = () => {
    formData.post(route('myRoom.create'));
};
</script>
