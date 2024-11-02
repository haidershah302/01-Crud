<template>
    <div>
        <subheader :from="route('profile.user')">
            <div class="flex">
                <div class="flex-1 flex-it-middle">
                    <Link :href="route('profile.recharge')"
                          :class="`rounded-b ${$page.url === '/profile/recharge'? 'border-b-4' : ''}`">
                        Recharge
                    </Link>
                </div>

                <div class="flex-1 flex-it-middle">
                    <Link :href="route('profile.exchange')"
                          :class="`rounded-b ${$page.url === '/profile/exchange'? 'border-b-4' : ''}`">
                        Exchange
                    </Link>
                </div>
            </div>
        </subheader>

        <div id="hero">
            <div class="drop"></div>

            <div class="flex-it-middle h-full drop-shadow-lg pt-12">
                <img :src="$page.props.assets + '/site_assets/profile/flylivecoin.png'" alt="">
                <h1 class="text-2xl font-bold text-accent-content">1234</h1>
            </div>

            <div class="hero-button-container">

                <Link href="/" class="hero-buttons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2a10.02 10.02 0 0 0-6.994 2.872V3a1 1 0 0 0-2 0v4.5a1 1 0 0 0 1 1h4.5a1 1 0 0 0 0-2H6.218A7.98 7.98 0 1 1 4 12a1 1 0 0 0-2 0A10 10 0 1 0 12 2" />
                        <path fill="currentColor" d="M14 13h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2" />
                        <path fill="currentColor" d="M12 4a8 8 0 0 0-5.782 2.5h2.288a1 1 0 0 1 0 2h-4.5a.99.99 0 0 1-.978-.889A9.9 9.9 0 0 0 2 12a1 1 0 0 1 2 0a8 8 0 1 0 8-8m2 9h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2" opacity="0.5" />
                    </svg>
                </Link>

                <Link href="/" class="hero-buttons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 15 15">
                        <path fill="currentColor" fill-rule="evenodd" d="M4.5 0A2.5 2.5 0 0 0 2 2.5v.286c0 .448.133.865.362 1.214H1.5A1.5 1.5 0 0 0 0 5.5v1A1.5 1.5 0 0 0 1.5 8H7V4h1v4h5.5A1.5 1.5 0 0 0 15 6.5v-1A1.5 1.5 0 0 0 13.5 4h-.862c.229-.349.362-.766.362-1.214V2.5A2.5 2.5 0 0 0 10.5 0c-1.273 0-2.388.68-3 1.696A3.5 3.5 0 0 0 4.5 0M8 4h2.786C11.456 4 12 3.456 12 2.786V2.5A1.5 1.5 0 0 0 10.5 1A2.5 2.5 0 0 0 8 3.5zM7 4H4.214C3.544 4 3 3.456 3 2.786V2.5A1.5 1.5 0 0 1 4.5 1A2.5 2.5 0 0 1 7 3.5z" clip-rule="evenodd" />
                        <path fill="currentColor" d="M7 9H1v3.5A2.5 2.5 0 0 0 3.5 15H7zm1 6h3.5a2.5 2.5 0 0 0 2.5-2.5V9H8z" />
                    </svg>
                </Link>

            </div>
        </div>
        <RechargeRate v-for="n in 7" class="mb-4" />
    </div>
</template>

<style scoped>
.drop {
    background-image: url('/storage/site_assets/random/cccircule.svg');
    background-size: cover;
    opacity: 0.5;
    @apply w-full h-full absolute;
}

#hero {
    @apply w-full h-64 relative font-mono overflow-hidden mb-8
    bg-gradient-to-b from-yellow-400 to-accent/70;
    box-shadow: inset 0 -15px 30px 0 #a56d00;
    border-bottom-left-radius: 100% 40px;
    border-bottom-right-radius: 100% 40px;
}

.hero-button-container {
    @apply absolute top-16 right-0 h-40 flex flex-col gap-3;
}

.hero-buttons {
    @apply btn rounded-l-full shadow-md border-2
    btn-accent bg-gradient-to-l from-warning to-accent
    shadow-accent border-accent/60;
}
</style>

<script setup>
import RechargeRate from "@/Components/rechargRate.vue";
import Subheader from "@/Components/subheader.vue";
</script>
