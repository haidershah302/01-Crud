<template>
    <div class="-mt-36 mx-24">
        <h1 class="text-2xl font-mono">Update New Theme</h1>
        <div class="flex gap-12">
            <form class="glass shadow-lg rounded-lg mb-5 p-4" @submit.prevent="submitForm">
                <!-- Personal Information Section -->
                <div class="flex flex-wrap gap-2">

                    <!-- Background Image Field -->
                    <div class="file-upload">
                        <p>Background Image</p>
                        <p v-if="formData.errors && formData.errors.background" class="text-error">
                            {{ formData.errors.background }}
                        </p>
                        <label for="background" :class="formData.errors && formData.errors.background ? '!border-error !shadow-lg !shadow-error-content' : ''">
                            <img
                                v-if="formData.background !== ''"
                                :src="background_preview"
                                alt="Room Background Image Preview"
                            />
                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" width="40" height="40">
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

                    <!-- Thumbnail Image Field -->
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

                    <!-- Seat Ring Image Field -->
                    <div class="file-upload">
                        <p>Seat Ring Image</p>
                        <p v-if="formData.errors && formData.errors.seat_ring" class="text-error">
                            {{ formData.errors.seat_ring }}
                        </p>
                        <label for="seat_ring"
                               :class="formData.errors && formData.errors.seat_ring ? '!border-error !shadow-lg !shadow-error-content' : ''">
                            <img
                                v-if="formData.seat_ring !== ''"
                                :src="seat_ring_preview"
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
                                id="seat_ring"
                                @change="handleSeatRingUpload"
                                class="hidden"
                                accept="image/*"
                            />
                        </label>
                    </div>

                    <!-- Seat Ring Image Field -->
                    <div class="file-upload">
                        <p>Seat Image</p>
                        <p v-if="formData.errors && formData.errors.seat" class="text-error">
                            {{ formData.errors.seat }}
                        </p>
                        <label for="seat"
                               :class="formData.errors && formData.errors.seat ? '!border-error !shadow-lg !shadow-error-content' : ''">
                            <img
                                v-if="formData.seat !== ''"
                                :src="seat_preview"
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
                                id="seat"
                                @change="handleSeatUpload"
                                class="hidden"
                                accept="image/*"
                            />
                        </label>
                    </div>

                    <!-- meta data -->
                    <div>
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
                        <!-- Seat Border Field -->
                        <div class="mb-4 plain-text-input">
                            <label for="bdr_box">
                                Border Box
                            </label>
                            <input
                                type="number"
                                id="bdr_box"
                                v-model="formData.bdr_box"
                                :class="formData.errors && formData.errors.bdr_box ? '!input-error !shadow-lg !shadow-error-content' : ''"
                                required
                            />
                        </div>
                    </div>


                    <!-- Color Pickers -->
                    <div class="flex gap-8">
                        <!-- Color Field -->
                        <div class="">
                            <label for="theme-color-picker">
                                Theme Color
                            </label>
                            <input
                                type="color"
                                id="theme-color-picker"
                                class="glass rounded shadow-lg block"
                                v-model="formData.color"
                                :class="formData.errors && formData.errors.color ? '!input-error !shadow-lg !shadow-error-content' : ''"
                                required
                            />
                        </div>
                        <!-- Text Color Field -->
                        <div>
                            <label for="text-color-picker">
                                Text Color
                            </label>
                            <input
                                type="color"
                                id="text-color-picker"
                                class="glass rounded shadow-lg block"
                                v-model="formData.text_color"
                                :class="formData.errors && formData.errors.text_color ? '!input-error !shadow-lg !shadow-error-content' : ''"
                                required
                            />
                        </div>
                        <!-- Icons Color Field -->
                        <div>
                            <label for="icon-color-picker">
                                Icons Color
                            </label>
                            <input
                                type="color"
                                id="icon-color-picker"
                                class="glass rounded shadow-lg block"
                                v-model="formData.icons_color"
                                :class="formData.errors && formData.errors.icons_color ? '!input-error !shadow-lg !shadow-error-content' : ''"
                                required
                            />
                        </div>
                    </div>

                </div>
                <!-- Submit Button -->
                <button type="submit"
                        class="btn btn-primary w-full my-4"
                        :disabled="!disableForm"
                        :class="formData.processing ? 'btn-loading' : ''">
                    Update Theme
                </button>
            </form>

            <div style="min-width: 320px">
                <div class="mockup-phone">
                    <div class="camera"></div>
                    <div class="display">
                        <div class="artboard phone-1 relative">
                            <div class="room" :style="
                                `background-image: url('${background_preview}');
                                --theme-color: ${formData.color};
                                --theme-text-color: ${formData.text_color};
                                --theme-icon-color: ${formData.icons_color};
                                --theme-shadow-color: rgb(from ${formData.color} r g b / 0.3);
                                --avatar-border: ${formData.bdr_box};`">
                                <div>
                                    <div class="flex gap-2 px-2 mt-6">

                                        <div class="room_head_block">

                                            <Avatar :frameBorder="formData.bdr_box !== null ? formData.bdr_box : 9" :frameSize="50"/>

                                            <div>
                                                <h1>{{ user.room.name }}</h1>

                                                <p>ID: {{ user.room.id }}</p>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                                                <path fill="currentColor" d="M923 283.6a260 260 0 0 0-56.9-82.8a264.4 264.4 0 0 0-84-55.5A265.3 265.3 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39q-15 9.15-28.5 20.1q-13.5-10.95-28.5-20.1c-41.8-25.5-89.9-39-139.2-39c-35.5 0-69.9 6.8-102.4 20.3c-31.4 13-59.7 31.7-84 55.5a258.4 258.4 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9c0 33.3 6.8 68 20.3 103.3c11.3 29.5 27.5 60.1 48.2 91c32.8 48.9 77.9 99.9 133.9 151.6c92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3c56-51.7 101.1-102.7 133.9-151.6c20.7-30.9 37-61.5 48.2-91c13.5-35.3 20.3-70 20.3-103.3c.1-35.3-7-69.6-20.9-101.9M512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5c0 201.2-356 429.3-356 429.3" />
                                                <path fill="currentColor" fill-opacity="0.15" d="M679.7 201c-73.1 0-136.5 40.8-167.7 100.4C480.8 241.8 417.4 201 344.3 201c-104 0-188.3 82.6-188.3 184.5c0 201.2 356 429.3 356 429.3s356-228.1 356-429.3C868 283.6 783.7 201 679.7 201" />
                                            </svg>

                                        </div>

                                        <button class="btn-nav share-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill="currentColor" d="M15 8a3 3 0 1 0-2.977-2.63l-4.94 2.47a3 3 0 1 0 0 4.319l4.94 2.47a3 3 0 1 0 .895-1.789l-4.94-2.47a3 3 0 0 0 0-.74l4.94-2.47C13.456 7.68 14.19 8 15 8" />
                                            </svg>
                                        </button>

                                        <Link href="/" class="btn-nav close-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                                                <path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496" />
                                            </svg>
                                        </Link>

                                    </div>

                                    <div class="flex justify-between px-4">
                                        <button class="btn-stats">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1024 1024">
                                                <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372m47.7-395.2l-25.4-5.9V348.6c38 5.2 61.5 29 65.5 58.2c.5 4 3.9 6.9 7.9 6.9h44.9c4.7 0 8.4-4.1 8-8.8c-6.1-62.3-57.4-102.3-125.9-109.2V263c0-4.4-3.6-8-8-8h-28.1c-4.4 0-8 3.6-8 8v33c-70.8 6.9-126.2 46-126.2 119c0 67.6 49.8 100.2 102.1 112.7l24.7 6.3v142.7c-44.2-5.9-69-29.5-74.1-61.3c-.6-3.8-4-6.6-7.9-6.6H363c-4.7 0-8.4 4-8 8.7c4.5 55 46.2 105.6 135.2 112.1V761c0 4.4 3.6 8 8 8h28.4c4.4 0 8-3.6 8-8.1l-.2-31.7c78.3-6.9 134.3-48.8 134.3-124c-.1-69.4-44.2-100.4-109-116.4m-68.6-16.2c-5.6-1.6-10.3-3.1-15-5c-33.8-12.2-49.5-31.9-49.5-57.3c0-36.3 27.5-57 64.5-61.7zM534.3 677V543.3c3.1.9 5.9 1.6 8.8 2.2c47.3 14.4 63.2 34.4 63.2 65.1c0 39.1-29.4 62.6-72 66.4" />
                                            </svg>
                                            <span>11.3 M</span>
                                        </button>

                                        <button class="btn-stats">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48">
                                                <path fill="currentColor" d="M16 24a8 8 0 1 0 0-16a8 8 0 0 0 0 16m18 0a6 6 0 1 0 0-12a6 6 0 0 0 0 12M6.75 27A3.75 3.75 0 0 0 3 30.75V32s0 9 13 9s13-9 13-9v-1.25A3.75 3.75 0 0 0 25.25 27zm21.924 11.089c1.376.558 3.119.911 5.325.911c10.5 0 10.5-8 10.5-8v-.25A3.75 3.75 0 0 0 40.75 27H29.607a5.73 5.73 0 0 1 1.391 3.75v1.295l-.001.057l-.006.15q-.008.173-.035.43a10 10 0 0 1-.24 1.325a10.7 10.7 0 0 1-2.042 4.082" />
                                            </svg>
                                            <span>321</span>
                                        </button>
                                    </div>

                                    <div class="grid grid-cols-5 text-center text-xs">

                                        <div v-for="n in user.room.allowed_seats" class="flex-col-middle text-[--theme-text-color]" style="height: 82px;">
                                            <Avatar
                                                :frameSrc="seat_ring_preview !== '' ? seat_ring_preview : '/storage/site_assets/frames/0.png'"
                                                :profileSrc="seat_preview !== '' ? seat_preview : '/storage/site_assets/Room/seat.png'"
                                                :frameBorder="formData.bdr_box !== null ? formData.bdr_box : 20"
                                                :frameSize="50"
                                                url="/profile/view"
                                                class="mx-auto"
                                            />

                                            <p v-show="true" class="font-bold -mt-1">Name</p>

                                            <button v-show="true" class="btn btn-xs btn-ghost gap-0">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="size-4"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                                321
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <div class="actions-box">

                                    <div class="action-chat">
                                        <ChatBox class="mb-2" />
                                        <div class="action-icons">

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path fill="currentColor" d="M12.28 19.23q1.056-.075 2.084-.337a5.8 5.8 0 0 0 2.602.168a1 1 0 0 1 .104-.008c.31 0 .717.178 1.31.553v-.616a.6.6 0 0 1 .311-.525c.258-.143.498-.31.717-.492c.864-.723 1.352-1.686 1.352-2.706a3.2 3.2 0 0 0-.159-.993c.26-.48.472-.986.627-1.51c.5.74.77 1.61.772 2.503c0 1.386-.654 2.68-1.785 3.625a6 6 0 0 1-.595.436v1.442c0 .496-.58.78-.989.486a15 15 0 0 0-1.2-.8a3 3 0 0 0-.369-.184q-.51.076-1.038.077c-1.412 0-2.717-.419-3.744-1.12m-7.466-2.885C3.03 14.854 2 12.818 2 10.64c0-4.454 4.258-8.014 9.457-8.014s9.458 3.56 9.458 8.014s-4.259 8.013-9.458 8.013q-.877 0-1.728-.133c-.245.057-1.224.631-2.635 1.648c-.51.369-1.236.013-1.236-.608V17.1a9 9 0 0 1-1.044-.754m4.95.658q.063 0 .13.01a9.5 9.5 0 0 0 1.563.128c4.392 0 7.907-2.939 7.907-6.502s-3.515-6.501-7.907-6.501c-4.39 0-7.907 2.939-7.907 6.501c0 1.723.821 3.345 2.273 4.559q.55.458 1.196.821c.241.135.39.385.39.655v1.419c1.116-.74 1.85-1.09 2.354-1.09" />
                                                    <path fill="currentColor" d="M7.625 12a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5m4.062 0a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5m4.063.001a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5" />
                                                </svg>
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2176 1792">
                                                    <path fill="currentColor" d="m640 1632l384-192v-314l-384 164zm-64-454l404-173l-404-173l-404 173zm1088 454l384-192v-314l-384 164zm-64-454l404-173l-404-173l-404 173zm-448-293l384-165V454l-384 164zm-64-379l441-189l-441-189l-441 189zm1088 518v416q0 36-19 67t-52 47l-448 224q-25 14-57 14t-57-14l-448-224q-4-2-7-4q-2 2-7 4l-448 224q-25 14-57 14t-57-14L71 1554q-33-16-52-47t-19-67v-416q0-38 21.5-70T78 906l434-186V320q0-38 21.5-70t56.5-48l448-192q23-10 50-10t50 10l448 192q35 16 56.5 48t21.5 70v400l434 186q36 16 57 48t21 70" />
                                                </svg>
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill="currentColor" d="M17 9a8 8 0 1 0-7.411 7.979A5.5 5.5 0 0 1 9.022 14H9a5 5 0 0 1-3.889-1.856a.5.5 0 1 1 .778-.63a3.99 3.99 0 0 0 3.32 1.481a5.502 5.502 0 0 1 7.77-3.406A8 8 0 0 0 17 9m-6.5-1.5a1 1 0 1 1 2 0a1 1 0 0 1-2 0m-5 0a1 1 0 1 1 2 0a1 1 0 0 1-2 0m13.5 7a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4-2a.5.5 0 0 0-1 0V14h-1.5a.5.5 0 0 0 0 1H14v1.5a.5.5 0 0 0 1 0V15h1.5a.5.5 0 0 0 0-1H15z" />
                                                </svg>
                                            </button>

                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                    <g fill="currentColor">
                                                        <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z" />
                                                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                                    </g>
                                                </svg>
                                            </button>

                                            <button>
                                                <img :src="$page.props.assets + '/site_assets/Room/games.png'" alt="">
                                            </button>

                                        </div>
                                    </div>

                                    <div class="side-actions">
                                        <img :src="$page.props.assets + '/site_assets/Room/rings.png'" alt="">
                                        <div>
                                            <img :src="$page.props.assets + '/site_assets/Room/crystal.png'" alt="">
                                            <div class="px-2">
                                                <progress class="progress shadow-md theme-shadow" value="60" max="100"></progress>
                                            </div>
                                        </div>
                                        <button class="btn p-0 btn-ghost shadow-icons">
                                            <img :src="$page.props.assets + '/site_assets/Room/gifts.png'" alt="">
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import Admin from "@/Layouts/Admin.vue";
import Avatar from "@/Components/Avatar.vue";
import ChatBox from "@/Components/Room/chatBox.vue";
import {useForm, usePage} from "@inertiajs/vue3";
import {ref, watch} from "vue";

