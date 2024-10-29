<template>
    <div>
        <img :src="badge" alt="">
        <p class="font-mono">1</p>
    </div>
</template>

<script setup>
const props = defineProps({
    badge: { type: String, default: '/site_assets/badges/2.png'},
})
</script>

<style scoped>
div {
    @apply rounded-badge relative pl-8 pr-2;
}
img {
    @apply absolute top-0 left-0 p-0 m-0 drop-shadow origin-center;
    width: 30px; height: auto;
    transform: translate(-30%, -10%);
}
</style>
