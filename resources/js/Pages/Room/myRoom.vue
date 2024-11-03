<template>
    <div>
        <div class="w-full max-h-screen min-h-screen bg-base-content text-base-100 relative room">
            <img class="absolute top-0 lef-0 z-0 h-full w-full" :src="user[0].room.theme.background_image" alt="image">

            <div class="relative">

                <div class="grid grid-cols-12 gap-2 p-2">

                    <div class="room_head_block theme-from bg-gradient-to-tl shadow-xl theme-shadow">

                        <div class="col-span-4 text-center">

                            <Avatar
                                :frameSrc="user[0].frame.src"
                                :profileSrc="$page.props.auth.user.avatar"
                                :frameBorder="10"
                                :frameSize="60"
                                url="/profile/view"
                                class="relative h-12 w-full"
                            />
                            <p class="text-xs font-bold">{{ user[0].name }}</p>

                        </div>

                        <div class="col-span-6 flex flex-col justify-center">
                            <h1>{{ user[0].room.name }}</h1>

                            <div class="flex">
                                <p>ID: {{ user[0].room.id }}</p>
                            </div>
                        </div>

                        <div class="col-span-2 flex flex-col justify-center text-success drop-shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.4em" height="2.4em" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="M923 283.6a260 260 0 0 0-56.9-82.8a264.4 264.4 0 0 0-84-55.5A265.3 265.3 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39q-15 9.15-28.5 20.1q-13.5-10.95-28.5-20.1c-41.8-25.5-89.9-39-139.2-39c-35.5 0-69.9 6.8-102.4 20.3c-31.4 13-59.7 31.7-84 55.5a258.4 258.4 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9c0 33.3 6.8 68 20.3 103.3c11.3 29.5 27.5 60.1 48.2 91c32.8 48.9 77.9 99.9 133.9 151.6c92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3c56-51.7 101.1-102.7 133.9-151.6c20.7-30.9 37-61.5 48.2-91c13.5-35.3 20.3-70 20.3-103.3c.1-35.3-7-69.6-20.9-101.9M512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5c0 201.2-356 429.3-356 429.3" />
                                <path fill="currentColor" fill-opacity="0.15" d="M679.7 201c-73.1 0-136.5 40.8-167.7 100.4C480.8 241.8 417.4 201 344.3 201c-104 0-188.3 82.6-188.3 184.5c0 201.2 356 429.3 356 429.3s356-228.1 356-429.3C868 283.6 783.7 201 679.7 201" />
                            </svg>
                        </div>

                    </div>

                    <div class="text-center pt-4 col-span-2">

                        <button class="btn btn-circle border-4 border-success btn-outline btn-success shadow-lg shadow-success/50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M15 8a3 3 0 1 0-2.977-2.63l-4.94 2.47a3 3 0 1 0 0 4.319l4.94 2.47a3 3 0 1 0 .895-1.789l-4.94-2.47a3 3 0 0 0 0-.74l4.94-2.47C13.456 7.68 14.19 8 15 8" />
                            </svg>
                        </button>

                    </div>

                    <div class="col-span-2 text-center pt-4">

                        <Link href="/" class="btn btn-circle border-4 border-primary btn-outline btn-primary shadow-lg shadow-primary/50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496" />
                            </svg>
                        </Link>

                    </div>

                </div>

                <div class="flex justify-between px-4">
                    <button class="btn btn-sm p-0 gap-1 btn-ghost text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372m47.7-395.2l-25.4-5.9V348.6c38 5.2 61.5 29 65.5 58.2c.5 4 3.9 6.9 7.9 6.9h44.9c4.7 0 8.4-4.1 8-8.8c-6.1-62.3-57.4-102.3-125.9-109.2V263c0-4.4-3.6-8-8-8h-28.1c-4.4 0-8 3.6-8 8v33c-70.8 6.9-126.2 46-126.2 119c0 67.6 49.8 100.2 102.1 112.7l24.7 6.3v142.7c-44.2-5.9-69-29.5-74.1-61.3c-.6-3.8-4-6.6-7.9-6.6H363c-4.7 0-8.4 4-8 8.7c4.5 55 46.2 105.6 135.2 112.1V761c0 4.4 3.6 8 8 8h28.4c4.4 0 8-3.6 8-8.1l-.2-31.7c78.3-6.9 134.3-48.8 134.3-124c-.1-69.4-44.2-100.4-109-116.4m-68.6-16.2c-5.6-1.6-10.3-3.1-15-5c-33.8-12.2-49.5-31.9-49.5-57.3c0-36.3 27.5-57 64.5-61.7zM534.3 677V543.3c3.1.9 5.9 1.6 8.8 2.2c47.3 14.4 63.2 34.4 63.2 65.1c0 39.1-29.4 62.6-72 66.4" />
                        </svg>
                        <span class="text-white font-bold">11.3 M</span>
                    </button>

                    <button class="btn btn-sm p-0 gap-1 btn-ghost text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48">
                            <path fill="currentColor" d="M16 24a8 8 0 1 0 0-16a8 8 0 0 0 0 16m18 0a6 6 0 1 0 0-12a6 6 0 0 0 0 12M6.75 27A3.75 3.75 0 0 0 3 30.75V32s0 9 13 9s13-9 13-9v-1.25A3.75 3.75 0 0 0 25.25 27zm21.924 11.089c1.376.558 3.119.911 5.325.911c10.5 0 10.5-8 10.5-8v-.25A3.75 3.75 0 0 0 40.75 27H29.607a5.73 5.73 0 0 1 1.391 3.75v1.295l-.001.057l-.006.15q-.008.173-.035.43a10 10 0 0 1-.24 1.325a10.7 10.7 0 0 1-2.042 4.082" />
                        </svg>
                        <span class="theme-text font-bold">321</span>
                    </button>
                </div>

                <div class="grid grid-cols-5 gap-2 gap-y-6 p-2">

                    <div v-for="n in user[0].room.allowed_seats" class="flex flex-col">

                        <Avatar
                            :frameSrc="user[0].room.theme.frame.src"
                            :profileSrc="user[0].room.theme.profile_picture"
                            :frameBorder="20"
                            :frameSize="75"
                            url="/profile/view"
                            class="relative h-16"
                        />

                        <p v-show="false" class="text-center text-base-100 font-bold text-sm">1</p>

                        <button v-show="false" class="btn btn-xs gap-0 text-xs mx-auto btn-ghost text-primary">
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

                <div class="p-2 hidden">
                    <p class="rounded font-mono p-2 text-xs max-w-80 bg-gradient-to-tr theme-from shadow-xl theme-shadow">
                        Welcome to FLY LIVE. Any bad information in chat will be blocked.
                        Please respect each other and country and religions and chat in a decent manners.
                    </p>
                </div>

                <div class="grid grid-cols-12 mt-1 gap-2 gap-y-4 px-2">

                    <!--Chat Box-->
                    <div class="col-span-10 rounded-b-box bg-gradient-to-tl theme-from shadow-2xl theme-shadow">

                    </div>

                    <div class="col-span-2 flex flex-col justify-end gap-4">
                        <img :src="$page.props.assets + '/site_assets/Room/family.png'" alt="">
                        <img :src="$page.props.assets + '/site_assets/Room/rings.png'" alt="">
                        <div>
                            <img :src="$page.props.assets + '/site_assets/Room/crystal.png'" class="w-full" alt="">
                            <div class="px-2">
                                <progress class="progress shadow-md theme-shadow" value="60" max="100"></progress>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 theme-text grid grid-cols-6">

                        <button class="btn p-0 btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12.28 19.23q1.056-.075 2.084-.337a5.8 5.8 0 0 0 2.602.168a1 1 0 0 1 .104-.008c.31 0 .717.178 1.31.553v-.616a.6.6 0 0 1 .311-.525c.258-.143.498-.31.717-.492c.864-.723 1.352-1.686 1.352-2.706a3.2 3.2 0 0 0-.159-.993c.26-.48.472-.986.627-1.51c.5.74.77 1.61.772 2.503c0 1.386-.654 2.68-1.785 3.625a6 6 0 0 1-.595.436v1.442c0 .496-.58.78-.989.486a15 15 0 0 0-1.2-.8a3 3 0 0 0-.369-.184q-.51.076-1.038.077c-1.412 0-2.717-.419-3.744-1.12m-7.466-2.885C3.03 14.854 2 12.818 2 10.64c0-4.454 4.258-8.014 9.457-8.014s9.458 3.56 9.458 8.014s-4.259 8.013-9.458 8.013q-.877 0-1.728-.133c-.245.057-1.224.631-2.635 1.648c-.51.369-1.236.013-1.236-.608V17.1a9 9 0 0 1-1.044-.754m4.95.658q.063 0 .13.01a9.5 9.5 0 0 0 1.563.128c4.392 0 7.907-2.939 7.907-6.502s-3.515-6.501-7.907-6.501c-4.39 0-7.907 2.939-7.907 6.501c0 1.723.821 3.345 2.273 4.559q.55.458 1.196.821c.241.135.39.385.39.655v1.419c1.116-.74 1.85-1.09 2.354-1.09" />
                                <path fill="currentColor" d="M7.625 12a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5m4.062 0a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5m4.063.001a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5" />
                            </svg>
                        </button>

                        <button class="btn p-0 btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 2176 1792">
                                <path fill="currentColor" d="m640 1632l384-192v-314l-384 164zm-64-454l404-173l-404-173l-404 173zm1088 454l384-192v-314l-384 164zm-64-454l404-173l-404-173l-404 173zm-448-293l384-165V454l-384 164zm-64-379l441-189l-441-189l-441 189zm1088 518v416q0 36-19 67t-52 47l-448 224q-25 14-57 14t-57-14l-448-224q-4-2-7-4q-2 2-7 4l-448 224q-25 14-57 14t-57-14L71 1554q-33-16-52-47t-19-67v-416q0-38 21.5-70T78 906l434-186V320q0-38 21.5-70t56.5-48l448-192q23-10 50-10t50 10l448 192q35 16 56.5 48t21.5 70v400l434 186q36 16 57 48t21 70" />
                            </svg>
                        </button>

                        <button class="btn p-0 btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M17 9a8 8 0 1 0-7.411 7.979A5.5 5.5 0 0 1 9.022 14H9a5 5 0 0 1-3.889-1.856a.5.5 0 1 1 .778-.63a3.99 3.99 0 0 0 3.32 1.481a5.502 5.502 0 0 1 7.77-3.406A8 8 0 0 0 17 9m-6.5-1.5a1 1 0 1 1 2 0a1 1 0 0 1-2 0m-5 0a1 1 0 1 1 2 0a1 1 0 0 1-2 0m13.5 7a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4-2a.5.5 0 0 0-1 0V14h-1.5a.5.5 0 0 0 0 1H14v1.5a.5.5 0 0 0 1 0V15h1.5a.5.5 0 0 0 0-1H15z" />
                            </svg>
                        </button>

                        <button class="btn p-0 btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z" />
                                    <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                </g>
                            </svg>
                        </button>

                        <button class="btn p-0 btn-ghost shadow-icons">
                            <img :src="$page.props.assets + '/site_assets/Room/games.png'" alt="">
                        </button>

                        <button class="btn p-0 btn-ghost shadow-icons">
                            <img :src="$page.props.assets + '/site_assets/Room/gifts.png'" alt="">
                        </button>

                    </div>

                </div>

            </div>

        </div>
    </div>
