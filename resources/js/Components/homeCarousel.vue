<template>
    <div>
        <div class="carousel carousel-center space-x-4 px-4">

            <div class="carousel-item w-6/12">
                <img
                    :src="$page.props.auth.user.avatar"
                    class="shadow-xl w-full h-full rounded-box mb-8"
                />
            </div>

            <div class="carousel-item w-6/12">
                <img
                    :src="$page.props.auth.user.avatar"
                    class="shadow-xl w-full h-full rounded-box mb-8"
                />
            </div>

            <div class="carousel-item w-6/12">
                <img
                    :src="$page.props.auth.user.avatar"
                    class="shadow-xl w-full h-full rounded-box mb-8"
                />
            </div>

            <div class="carousel-item w-6/12">
                <img
                    :src="$page.props.auth.user.avatar"
                    class="shadow-xl w-full h-full rounded-box mb-8"
                />
            </div>

        </div>
    </div>
</template>

<script setup>

    const eventBanners = [
        '/assets/events/cp_event/cp_banner.png',
        '/assets/events/country_event_banner.png',
        '/assets/events/recharge_benefits_event_banner.png',
        '/assets/events/weekly_star_event_banner.png'
    ]


</script>

<style scoped>

</style>
