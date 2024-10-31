<template>
    <div>
        <Link :href="route('home')" class="p-0 py-8 px-5 item-center flex justify-center items-center w-full">
            <img :src="$page.props.assets + '/site_assets/brand/logo_wing.png'"
                 class="drop-shadow-xl"
                 width="40" height="auto"
                 alt="">
            <h1 class="text-5xl font-mono font-bold drop-shadow">Fly-live</h1>
        </Link>

        <slot></slot>
    </div>
</template>
<script setup lang="ts">
</script>
