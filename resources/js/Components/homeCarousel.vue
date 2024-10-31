<template>
    <div>
            <div class="carousel carousel-center space-x-4 pb-4 pl-6">

            <div v-for="room in rooms" class="carousel-item w-6/12">
                <img :src="room" class="shadow-lg rounded-box" alt="room"/>
            </div>
        </div>
    </div>
</template>

<script setup>

    const rooms = [
        'https://picsum.photos/200/300',
        'https://picsum.photos/200/300',
        'https://picsum.photos/200/300',
        'https://picsum.photos/200/300'
    ]

</script>

<style scoped>

</style>
