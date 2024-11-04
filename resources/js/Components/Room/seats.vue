<template>
    <div class="grid grid-cols-5 gap-y-1 p-2">

        <div v-for="n in user.room.allowed_seats" class="flex-col-middle">
            <Avatar
                :frameSrc="user.room.theme.frame.src"
                :profileSrc="user.room.theme.profile_picture"
                :frameBorder="20"
                :frameSize="75"
                url="/profile/view"
                class="relative h-16"
            />

            <p v-show="true" class="text-center font-bold text-sm theme-text">Name</p>

            <button v-show="true" class="btn btn-xs gap-0 text-xs mx-auto btn-ghost theme-text">
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
</template>


<script setup>
import Avatar from "@/Components/Avatar.vue";

defineProps(['user']);
</script>
