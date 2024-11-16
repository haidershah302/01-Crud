<template>
    <transition name="modal-animation">
        <div v-show="modalActive" class="absolute inset-0 z-30">
            <div @click="$event => $emit('close')" class="absolute inset-0 bg-black bg-opacity-50 z-40"></div>
            <slot></slot>
        </div>
    </transition>
</template>
<script setup>
const props = defineProps({
    modalActive: Boolean,
})
</script>
