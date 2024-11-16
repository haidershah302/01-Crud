<template>
    <div>
        <div class="flex justify-end pt-3 pr-2 gap-2 relative z-10">
            <Link :href="route('myRoom')" class="home-button">My Room</Link>
            <button class="home-button !bg-accent/30">Popular</button>
            <button class="home-button">Explore</button>
            <button class="home-button">Follow</button>
        </div>

        <banner-carousel class="relative z-10"/>

        <HomeCarousel class="relative z-10" />

        <RoomGrid class=" relative z-10" />

    </div>
</template>
<script setup>
import BannerCarousel from "@/Components/bannerCarousel.vue";
import HomeCarousel from "@/Components/homeCarousel.vue";
import RoomGrid from "@/Components/roomGrid.vue";
import Default from "@/Layouts/Default.vue";
defineOptions({
    layout: Default
})
</script>

<style scoped>
.home-button {
    @apply btn btn-xs bg-white font-bold shadow font-mono text-gray-500 rounded;
}
</style>
