<style scoped>

.file-upload
{
    @apply text-sm;
}

.file-upload > label
{
    @apply mt-2 p-2 cursor-pointer border-dashed border-4
    border-base-content/30
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
    <form class="glass shadow-lg rounded-lg mb-5 p-4 -mt-28 ml-24 pb-64 max-w-lg" @submit.prevent="submitForm">
        <div class="flex gap-4 mb-2">
            <!-- Gift Static Upload Field -->
            <div class="file-upload">
                <p>Gift Static Image</p>
                <p v-if="formData.errors && formData.errors.src_static" class="text-error">
                    {{ formData.errors.src_static }}
                </p>
                <label for="src_static_upload" :class="formData.errors && formData.errors.src_static ? '!border-error !shadow-lg !shadow-error-content' : ''">
                    <img v-if="formData.src_static !== ''" :src="src_static_preview" class="h-full rounded-lg" alt="Avatar Tailwind CSS Component" />
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
                        id="src_static_upload"
                        @change="handleSrcStaticUpload"
                        class="hidden"
                        accept="image/*"
                    />
                </label>
            </div>
            <!-- Gift Animated Upload Field -->
            <div class="file-upload">
                <p>Gift Animated Image</p>
                <p v-if="formData.errors && formData.errors.src_animated" class="text-error">
                    {{ formData.errors.src_animated }}
                </p>
                <label for="src_animated_upload"
                       :class="formData.errors && formData.errors.src_animated ? '!border-error !shadow-lg !shadow-error-content' : ''">
                    <video @loadedmetadata="loadDuration" v-if="formData.src_animated !== ''" class="h-full rounded-lg" autoplay loop controls>
                        <source :src="src_animated_preview" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
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
                        id="src_animated_upload"
                        @change="handleSrcAnimatedUpload"
                        class="hidden"
                    />
                </label>
            </div>
        </div>
        <!-- Gift Type Field -->
        <div class="select-input" :class="formData.errors && formData.errors.type ? '!input-error !shadow-lg !shadow-error-content' : ''">
            <label for="type">Type</label>
            <select id="type" v-model="formData.type" required>
                <option value="" disabled>Select Gift</option>
                <option value="Normal">Normal</option>
                <option value="Cp">CP</option>
                <option value="Vip">Vip</option>
                <option value="Country">Country</option>
                <option value="Celebrity">Celebrity</option>
                <option value="Bag">Bag</option>
            </select>
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
                required
            />
        </div>
        <!-- Price Field -->
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
        <!-- Duration Field -->
        <div class="mb-4 plain-text-input">
            <label for="duration">
                Duration Box
            </label>
            <input
                type="number"
                id="duration"
                step="any"
                v-model="formData.duration"
                :class="formData.errors && formData.errors.duration ? '!input-error !shadow-lg !shadow-error-content' : ''"
                required
            />
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-full my-4" :class="formData.processing ? 'btn-loading' : ''">
            Create Gift
        </button>
    </form>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

defineOptions({
    layout: Admin
});

let src_static_preview = ref(null);
let src_animated_preview = ref(null);

const formData = useForm({
    name: '',
    type: '',
    price: null,
    duration: null,
    src_static: '',
    src_animated: '',
});
const handleSrcStaticUpload = (event) => {
    if (event.target.files[0])
    {
        src_static_preview = URL.createObjectURL(event.target.files[0]);
        formData.src_static = event.target.files[0];
    }
};
const handleSrcAnimatedUpload = (event) => {
    if (event.target.files[0])
    {
        src_animated_preview = URL.createObjectURL(event.target.files[0]);
        formData.src_animated = event.target.files[0];
    }
};

const loadDuration = (event) => {
    formData.duration = event.target.duration;
};


const submitForm = () => {
    formData.post(route('admin.gift.store'));
};
</script>
