<template>
    <div>
        <div class="room" :style="`background-image: url('${user[0].room.theme.background_image}');`">
            <div>
                <hero_head :user="user[0]" />

                <stats />

                <Seats :user="user[0]" />

            </div>

            <div class="actions-box">

                <div class="flex-1 flex flex-col justify-end">
                    <ChatBox />
                    <div class="theme-text grid grid-cols-5">

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

                    </div>
                </div>

                <div class="flex flex-col justify-end gap-2">
                    <img :src="$page.props.assets + '/site_assets/Room/family.png'" alt="">
                    <img :src="$page.props.assets + '/site_assets/Room/rings.png'" alt="">
                    <div>
                        <img :src="$page.props.assets + '/site_assets/Room/crystal.png'" class="w-full" alt="">
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
</template>

<script setup>
import {usePage} from "@inertiajs/vue3";
import Hero_head from "@/Components/Room/hero_head.vue";
import Stats from "@/Components/Room/stats.vue";
import Seats from "@/Components/Room/seats.vue";
import ChatBox from "@/Components/Room/chatBox.vue";

const assetDir = usePage().props.assets;

const user = [
    {
        id: 1,
        name: 'Rana Haseeb',
        profile_picture: "https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp",
        frame: {
            src: assetDir + '/site_assets/frames/3.png',
            bdr_box: 5,
            size: '60px',
        },
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
    }
];

</script>

<style>
.room {
    --theme-color: v-bind(user[0].room.theme.color);
    --theme-text-color: v-bind(user[0].room.theme.textColor);
    --theme-shadow-color: rgb(from v-bind(user[0].room.theme.color) r g b / 0.3);

    --avatar-size:  v-bind(user[0].room.theme.frame.size);
    --avatar-border: v-bind(user[0].room.theme.frame.bdr_box);

    background-size: cover;
    background-position: center;

    height: 100vh;
    @apply flex flex-col justify-between;
}
.actions-box {
    @apply flex px-2 pb-2 w-full z-10 bottom-0;
    height: 100%;
    min-height: 30vh;
}

.theme-shadow {
    @apply shadow-[--theme-shadow-color];
}

.theme-text {
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
