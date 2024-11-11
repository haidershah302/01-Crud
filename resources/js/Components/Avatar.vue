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
        <Link :href="url" class="room-avatar absolute_center"
              style="width: 100%;height: 100%;">
            <img
                :style="`padding: ${frameBorder}%`"
                class="room_seat absolute_center"
                :src="profileSrc" alt=""
            >
            <img
                style="width: 100%"
                class="room_frame absolute_center"
                :src="frameSrc" alt=""
            >
        </Link>
    </div>
</template>

<script setup>
import {watch} from "vue";

const props = defineProps({
    frameSrc: String,
    profileSrc: String,
    frameSize: Number,
    frameBorder: Number,
    url: String,
})

watch(props, (newProps) => {
    console.log(newProps.frameBorder)
})


</script>
