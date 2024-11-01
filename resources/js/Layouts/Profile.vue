<style scoped>
.profile-container {
    @apply pt-5 mb-5 shadow-2xl shadow-primary/20 pb-1 bg-base-300;
}
.profile-container > .main-box {
    @apply flex w-full gap-4 px-5 mb-6 relative font-bold text-lg;
}
.profile-container > .main-box > div > div {
    @apply flex gap-4 font-mono font-bold text-center;
}

.profile-stats {
    @apply flex justify-between gap-2 px-2 font-bold text-center text-sm text-base-content;
}
</style>

<template>
    <div>
        <Subheader from="/" goto="/">
            <h1 class="text-center mt-3">Profile</h1>
        </Subheader>

        <div class="h-12"></div>

        <!--    Profile Column Start    -->
        <div class="profile-container">

            <div class="main-box">

                <Avatar
                    :frameSrc="$page.props.assets + '/site_assets/frames/3.png'"
                    :profileSrc="user.avatar"
                    :frameBorder="25"
                    :frameSize="110"
                    url="/"
                    class="w-28"
                />

                <div>

                    <Link :href="route('profile.view', user.id)">
                        {{ user.name }}
                    </Link>

                    <UniqueId>
                        {{ 100100 + user.id }}
                    </UniqueId>

                    <div>
                        <Badge :badge="$page.props.assets + '/site_assets/badges/3.png'" class="badge-primary shadow-primary/40 shadow"/>
                        <Badge :badge="$page.props.assets + '/site_assets/badges/2.png'" class="badge-info shadow-info/40 shadow"/>
                    </div>

                </div>

            </div>

            <div class="profile-stats">
                <div>
                    <p>245</p>
                    <p>Follow</p>
                </div>
                <div>
                    <p>900</p>
                    <p>Fans</p>
                </div>
                <div>
                    <p>500k</p>
                    <p>Gifts Received</p>
                </div>
                <div>
                    <p>900k</p>
                    <p>Gifts Sent</p>
                </div>
                <div>
                    <p>3M</p>
                    <p>Visits</p>
                </div>
            </div>

        </div>

        <SectionTitle class="mb-4">
            CP Relationship
        </SectionTitle>

        <div class="px-4">
            <img
                class="rounded-box shadow-lg shadow-primary/30 border-2 border-primary"
                :src="$page.props.assets + '/site_assets/events/cp_event/cp_banner.png'"
                alt=""
            >
        </div>

        <div class="carousel carousel-center rounded-box max-w-md space-x-4 p-4 mb-4">

            <div class="carousel-item w-4/12">
                <img :src="$page.props.assets + '/site_assets/events/cp_event/small_banner.png'" alt=""
                     class="rounded-box shadow-lg shadow-primary/30 border-2 border-primary h-full w-80" />
            </div>

            <div class="carousel-item w-4/12">
                <img :src="$page.props.assets + '/site_assets/events/cp_event/small_banner.png'" alt=""
                     class="rounded-box shadow-lg shadow-primary/30 border-2 border-primary h-full w-80" />
            </div>

            <div class="carousel-item w-4/12">
                <img :src="$page.props.assets + '/site_assets/events/cp_event/small_banner.png'" alt=""
                     class="rounded-box shadow-lg shadow-primary/30 border-2 border-primary h-full w-80" />
            </div>

            <div class="carousel-item w-4/12">
                <img :src="$page.props.assets + '/site_assets/events/cp_event/small_banner.png'" alt=""
                     class="rounded-box shadow-lg shadow-primary/30 border-2 border-primary h-full w-80" />
            </div>

            <div class="carousel-item w-4/12">
                <img :src="$page.props.assets + '/site_assets/events/cp_event/small_banner.png'" alt=""
                     class="rounded-box shadow-lg shadow-primary/30 border-2 border-primary h-full w-80" />
            </div>

        </div>

        <slot />
    </div>
</template>
<script setup>
import Subheader from "@/Components/subheader.vue";
import Avatar from "@/Components/Avatar.vue";
import UniqueId from "@/Components/uniqueId.vue";
import Badge from "@/Components/badge.vue";
import SectionTitle from "@/Components/sectionTitle.vue";

defineProps({
    user: Object
});

// let authUser = {
//     id: 1,
//     name: "Test User",
//     profile_picture: "https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp",
//     frame: {
//         src: '/assets/frames/3.png',
//         bdr_box: 25,
//         size: 110,
//     },
//     room: {
//         id: '123456',
//         name: 'Haseeb Room',
//         total_gift_interactions: 1123,
//         active_users: 3211,
//         allowed_seats: 15,
//         theme: {
//             background_image: 'assets/backgrounds/6.jpg',
//             frame: {
//                 src: 'assets/frames/0.png',
//                 bdr_box: '20px',
//                 size: '75px',
//             },
//             profile_picture: 'assets/room/seat.png',
//             color: '#5EE635FF',
//             textColor: '#ffffff',
//         },
//         members: [
//             {
//                 id: 1,
//                 name: 'User Name',
//                 profile_picture: 'https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp',
//                 room: {
//                     room_id: '123456',
//                 },
//                 frame: {
//                     src: 'assets/frames/6.png',
//                     bdr_box: 15,
//                     size: '90px',
//                 },
//                 interaction: {
//                     likes: 4,
//                     gifts_received: 8
//                 }
//             },
//             {
//                 id: 2,
//                 name: 'User Name',
//                 profile_picture: 'https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp',
//                 room: {
//                     room_id: '123456',
//                 },
//                 frame: {
//                     src: 'assets/frames/4.png',
//                     bdr_box: 15,
//                     size: '90px',
//                 }
//             }
//         ],
//     },
// }
</script>
