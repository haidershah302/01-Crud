<template>
    <div>
        <banner-carousel />

        <HomeCarousel />

        <RoomGrid />

        <Link :href="route('logout')" method="post" as="button" type="button" class="btn btn-error shadow-xl shadow-error/30 m-16 mt-6"> Logout </Link>
    </div>
</template>
<script setup>
import Default from "@/Layouts/Default.vue";
import BannerCarousel from "@/Components/bannerCarousel.vue";
import HomeCarousel from "@/Components/homeCarousel.vue";
import RoomGrid from "@/Components/roomGrid.vue";
defineOptions({layout: Default});
</script>
