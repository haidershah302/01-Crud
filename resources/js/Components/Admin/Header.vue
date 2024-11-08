<style scoped>
.header-styled{
    @apply p-0 bg-cover bg-center bg-no-repeat h-64;
    background-image: url('/storage/site_assets/backgrounds/16.jpeg');
    animation: paralax 15s infinite alternate;
}
@keyframes paralax {
    0% {
        background-size: 110%;
    }
    100% {
        background-size: 100%;
    }
}
</style>

<template>
    <div>
        <div class="header-styled">
            <div class="navbar py-0">
                <div class="flex-shrink-0 items-center">
                    <label for="sidebar" class="btn btn-sm bg-base-100 shadow-inner drawer-button lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M4 7h3m13 0h-9m9 10h-3M4 17h9m-9-5h16" />
                        </svg>
                    </label>

                    <div>
                        <span class="countdown font-mono ml-2">
                          <span style="--value:10;"></span>
                          :
                          <span style="--value:24;"></span>
                          :
                          <span style="--value:${counter};"></span>
                        </span>
                    </div>
                </div>

                <div class="w-full">
                    <label class="input glass mx-auto input-sm flex items-center gap-2 w-4/12">
                        <input type="text" class="grow" placeholder="Search" />
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="h-4 w-4 opacity-70">
                            <path
                                fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </label>
                </div>

                <div class="flex-shrink-0 gap-3">
                    <button class="btn btn-sm p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24">
                            <g fill="none">
                                <g fill="currentColor" clip-path="url(#mageInboxNotificationFill0)">
                                    <path d="M21.875 10.495v4.88a6.76 6.76 0 0 1-6.75 6.75h-6.5a6.76 6.76 0 0 1-6.75-6.75v-6.5a6.76 6.76 0 0 1 6.75-6.75h4.87a.75.75 0 1 1 0 1.5h-4.87a5.25 5.25 0 0 0-5.25 5.25v2.5h2.5a2.75 2.75 0 0 1 2.75 2.75a1.25 1.25 0 0 0 1.25 1.25h4a1.26 1.26 0 0 0 1.25-1.25a2.73 2.73 0 0 1 2.75-2.75h2.5v-.88a.75.75 0 1 1 1.5 0" />
                                    <path d="M18.875 8.375a3.25 3.25 0 1 0 0-6.5a3.25 3.25 0 0 0 0 6.5" />
                                </g>
                                <defs>
                                    <clipPath id="mageInboxNotificationFill0">
                                        <path fill="#fff" d="M1.875 1.875h20.25v20.25H1.875z" />
                                    </clipPath>
                                </defs>
                            </g>
                        </svg>
                    </button>

                    <ThemeSwitch class=" mr-3"/>

                    <div class="flex items-center">
                        <Avatar
                            :frameSrc="$page.props.assets + '/site_assets/frames/3.png'"
                            :profileSrc="$page.props.auth.user.avatar"
                            :frameBorder="15"
                            :frameSize="60"
                            :url="route('profile.user')"
                        />
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-sm shadow-inner">
                                <p class="block">{{$page.props.auth.user.name}}</p>
                            </div>
                            <ul tabindex="0" class="dropdown-content menu bg-base-300 rounded-box z-[1] w-52 p-2 shadow">
                                <li><a>Item 1</a></li>
                                <li><a>Item 2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import ThemeSwitch from "@/Components/themeSwitch.vue";
import Avatar from "@/Components/Avatar.vue";
</script>

