<template>
    <div>
        <div v-for="element in menuElement" class="flex items-center gap-4 p-4">
            <button :class="'btn p-0 w-2/12 ' + element.class">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M200.4 27.39L180.9 183h42.8l49.1-146.57zm91.7 8L242.7 183l149.7.1l34.3-102.61zM180 46.03l-71.9 7.84L122.2 183h40.7zM64 153c-11.5 0-19.18 8.8-21.27 17.2c-1.04 4.2-.45 7.6.73 9.5c1.17 1.8 2.79 3.3 8.54 3.3h52.1l-3.3-30zm357.4 0l-10 30h47.5c-2.6-5-3.7-10.3-3-15.6c.7-5.2 2.7-9.9 5.3-14.4zM41 201v246.9c0 5.1 2.79 11.1 7.37 15.7C52.96 468.2 59 471 64 471l384 .1c5 0 11-2.8 15.6-7.4s7.4-10.6 7.4-15.7v-71h-87c-44 0-44-82 0-82h87v-93.9zm343 112c-20 0-20 46 0 46h22.3c-9-3.8-15.3-12.7-15.3-23s6.3-19.2 15.3-23zm41.7 0c9 3.8 15.3 12.7 15.3 23s-6.3 19.2-15.3 23H487v-46zm-9.7 16c-4 0-7 3-7 7s3 7 7 7s7-3 7-7s-3-7-7-7" />
                </svg>
            </button>

            <div class="font-semibold text-lg flex-1">
                <h2>{{ element.name }}</h2>
            </div>

            <Link :href="route(element.url)" class="btn btn-ghost p-0 shadow-inner w-2/12">
                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5m0 0l-5-5" />
                </svg>
            </Link>
        </div>
    </div>
</template>

<script setup>
    import Profile from "@/Layouts/Profile.vue";

    defineOptions({layout: Profile});

    const menuElement = [
        {
            name: 'Wallet',
            icon: 'ion:wallet',
            url: 'profile.recharge',
            class: 'btn-success shadow-md shadow-success',
        },
        {
            name: 'Mall',
            icon: 'ic:baseline-store-mall-directory',
            url: 'home',
            class: 'btn-primary shadow-md shadow-primary',
        },
        {
            name: 'Level',
            icon: 'fa6-solid:crown',
            url: 'home',
            class: 'btn-warning shadow-md shadow-warning',
        },
        {
            name: 'Vip',
            icon: 'lets-icons:dimond-alt-fill',
            url: 'home',
            class: 'btn-secondary shadow-md shadow-secondary',
        },
        {
            name: 'My Agency',
            icon: 'map:insurance-agency',
            url: 'home',
            class: 'btn-accent shadow-md shadow-accent',
        },
        {
            name: 'My Income',
            icon: 'fontisto:dollar',
            url: 'home',
            class: 'btn-success shadow-md shadow-success',
        },
        {
            name: 'Feed Back',
            icon: 'fluent:person-feedback-28-filled',
            url: 'home',
            class: 'btn-primary shadow-md shadow-primary',
        },
        {
            name: 'Settings',
            icon: 'solar:settings-bold',
            url: 'home',
            class: 'btn-info shadow-md shadow-info',
        },
    ]
</script>
