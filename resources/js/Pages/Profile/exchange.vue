<style scoped>
.drop {
    background-image: url('/storage/site_assets/random/cccircule.svg');
    background-size: cover;
    opacity: 0.5;
    @apply w-full h-full absolute;
}

#hero {
    @apply w-full h-64 relative font-mono overflow-hidden mb-8
    bg-gradient-to-b from-secondary to-secondary/50;
    box-shadow: inset 0 -15px 30px 0 #d04dd4;
    border-bottom-left-radius: 100% 40px;
    border-bottom-right-radius: 100% 40px;
}

.hero-button-container {
    @apply absolute top-16 right-0 h-40 flex flex-col gap-3;
}

.hero-buttons {
    @apply btn rounded-l-full shadow-md border-2
    btn-secondary bg-gradient-to-l from-primary/80 to-secondary
    shadow-secondary border-secondary/60;
}
.rate_container
{
    @apply grid grid-cols-12 bg-base-100 border-2 rounded-md;
}
</style>

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
                <img :src="$page.props.assets + '/site_assets/profile/FlyLiveDimond.png'" alt="">
                <h1 class="text-2xl font-bold text-secondary-content">
                    {{abbr($page.props.auth.user.diamonds)}}
                </h1>
            </div>

            <div class="hero-button-container">

                <Link href="/" class="hero-buttons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2a10.02 10.02 0 0 0-6.994 2.872V3a1 1 0 0 0-2 0v4.5a1 1 0 0 0 1 1h4.5a1 1 0 0 0 0-2H6.218A7.98 7.98 0 1 1 4 12a1 1 0 0 0-2 0A10 10 0 1 0 12 2" />
                        <path fill="currentColor" d="M14 13h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2" />
                        <path fill="currentColor" d="M12 4a8 8 0 0 0-5.782 2.5h2.288a1 1 0 0 1 0 2h-4.5a.99.99 0 0 1-.978-.889A9.9 9.9 0 0 0 2 12a1 1 0 0 1 2 0a8 8 0 1 0 8-8m2 9h-2a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v2h1a1 1 0 0 1 0 2" opacity="0.5" />
                    </svg>
                </Link>

            </div>
        </div>
        <div class="px-4">

            <div class="rate_container font-mono mb-6 border-secondary shadow-lg shadow-secondary/30 ">

                <div class="col-span-2 p-2">
                    <img :src="$page.props.assets + '/site_assets/profile/FlyLiveDimond.png'" alt="">
                </div>

                <div class="col-span-4 flex flex-col justify-center">
                    <input type="number" placeholder="000" min="1" v-model="form.diamonds"
                           class="w-full h-full text-center text-lg font-semibold bg-base-200 shadow-inner">
                </div>

                <div class="col-span-6 flex-it-middle text-sm">
                    <p>Diamonds {{$page.props.auth.user.diamonds - form.diamonds}}</p>
                </div>

            </div>

            <div class="rate_container font-mono border-accent shadow-lg shadow-accent/30 mb-4">

                <div class="col-span-2 p-2">
                    <img :src="$page.props.assets + '/site_assets/profile/flylivecoin.png'" alt="">
                </div>

                <div class="col-span-5 flex-it-middle text-sm">
                    <p>{{ form.diamonds }}</p>
                </div>

                <div class="col-span-5 flex-it-middle text-sm">
                    <p>Main Wallet Balance {{ $page.props.auth.user.coins }}</p>
                </div>

            </div>

            <p class="text-lg font-bold mb-4">1 Diamond is Equal to 1 Coin</p>

            <button
                @click.prevent="submit"
                :disabled="!form.diamonds > 0"
                class="btn btn-secondary shadow-lg shadow-secondary/80 w-full"
            >
                Exchange
            </button>

        </div>
    </div>
</template>

<script setup>
import Subheader from "@/Components/subheader.vue";
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    diamonds: null,
});

function submit()
{
    if (form.diamonds > 0) {
        form.post(route('profile.increment.diamonds'));
    }
}

function abbr(num)
{
    if (String(num).length < 3) {
        return Math.floor(num/1000) + '';
    }
    else if (String(num).length < 7) {
        return Math.floor(num/1000) + 'K';
    }
    else {
        return Math.floor(num/1000000) + 'M';
    }
}
</script>
