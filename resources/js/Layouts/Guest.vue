<template>
    <div>
        <Link :href="route('home')" class="p-0 py-8 px-5 flex flex-col justify-center items-center w-full">
            <img :src="$page.props.assets + '/site_assets/brand/logo.png'"
                 class="drop-shadow-xl"
                 width="120" height="auto"
                 alt="">
            <h1 class="text-5xl font-mono font-bold drop-shadow">Fly-live</h1>
        </Link>

        <slot></slot>
    </div>
</template>
