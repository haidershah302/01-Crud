<template>
    <div>
        <div class="carousel carousel-center w-full gap-3 pl-6 py-4">
            <div v-for="(banner, index) in eventBanners" :id="`item-${index}`"
                 class="carousel-item w-11/12 shadow-lg">
                <img :src="$page.props.assets+banner" alt=""/>
            </div>
        </div>
    </div>
</template>

<script setup>

const eventBanners = [
    '/site_assets/events/cp_event/cp_banner.png',
    '/site_assets/events/country_event_banner.png',
    '/site_assets/events/recharge_benefits_event_banner.png',
    '/site_assets/events/weekly_star_event_banner.png'
]
</script>
