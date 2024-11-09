<template>
    <div class="room_head_container">

        <div class="room_head_block">

            <div>
                <Avatar
                    :frameSrc="user.frame.src"
                    :profileSrc="$page.props.auth.user.avatar"
                    :frameBorder="12"
                    :frameSize="50"
                    url="/profile/view"
                    class="mx-auto"
                />
                <p class="text-xs font-bold w-16 px-1 -mt-2 truncate">{{ user.name }}</p>
            </div>

            <div class="flex-col-middle text-sm">
                <h1>{{ user.room.name }}</h1>

                <p>ID: {{ user.room.id }}</p>
            </div>

            <div class="flex-col-middle book-mark-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="2.4em" height="2.4em" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M923 283.6a260 260 0 0 0-56.9-82.8a264.4 264.4 0 0 0-84-55.5A265.3 265.3 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39q-15 9.15-28.5 20.1q-13.5-10.95-28.5-20.1c-41.8-25.5-89.9-39-139.2-39c-35.5 0-69.9 6.8-102.4 20.3c-31.4 13-59.7 31.7-84 55.5a258.4 258.4 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9c0 33.3 6.8 68 20.3 103.3c11.3 29.5 27.5 60.1 48.2 91c32.8 48.9 77.9 99.9 133.9 151.6c92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3c56-51.7 101.1-102.7 133.9-151.6c20.7-30.9 37-61.5 48.2-91c13.5-35.3 20.3-70 20.3-103.3c.1-35.3-7-69.6-20.9-101.9M512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5c0 201.2-356 429.3-356 429.3" />
                    <path fill="currentColor" fill-opacity="0.15" d="M679.7 201c-73.1 0-136.5 40.8-167.7 100.4C480.8 241.8 417.4 201 344.3 201c-104 0-188.3 82.6-188.3 184.5c0 201.2 356 429.3 356 429.3s356-228.1 356-429.3C868 283.6 783.7 201 679.7 201" />
                </svg>
            </div>

        </div>

        <div class="flex-col-middle ml-auto">

            <button class="btn-nav share-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 20 20">
                    <path fill="currentColor" d="M15 8a3 3 0 1 0-2.977-2.63l-4.94 2.47a3 3 0 1 0 0 4.319l4.94 2.47a3 3 0 1 0 .895-1.789l-4.94-2.47a3 3 0 0 0 0-.74l4.94-2.47C13.456 7.68 14.19 8 15 8" />
                </svg>
            </button>

        </div>

        <div class="flex-col-middle">

            <Link href="/" class="btn-nav close-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496" />
                </svg>
            </Link>

        </div>

    </div>
</template>
<script setup>
import Avatar from "@/Components/Avatar.vue";

defineProps(['user']);
</script>

<style scoped>
.room_head_container {
    @apply flex gap-2 px-2;
}

.room_head_block {
    @apply flex rounded-box font-bold
    bg-gradient-to-tl overflow-hidden
    from-[--theme-color] shadow-xl
    shadow-[--theme-shadow-color] text-[--theme-text-color];
}

.btn-nav {
    @apply btn btn-circle border-4 btn-outline shadow-lg;
}

.share-button {
    @apply border-green-500 shadow-green-500 text-green-500;
}

.close-button {
    @apply border-red-500 shadow-red-500 text-red-500;
}

.book-mark-button {
    @apply border-rose-500 text-rose-500 drop-shadow-lg;
}
</style>
