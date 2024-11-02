<template>
    <div>
        <div :class="$attrs.class" class="flex fixed items-center top-0 z-10 w-full p-2">
            <div class="w-1/12">
                <Link :href="$attrs.from" class="btn btn-sm p-0 btn-ghost shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 22L0 12L10 2l1.775 1.775L3.55 12l8.225 8.225z" />
                    </svg>
                </Link>
            </div>

            <div class="flex-1 font-mono">
                <slot />
            </div>

            <div class="w-1/12 p-0 flex-it-middle">
                <Link v-if="$attrs.goto" :href="$attrs.goto" class="btn btn-sm btn-ghost shadow-inner p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <circle cx="4" cy="12" r="1" fill="currentColor" />
                        <rect width="14" height="2" x="7" y="11" fill="currentColor" rx=".94" ry=".94" />
                        <rect width="18" height="2" x="3" y="16" fill="currentColor" rx=".94" ry=".94" />
                        <rect width="18" height="2" x="3" y="6" fill="currentColor" rx=".94" ry=".94" />
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
</script>