const props = defineProps({
    theme : Object
});

defineOptions({layout: Admin});

let background_preview = ref(props.theme.background);
let thumbnail_preview = ref(props.theme.thumbnail);
let seat_ring_preview = ref(props.theme.seat_ring);
let seat_preview = ref(props.theme.seat);
let disableForm = true;


const formData = useForm({
    name: props.theme.name,
    price: props.theme.price,
    color: props.theme.color,
    text_color: props.theme.text_color,
    icons_color: props.theme.icons_color,
    background: '',
    thumbnail: '',
    seat_ring: '',
    seat: '',
    bdr_box: props.theme.bdr_box,
});
const handleBackgroundUpload = (event) => {
    if (event.target.files[0])
    {
        formData.background = event.target.files[0];
        background_preview = URL.createObjectURL(formData.background);
    }
};
const handleThumbnailUpload = (event) => {
    if (event.target.files[0])
    {
        formData.thumbnail = event.target.files[0];
        thumbnail_preview = URL.createObjectURL(formData.thumbnail);
    }
};
const handleSeatRingUpload = (event) => {
    if (event.target.files[0])
    {
        formData.seat_ring = event.target.files[0];
        seat_ring_preview = URL.createObjectURL(formData.seat_ring);
    }
};
const handleSeatUpload = (event) => {
    if (event.target.files[0])
    {
        formData.seat = event.target.files[0];
        seat_preview = URL.createObjectURL(formData.seat);
    }
};

