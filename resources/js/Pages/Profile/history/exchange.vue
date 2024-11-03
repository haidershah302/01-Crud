<template>
    <div>
        <subheader class="bg-base-300" :from="route('profile.exchange')" >
            <h2 class="text-center font-semibold">Exchange History</h2>
        </subheader>

        <div class="h-12 bg-info w-full p-1"></div>


        <div v-for="(exchanges, date) in history" class="mt-6">
            <h2 class="font-semibold font-mono ml-1">{{toDate(date)}}</h2>
            <div v-for="item in exchanges" class="collapse rounded-none bg-base-200 mb-2">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium">
                    <div class="flex-grow flex flex-col justify-between">
                        <h3>
                            You Exchanged <span class="font-bold text-success">{{abbr(item.amount)}}</span> Diamonds
                        </h3>
                        <p class="text-sm">{{ toTime(item.created_at) }}</p>
                    </div>
                </div>
                <div class="collapse-content flex">
                    <div class="w-full">
                        <p class="flex items-center">
                            <img class="w-4" :src="$page.props.assets + '/site_assets/profile/FlyLiveDimond.png'" alt="">
                            Before
                            {{abbr(item.diamonds_before)}}
                        </p>
                        <p class="flex items-center mt-1">
                            <img class="w-4" :src="$page.props.assets + '/site_assets/profile/FlyLiveDimond.png'" alt="">
                            Minus
                            {{abbr(item.amount)}}
                        </p>
                        <p class="flex items-center mt-1">
                            <img class="w-4" :src="$page.props.assets + '/site_assets/profile/FlyLiveDimond.png'" alt="">
                            After
                            {{abbr(item.diamonds_after)}}
                        </p>
                    </div>
                    <div class="w-full">
                        <p class="flex items-center">
                            <img class="w-4" :src="$page.props.assets + '/site_assets/profile/flylivecoin.png'" alt="">
                            Before
                            {{abbr(item.coins_before)}}
                        </p>
                        <p class="flex items-center mt-1">
                            <img class="w-4" :src="$page.props.assets + '/site_assets/profile/FlyLiveDimond.png'" alt="">
                            Plus
                            {{abbr(item.amount)}}
                        </p>
                        <p class="flex items-center mt-1">
                            <img class="w-4" :src="$page.props.assets + '/site_assets/profile/flylivecoin.png'" alt="">
                            After
                            {{abbr(item.coins_after)}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import Subheader from "@/Components/subheader.vue";
import { toTime, toDate } from "@/Composables/formateDateOrTime.js";
import { abbr } from "@/Composables/formateLargeNumbers.js"

defineProps({
    history: Object
})
</script>
