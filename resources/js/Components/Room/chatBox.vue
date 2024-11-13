<template>
    <div class="chat-box scrollbar-none">
        <p class="text-xs bg-[--theme-color] rounded p-2">
            Welcome to FLY LIVE. Any bad information in chat will be blocked.
            Please respect each other and country and religions and chat in a
            decent manners.
        </p>

        <div class="chat chat-start">
            <div class="chat-image avatar">
                <div class="w-8 rounded-full">
                    <img
                        class="bg-[--theme-color]"
                        alt="Tailwind CSS chat bubble component"
                        :src="$page.props.auth.user.avatar"
                    />
                </div>
            </div>
            <div class="chat-header text-sm">
                {{ $page.props.auth.user.name }}
                <time class="text-xs opacity-50">12:45</time>
            </div>
            <div class="chat-bubble text-sm p-2 bg-transparent shadow-lg">
                You were the Chosen One!
            </div>
        </div>

    </div>
</template>

<style scoped>
.chat-box {
    @apply rounded-b-lg p-1 bg-gradient-to-tl from-[--theme-color]
    text-[--theme-text-color] overflow-y-scroll py-3
    shadow-2xl shadow-[--theme-shadow-color];
    height: 100%;
}
</style>
