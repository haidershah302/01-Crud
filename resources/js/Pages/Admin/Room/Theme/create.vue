<style scoped>

.file-upload
{
    @apply text-sm;
}

.file-upload > label{
    @apply mt-2 p-0 cursor-pointer border-dashed border-4 border-base-content/30
    shadow-lg flex justify-center items-center h-64 w-40 rounded-lg;
}

.file-upload > svg {
    @apply text-primary-content drop-shadow;
}

.file-upload > img {
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
</style>

<template>
    <div class="flex -mt-28 mx-24 gap-8 pb-64">
        <form class="glass shadow-lg rounded-lg mb-5 p-4 flex-grow" @submit.prevent="submitForm">
            <!-- Personal Information Section -->
            <div class="flex gap-4">
                <!-- Avatar Upload Field -->
                <div class="file-upload">
                    <p>Background Image</p>
                    <p v-if="formData.errors && formData.errors.background" class="text-error">
                        {{ formData.errors.background }}
                    </p>
                    <label for="background"
                           :class="formData.errors && formData.errors.background ? '!border-error !shadow-lg !shadow-error-content' : ''">
                        <img
                            v-if="formData.background !== ''"
                            :src="background_preview"
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
                            id="background"
                            @change="handleBackgroundUpload"
                            class="hidden"
                            accept="image/*"
                        />
                    </label>
                </div>
                <!-- Avatar Upload Field -->
                <div class="file-upload">
                    <p>Thumbnail Image</p>
                    <p v-if="formData.errors && formData.errors.thumbnail" class="text-error">
                        {{ formData.errors.thumbnail }}
                    </p>
                    <label for="thumbnail"
                           :class="formData.errors && formData.errors.thumbnail ? '!border-error !shadow-lg !shadow-error-content' : ''">
                        <img
                            v-if="formData.thumbnail !== ''"
                            :src="thumbnail_preview"
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
                            id="thumbnail"
                            @change="handleThumbnailUpload"
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
                    <div class="mb-4 plain-text-input">
                        <label for="name">
                            Price
                        </label>
                        <input
                            type="number"
                            id="price"
                            v-model="formData.price"
                            :class="formData.errors && formData.errors.price ? '!input-error !shadow-lg !shadow-error-content' : ''"
                            required
                        />
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-full my-4"
                    :class="formData.processing ? 'btn-loading' : ''">
                Register
            </button>
        </form>

        <div class="mockup-phone">
            <div class="camera"></div>
            <div class="display">
                <div class="artboard phone-2">
                    <Room />
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";
import Room from "@/Pages/Room/myRoom.vue";
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

defineOptions({
    layout: Admin
});

let background_preview = ref(null);
let thumbnail_preview = ref(null);

const formData = useForm({
    name: '',
    price: '',
    background: '',
    thumbnail: ''
});
const handleBackgroundUpload = (event) => {
    console.log('background')
    if (event.target.files[0])
    {
        background_preview = URL.createObjectURL(event.target.files[0]);
        formData.background = event.target.files[0];
    }
};
const handleThumbnailUpload = (event) => {
    console.log('here')
    if (event.target.files[0])
    {
        thumbnail_preview = URL.createObjectURL(event.target.files[0]);
        formData.thumbnail = event.target.files[0];
    }
};

const submitForm = () => {
    formData.post(route('register.post'));
};
</script>
