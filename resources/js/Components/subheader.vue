<template>
    <div>
        <div class="grid grid-cols-12 bg-base-content w-full text-base-100 fixed top-0 left-0 z-10">
            <Link :href="$attrs.from" class="btn btn-ghost col-span-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 22L0 12L10 2l1.775 1.775L3.55 12l8.225 8.225z" />
                </svg>
            </Link>

            <div class="col-span-8">
                <slot />
            </div>

            <Link :href="$attrs.goto" class="btn btn-ghost col-span-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                    <circle cx="4" cy="12" r="1" fill="currentColor" />
                    <rect width="14" height="2" x="7" y="11" fill="currentColor" rx=".94" ry=".94" />
                    <rect width="18" height="2" x="3" y="16" fill="currentColor" rx=".94" ry=".94" />
                    <rect width="18" height="2" x="3" y="6" fill="currentColor" rx=".94" ry=".94" />
                </svg>
            </Link>
        </div>
    </div>
</template>
<script setup lang="ts">
</script>
