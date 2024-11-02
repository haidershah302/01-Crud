<template>
    <div>
        <div class="rate_container">

            <img class="h-10" :src="$page.props.assets + '/site_assets/profile/flylivecoin.png'" alt="">

            <h2 class="text-2xl font-semibold">1700</h2>

            <button class="hero-buttons">
                0.99
                <Icon name="fontisto:dollar" class="text-success" size="20px" />
            </button>

        </div>
    </div>
</template>

<script setup>
</script>

<style scoped>
.rate_container
{
    @apply flex justify-between items-center p-2 mx-4
    border-2 border-accent shadow-lg rounded-md font-mono;
}


.hero-buttons {
    @apply btn btn-sm rounded-full btn-accent border-2 border-accent/60
    bg-gradient-to-l from-warning to-accent shadow-md shadow-accent ;
}
</style>