</template>

<script setup>
import Avatar from "@/Components/Avatar.vue";
import {usePage} from "@inertiajs/vue3";

const assetDir = usePage().props.assets;

const user = [
    {
        id: 1,
        name: 'Rana Haseeb',
        profile_picture: "https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp",
        room: {
            id: '46856',
            name: 'Haseeb Room',
            total_gift_interactions: 1123,
            active_users: 3211,
            allowed_seats: 15,
            theme: {
                background_image: assetDir + '/site_assets/backgrounds/3.jpg',
                frame: {
                    src: assetDir + '/site_assets/frames/4.png',
                    bdr_box: '20px',
                    size: '75px',
                },
                profile_picture: assetDir + '/site_assets/Room/seat.png',
                color: '#b39bd9',
                textColor: '#ffffff',
            },
            members: [
                {
                    id: 1,
                    name: 'User Name',
                    profile_picture: 'https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp',
                    room: {
                        room_id: '123456',
                    },
                    frame: {
                        src: assetDir + '/site_assets/frames/6.png',
                        bdr_box: 15,
                        size: '90px',
                    },
                    interaction: {
                        likes: 4,
                        gifts_received: 8
                    }
                },
                {
                    id: 2,
                    name: 'User Name',
                    profile_picture: 'https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp',
                    room: {
                        room_id: '123456',
                    },
                    frame: {
                        src: assetDir + '/site_assets/frames/4.png',
                        bdr_box: 15,
                        size: '90px',
                    }
                }
            ],
        },
        frame: {
            src: assetDir + '/site_assets/frames/3.png',
            bdr_box: 5,
            size: '60px',
        }
    }
];
</script>

<style scoped>
.room {
    --theme-color: v-bind(user[0].room.theme.color);
    --theme-text-color: v-bind(user[0].room.theme.textColor);
    --theme-shadow-color: rgb(from v-bind(user[0].room.theme.color) r g b / 0.3);

    --avatar-size:  v-bind(user[0].room.theme.frame.size);
    --avatar-border: v-bind(user[0].room.theme.frame.bdr_box);
}

.room_head_block {
    @apply grid grid-cols-12 col-span-8
    rounded-box p-1 font-bold;
    color: var(--theme-text-color);
}

.theme-from {
    @apply from-[--theme-color];
}
.theme-shadow {
    @apply shadow-[--theme-shadow-color];
}

.theme-text{
    color: var(--theme-text-color);
}

.progress::-webkit-progress-value{
    background-color: rgb(from var(--theme-color) r g b / 1);
}

.progress::-webkit-progress-bar {
    background-color: rgb(from var(--theme-color) r g b / 0.2);
}

.shadow-icons {
    filter: drop-shadow(0 5px 5px rgb(from var(--theme-color) r g b / 0.6));
}
</style>
