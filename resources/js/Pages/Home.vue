<template>
    <div>
        <div class="flex justify-end pt-3 pr-2 gap-2 relative z-10">
            <Link :href="route('myRoom')" class="home-button">My Room</Link>
            <button class="home-button !bg-accent/30">Popular</button>
            <button class="home-button">Explore</button>
            <button class="home-button">Follow</button>
        </div>

        <banner-carousel class="relative z-10"/>

        <div class="carousel carousel-center space-x-4 pb-4 pl-6">

            <Link :href="route('admin.room.show', room.ulid)" v-for="room in rooms" class="carousel-item w-6/12 h-64 rounded-lg relative overflow-hidden"
                 :style="`box-shadow: 0 2px 30px -15px ${room.themes[0].color}`">
                <img :src="room.themes[0].thumbnail" :alt="room.name" />

                <div class="absolute top-0 left-0 w-full z-0 text-xs p-4">Live Now</div>

                <div class="absolute bottom-0 left-0 w-full z-0 text-xs p-4 flex items-center">
                    {{room.name}} <span class="loading loading-bars loading-xs ml-2"></span>
                </div>
            </Link>
        </div>

        <RoomGrid class=" relative z-10" />

    </div>
</template>
<script setup>
import BannerCarousel from "@/Components/bannerCarousel.vue";
import RoomGrid from "@/Components/roomGrid.vue";
import Default from "@/Layouts/Default.vue";
defineOptions({
    layout: Default
})

const props = defineProps({
    rooms: {
        type: Object,
        required: true
    }
})

</script>

<style scoped>
.home-button {
    @apply btn btn-xs bg-white font-bold shadow font-mono text-gray-500 rounded;
}
</style>
