<style scoped>
.agency-block {
    @apply grid grid-cols-12 gap-2 rounded-box p-2 mb-64
    bg-primary shadow-lg shadow-primary/70 text-primary-content;
}

#footer {
    @apply z-20 pb-6 fixed bottom-0 w-full flex justify-center gap-2;
}

.button {
    @apply btn btn-sm gap-1 px-1;
}

.button-primary {
    @apply shadow-lg btn-primary shadow-primary/50;
}

.button-secondary {
    @apply shadow-lg btn-secondary shadow-secondary/50;
}

.button-success {
    @apply shadow-lg btn-success shadow-success/50;
}

.button-info {
    @apply shadow-lg btn-info shadow-info/50;
}
</style>

<template>
    <div>
        <SectionTitle class="mb-4">
            Agency
        </SectionTitle>

        <div class="px-4">
            <div class="agency-block">
                <Avatar
                    :frameSrc="$page.props.assets + '/site_assets/frames/3.png'"
                    :profileSrc="user.avatar"
                    :frameBorder="15"
                    :frameSize="70"
                    :url="route('profile.user')"
                    class="relative drop-shadow col-span-3"
                />

                <div class="font-semibold text-xs col-span-6">
                    <h2 class="mb-2">Agency User Name</h2>
                    <h2>More About your Agency</h2>
                </div>

                <button class="btn btn-sm btn-ghost text-xs h-full p-0 shadow-inner col-span-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 15H2c-.6 0-1 .4-1 1v6c0 .6.4 1 1 1h4c.6 0 1-.4 1-1v-6c0-.6-.4-1-1-1m8-6h-4c-.6 0-1 .4-1 1v12c0 .6.4 1 1 1h4c.6 0 1-.4 1-1V10c0-.6-.4-1-1-1m8-8h-4c-.6 0-1 .4-1 1v20c0 .6.4 1 1 1h4c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1" />
                    </svg>
                    <span>321</span>
                </button>
            </div>
        </div>

        <div id="footer">

            <Link href="/" class="button button-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M200.4 27.39L180.9 183h42.8l49.1-146.57zm91.7 8L242.7 183l149.7.1l34.3-102.61zM180 46.03l-71.9 7.84L122.2 183h40.7zM64 153c-11.5 0-19.18 8.8-21.27 17.2c-1.04 4.2-.45 7.6.73 9.5c1.17 1.8 2.79 3.3 8.54 3.3h52.1l-3.3-30zm357.4 0l-10 30h47.5c-2.6-5-3.7-10.3-3-15.6c.7-5.2 2.7-9.9 5.3-14.4zM41 201v246.9c0 5.1 2.79 11.1 7.37 15.7C52.96 468.2 59 471 64 471l384 .1c5 0 11-2.8 15.6-7.4s7.4-10.6 7.4-15.7v-71h-87c-44 0-44-82 0-82h87v-93.9zm343 112c-20 0-20 46 0 46h22.3c-9-3.8-15.3-12.7-15.3-23s6.3-19.2 15.3-23zm41.7 0c9 3.8 15.3 12.7 15.3 23s-6.3 19.2-15.3 23H487v-46zm-9.7 16c-4 0-7 3-7 7s3 7 7 7s7-3 7-7s-3-7-7-7" />
                </svg>
                <span>Track</span>
            </Link>

            <Link href="/" class="button button-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M200.4 27.39L180.9 183h42.8l49.1-146.57zm91.7 8L242.7 183l149.7.1l34.3-102.61zM180 46.03l-71.9 7.84L122.2 183h40.7zM64 153c-11.5 0-19.18 8.8-21.27 17.2c-1.04 4.2-.45 7.6.73 9.5c1.17 1.8 2.79 3.3 8.54 3.3h52.1l-3.3-30zm357.4 0l-10 30h47.5c-2.6-5-3.7-10.3-3-15.6c.7-5.2 2.7-9.9 5.3-14.4zM41 201v246.9c0 5.1 2.79 11.1 7.37 15.7C52.96 468.2 59 471 64 471l384 .1c5 0 11-2.8 15.6-7.4s7.4-10.6 7.4-15.7v-71h-87c-44 0-44-82 0-82h87v-93.9zm343 112c-20 0-20 46 0 46h22.3c-9-3.8-15.3-12.7-15.3-23s6.3-19.2 15.3-23zm41.7 0c9 3.8 15.3 12.7 15.3 23s-6.3 19.2-15.3 23H487v-46zm-9.7 16c-4 0-7 3-7 7s3 7 7 7s7-3 7-7s-3-7-7-7" />
                </svg>
                <span>Follow</span>
            </Link>

            <Link href="/" class="button button-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M200.4 27.39L180.9 183h42.8l49.1-146.57zm91.7 8L242.7 183l149.7.1l34.3-102.61zM180 46.03l-71.9 7.84L122.2 183h40.7zM64 153c-11.5 0-19.18 8.8-21.27 17.2c-1.04 4.2-.45 7.6.73 9.5c1.17 1.8 2.79 3.3 8.54 3.3h52.1l-3.3-30zm357.4 0l-10 30h47.5c-2.6-5-3.7-10.3-3-15.6c.7-5.2 2.7-9.9 5.3-14.4zM41 201v246.9c0 5.1 2.79 11.1 7.37 15.7C52.96 468.2 59 471 64 471l384 .1c5 0 11-2.8 15.6-7.4s7.4-10.6 7.4-15.7v-71h-87c-44 0-44-82 0-82h87v-93.9zm343 112c-20 0-20 46 0 46h22.3c-9-3.8-15.3-12.7-15.3-23s6.3-19.2 15.3-23zm41.7 0c9 3.8 15.3 12.7 15.3 23s-6.3 19.2-15.3 23H487v-46zm-9.7 16c-4 0-7 3-7 7s3 7 7 7s7-3 7-7s-3-7-7-7" />
                </svg>
                <span>Room</span>
            </Link>

            <Link href="/" class="button button-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M200.4 27.39L180.9 183h42.8l49.1-146.57zm91.7 8L242.7 183l149.7.1l34.3-102.61zM180 46.03l-71.9 7.84L122.2 183h40.7zM64 153c-11.5 0-19.18 8.8-21.27 17.2c-1.04 4.2-.45 7.6.73 9.5c1.17 1.8 2.79 3.3 8.54 3.3h52.1l-3.3-30zm357.4 0l-10 30h47.5c-2.6-5-3.7-10.3-3-15.6c.7-5.2 2.7-9.9 5.3-14.4zM41 201v246.9c0 5.1 2.79 11.1 7.37 15.7C52.96 468.2 59 471 64 471l384 .1c5 0 11-2.8 15.6-7.4s7.4-10.6 7.4-15.7v-71h-87c-44 0-44-82 0-82h87v-93.9zm343 112c-20 0-20 46 0 46h22.3c-9-3.8-15.3-12.7-15.3-23s6.3-19.2 15.3-23zm41.7 0c9 3.8 15.3 12.7 15.3 23s-6.3 19.2-15.3 23H487v-46zm-9.7 16c-4 0-7 3-7 7s3 7 7 7s7-3 7-7s-3-7-7-7" />
                </svg>
                <span>chat</span>
            </Link>

        </div>
    </div>
</template>
<script setup>

import Profile from "@/Layouts/Profile.vue";
import SectionTitle from "@/Components/sectionTitle.vue";
import Avatar from "@/Components/Avatar.vue";

defineOptions({layout: Profile});

defineProps({
    user: Object,
})
</script>