const submitForm = () => {
    formData.post(route('admin.room.theme.update', props.theme.id));
};
// Room Area

const pageProps = usePage().props;

const user = ref({
    id: 1,
    room: {
        id: '100100' + pageProps.auth.user.id,
        name: pageProps.auth.user.name,
        total_gift_interactions: 1123,
        active_users: 3211,
        allowed_seats: 15,
    },
});

</script>
<style scoped>

.file-upload
{
    @apply text-sm;
}

.file-upload > label
{
    @apply mt-2 p-0 cursor-pointer border-dashed border-4
    border-base-content/30 relative
    shadow-lg flex justify-center items-center h-44 w-40 rounded-lg;
}

.file-upload > svg {
    @apply text-primary-content drop-shadow;
}

.file-upload > label > img {
    height: 100%;
}

.plain-text-input > label {
    @apply text-sm font-medium;
}

.plain-text-input > input {
    @apply input input-bordered shadow-lg w-full;
}



/* Room styles */
.room {
    background-size: cover;
    background-position: top;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    bottom: 0;top: 0;right: 0;left: 0;
}

.room_head_block {
    border-radius: var(--rounded-box, 1rem /* 16px */);
    font-weight: bold;
    background-image: linear-gradient(to top left, rgb(from var(--theme-color) r g b / 0.5), rgb(from var(--theme-color) r g b / 0.1));
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3), rgb(from var(--theme-color) r g b / 0.5) 0 15px 30px -10px;
    margin-right: auto;
    display: flex;
    align-items: center;
    padding: 0 .2rem 0 .2rem;
    svg {
        height: 100%;
        width: 2rem;
        color: red;
        filter: drop-shadow(0 0 6px rgb(from #ff0000 r g b / 0.5));
    }
}

.btn-nav {
    display: inline-flex;
    justify-content: center;
    border-radius: 100%;
    border-width: 3px;
    border-style: solid;
    padding: 0.3rem;
    align-self: center;
    & {
        width: 2rem;
        height: 2rem;
    }
}

.share-button {
    @apply border-green-500 shadow-lg shadow-green-500/40 text-green-500;
}

.close-button {
    @apply border-red-500 shadow-lg shadow-red-500/50 text-red-500;
}

.actions-box {
    display: flex;
    z-index: 10;
    height: 100%;
    width: 100%;
    min-height: 10%;
    margin-bottom: .5rem;
}

.action-chat {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: end;
}

.action-icons {
    @apply text-[--theme-icon-color] grid grid-cols-5;
    button {
        @apply btn btn-sm btn-ghost;
        * {
            height: 2rem;
        }
    }
}

.side-actions {
    width: 2rem;
    align-content: end;
}

.theme-shadow {
    @apply shadow-[--theme-shadow-color];
}

.progress::-webkit-progress-value{
    background-color: rgb(from var(--theme-color) r g b / 1);
}

.progress::-webkit-progress-bar {
    background-color: rgb(from var(--theme-color) r g b / 0.2);
}

.shadow-icons {
    filter: drop-shadow(0 5px 5px rgb(from var(--theme-color) r g b / 0.4));
}

.btn-stats {
    @apply btn btn-sm p-0 gap-1 btn-ghost text-accent;
}

.btn-stats > span {
    @apply text-[--theme-text-color] font-bold;
}
</style>
