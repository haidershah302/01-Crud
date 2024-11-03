<template>
    <div>
            <div class="carousel carousel-center space-x-4 pb-4 pl-6">

            <div v-for="room in rooms" class="carousel-item w-5/12">
                <img :src="room" class="shadow-lg rounded-box" alt="room"/>
            </div>
        </div>
    </div>
</template>

<script setup>

    import {usePage} from "@inertiajs/vue3";

    const rooms = [
        usePage().props.assets+'/site_assets/backgrounds/1.jpg',
        usePage().props.assets+'/site_assets/backgrounds/2.png',
        usePage().props.assets+'/site_assets/backgrounds/3.jpg',
        usePage().props.assets+'/site_assets/backgrounds/4.png',
        usePage().props.assets+'/site_assets/backgrounds/5.png',
        usePage().props.assets+'/site_assets/backgrounds/6.jpg',
    ]

</script>

<style scoped>

</style>
