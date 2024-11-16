<style scoped>

.room-avatar {
    position: relative;
    border-radius: 100%;
}

.room_seat {
    border-radius: 100%;
    border-style: solid;
    border-color: transparent;
    width: 100%;
    height: 100%;
}

.absolute_center {
    position: absolute;
    top: 50%;left: 50%;
    transform: translate(-50%, -50%);
}
</style>
<template>
    <div class="relative" :style="`width: ${frameSize}px;height: ${frameSize}px;`">
        <div v-if="url === ''" class="room-avatar absolute_center"
              style="width: 100%;height: 100%;">
            <img
                v-show="profileSrc !== ''"
                :style="`padding: ${frameBorder}%`"
                class="room_seat absolute_center"
                :src="profileSrc" alt=""
            >
            <img
                v-show="frameSrc !== ''"
                style="width: 100%"
                class="room_frame absolute_center"
                :src="frameSrc" alt=""
            >
        </div>
        <Link v-else :href="url" class="room-avatar cursor-pointer absolute_center"
              style="width: 100%;height: 100%;">
            <img
                v-show="profileSrc !== ''"
                :style="`padding: ${frameBorder}%`"
                class="room_seat absolute_center"
                :src="profileSrc" alt=""
            >
            <img
                v-show="frameSrc !== ''"
                style="width: 100%"
                class="room_frame absolute_center"
                :src="frameSrc" alt=""
            >
        </Link>
    </div>
</template>

<script setup>
const props = defineProps({
    frameSrc: {
        type: String,
        default: '/storage/site_assets/frames/0.png'
    },
    profileSrc:  {
        type: String,
        default: '/storage/site_assets/profile/avatar_placeholder.png'
    },
    frameSize: {
        type: Number,
        default: 50
    },
    frameBorder: {
        type: Number,
        default: 6
    },
    url: {
        type: String,
        default: ''
    },
})
</script>
