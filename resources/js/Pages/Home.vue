<template>
    <div>
        <div class="flex justify-end pt-3 pr-4 gap-2 relative z-10">
            <button class="home-button !bg-accent/30">Popular</button>
            <button class="home-button">Explore</button>
            <button class="home-button">Follow</button>
            <button class="home-button">Family</button>
        </div>

        <banner-carousel class="relative z-10"/>

        <HomeCarousel class="relative z-10" />

        <RoomGrid class=" relative z-10" />

        <Link :href="route('logout')" method="post" as="button" type="button" class="btn btn-error shadow-xl shadow-error/30 m-16 mt-6"> Logout </Link>
    </div>
</template>
<script setup>
import Default from "@/Layouts/Default.vue";
import BannerCarousel from "@/Components/bannerCarousel.vue";
import HomeCarousel from "@/Components/homeCarousel.vue";
import RoomGrid from "@/Components/roomGrid.vue";
</script>

<style scoped>
.home-button {
    @apply btn btn-xs bg-white font-bold shadow font-mono text-gray-500 rounded;
}
</style>
