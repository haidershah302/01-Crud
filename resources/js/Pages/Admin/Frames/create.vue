<style scoped>

.file-upload
{
    @apply text-sm;
}

.file-upload > label
{
    @apply mt-2 p-0 cursor-pointer border-dashed border-4
    border-base-content/30
    shadow-lg flex justify-center items-center h-44 w-40 rounded-lg;
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
            <!-- Frame Static Upload Field -->
            <div class="file-upload">
                <p>Frame Static Image</p>
                <p v-if="formData.errors && formData.errors.src_static" class="text-error">
                    {{ formData.errors.src_static }}
                </p>
                <label for="src_static_upload"
                       :class="formData.errors && formData.errors.src_static ? '!border-error !shadow-lg !shadow-error-content' : ''">
                    <img
                        v-if="formData.src_static !== ''"
                        :src="src_static_preview"
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
                        id="src_static_upload"
                        @change="handleSrcStaticUpload"
                        class="hidden"
                        accept="image/*"
                    />
                </label>
            </div>
            <!-- Frame Animated Upload Field -->
            <div class="file-upload">
                <p>Frame Animated Image</p>
                <p v-if="formData.errors && formData.errors.src_animated" class="text-error">
                    {{ formData.errors.src_animated }}
                </p>
                <label for="src_animated_upload"
                       :class="formData.errors && formData.errors.src_animated ? '!border-error !shadow-lg !shadow-error-content' : ''">
                    <img
                        v-if="formData.src_animated !== ''"
                        :src="src_animated_preview"
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
                        id="src_animated_upload"
                        @change="handleSrcAnimatedUpload"
                        class="hidden"
                        accept="image/*"
                    />
                </label>
            </div>
        </div>

        <!-- Category Field -->
        <div class="mb-4 select-input" :class="formData.errors && formData.errors.category ? '!input-error !shadow-lg !shadow-error-content' : ''">
            <label for="category">Category</label>
            <select id="category" v-model="formData.category" required>
                <option value="" disabled>Select Category</option>
                <option value="Normal">Normal</option>
                <option value="Lucky">Lucky</option>
                <option value="Cp Gift">Cp Gift</option>
                <option value="Vip Gift">Vip Gift</option>
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
        <!-- Border Field -->
        <div class="mb-4 plain-text-input">
            <label for="bdr_box">
                Bounding Box
            </label>
            <input
                type="number"
                id="bdr_box"
                v-model="formData.bdr_box"
                :class="formData.errors && formData.errors.bdr_box ? '!input-error !shadow-lg !shadow-error-content' : ''"
                required
            />
        </div>
        <!-- Size Field -->
        <div class="mb-4 plain-text-input">
            <label for="size">
                Size Box
            </label>
            <input
                type="number"
                id="size"
                v-model="formData.size"
                :class="formData.errors && formData.errors.size ? '!input-error !shadow-lg !shadow-error-content' : ''"
                required
            />
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-full my-4" :class="formData.processing ? 'btn-loading' : ''">
            Create Frame
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
    price: '',
    src_static: '',
    src_animated: '',
    category: '',
    bdr_box: '',
    size: ''
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
const submitForm = () => {
    formData.post(route('admin.frame.store'));
};
</script>
