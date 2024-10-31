<template>
    <div>
        <header class="navbar fixed top-0 bg-base-content text-base-100 z-50">
            <div class="flex-1">
                <Link href="/" class="btn btn-ghost inline-block text-xl pt-0 m-0">
                    <img :src="$page.props.assets + '/site_assets/brand/logo.png'" class="h-full" alt="">
                </Link>
            </div>
            <ul class="menu menu-horizontal p-0 drop-shadow-lg">
                <li>
                    <ThemeSwitch class="p-0 m-0"/>
                </li>
                <li>
                    <Link href="/" class="text-accent">
                        <img :src="$page.props.assets + '/site_assets/auth/google-icon.png'" width="25" alt="">
                    </Link>
                </li>
            </ul>
        </header>

        <main class="py-16">
            <slot></slot>
        </main>

        <div class="btm-nav bg-base-content grid grid-cols-5 z-50">
            <Link href="/">
                <svg xmlns="http://www.w3.org/2000/svg" class="drop-shadow" width="2.5em" height="2.5em" viewBox="0 0 32 32">
                    <g fill="none">
                        <path fill="url(#fluentColorHome320)" d="M11 17h10v12H11z" />
                        <path fill="url(#fluentColorHome321)" d="M13.895 4.277a3.25 3.25 0 0 1 4.21 0l9.75 8.287A3.25 3.25 0 0 1 29 15.04V26.5a2.5 2.5 0 0 1-2.5 2.5H20v-9a2 2 0 0 0-1.991-2H13.99A2 2 0 0 0 12 20v9H5.5A2.5 2.5 0 0 1 3 26.5V15.04a3.25 3.25 0 0 1 1.145-2.476z" />
                        <path fill="url(#fluentColorHome322)" fill-rule="evenodd" d="M15.958 5.313L3.448 15.506a1.5 1.5 0 1 1-1.896-2.325L14.722 2.45a2 2 0 0 1 2.593.055l13.182 11.096a1.5 1.5 0 1 1-1.994 2.242z" clip-rule="evenodd" />
                        <defs>
                            <linearGradient id="fluentColorHome320" x1="16" x2="8.476" y1="17" y2="30.938" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#944600" />
                                <stop offset="1" stop-color="#cd8e02" />
                            </linearGradient>
                            <linearGradient id="fluentColorHome321" x1="5.482" x2="30.596" y1="2.256" y2="23.072" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ffd394" />
                                <stop offset="1" stop-color="#ffb357" />
                            </linearGradient>
                            <linearGradient id="fluentColorHome322" x1="11.152" x2="17.15" y1="-1.378" y2="15.727" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ff921f" />
                                <stop offset="1" stop-color="#eb4824" />
                            </linearGradient>
                        </defs>
                    </g>
                </svg>
            </Link>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="drop-shadow" width="2.5em" height="2.5em" viewBox="0 0 128 128">
                    <radialGradient id="notoGlobeShowingAsiaAustralia0" cx="43.972" cy="29.066" r="90.951" gradientTransform="matrix(.6257 .78 -.5815 .4665 33.359 -18.792)" gradientUnits="userSpaceOnUse">
                        <stop offset=".506" stop-color="#17a1f3" />
                        <stop offset=".767" stop-color="#1b7ffa" />
                        <stop offset=".962" stop-color="#1366f0" />
                        <stop offset="1" stop-color="#1160ee" />
                    </radialGradient>
                    <path fill="url(#notoGlobeShowingAsiaAustralia0)" d="M3.14 64.68c.68 24.4 16.99 59.55 61.45 59.1c43.32-.44 60.76-36.3 59.4-62.06c-1.37-25.76-21.66-57.46-61.79-57.23c-40.14.22-59.8 33.96-59.06 60.19" />
                    <path fill="#4b9eec" d="M47.21 22.14c.28.38 1.55-.08 2.15-.05s1.25.27 1.33.82c.08.54-.52.63-.87 1.33c-.18.36-1.39 2.79-.73 3.07c.87.38 1.3-.49 1.49-.9s.65-1.28.65-1.28s.52-1.14 1.2-1.06c1.22.14.73 1.88.73 1.88s-.27 1.3.38 1.6s1.28.08 1.63-.05c.35-.14.95 0 1.66-.3s1.01-.57 1.49-.76c.49-.19.92-.08.98-.52c.05-.43-.38-.87-1.11-.92s-1.63.79-1.93 1.06s-1.28.46-1.39-.24s.52-.76.98-1.03s.76-.65.76-.65s-.84-1.09-1.09-1.17c-.24-.08-1.22.22-2.2-.46c-.91-.63-1.28-1.49-1.52-1.71s-1.33-.57-2.39-.35s-2.64 1.09-2.2 1.69" />
                    <path fill="#7add8a" d="M5.54 46.98C11.5 26.73 28.47 7.24 56.48 4.75l.14 1.34s2.57.69 3.82.76s2.57.14 2.98 0c.42-.14 2.22-2.31 2.22-2.31c7.18.3 13.68 1.64 19.52 3.79c0 0 .22 2.38-.11 2.87s-.27 2.46-.11 3.23s.77 3.45.55 5.09s.11 4.05-1.04 3.83s-2.19-4.38-2.96-5.2s.33-2.85-.22-4.05s-.88-1.75-2.13-1.26s-1.59 2.96-2.85 3.45s-2.41-.6-3.12-.6s-3.5 1.26-4.05 2.9s-.33 2.9 1.15 3.07c1.48.16 1.31-.66 2.13-.44s1.04 2.24 1.37 2.96c.33.71.93 1.48.99 2.9c.05 1.42-.6 3.78-1.31 4.6s-1.09 3.01-2.13 3.61s-2.35.27-3.28.6s-.6 1.64-1.48 2.35s-1.75.99-1.75.99s2.08 2.13 2.03 3.67c-.05 1.53.05 2.52-1.81 3.34s-1.53-.27-1.48-1.75s-.05-2.24-.05-2.24s-1.26-.38-1.53-.66c-.27-.27-.38-.66-.38-.66s-1.64-.33-1.97-.38s-.88.16-1.15-.38c-.27-.55.49-1.42.11-1.64s-2.57 1.31-3.01 2.03c-.44.71.38 1.37.71 1.75s1.37 0 1.42.49s-.22 1.53-.55 1.86s-.82.88-.77 1.26s1.92 1.81 2.13 2.3s1.09.38 1.15 1.81c.05 1.42-.38 2.41-.99 3.12c-.6.71-1.26 1.42-1.42 1.53s-1.26 1.97-2.08 2.63s-2.63 2.13-4 2.57s-3.74.19-4.88.98s-.97 2.15-1.76 2.8s-1.26.86-1.8.18s-.36-1.44-.04-1.72c.32-.29.93-.61.29-1.04c-.65-.43-1.15 0-1.83.47s-1.69 1.01-1.33 2.08c.36 1.08 1.97 2.37 2.51 3.16s.86 1.44.83 2.23c-.04.79.18.97-.57 1.58s-.86.43-2.12 1.11s-2.15 1.58-2.84 1.18s-.83-1.08-.83-1.08s-1.83-2.19-2.33-2.59c-.5-.39-1.8-.68-1.94-.36s-.11 1.76.04 2.41c.14.65.36 1.69.36 2.05s1.15 1.22 1.8 1.58s1.22.25 1.62.86c.39.61 1.04 1.9 1.36 2.73s1.4 2.12 1.4 2.12s2.37 2.15 2.59 2.69s1.26 1.01 1.01 1.83c-.25.83-.61 1.44-1.62 1.36c-1.01-.07-2.59-1.08-3.09-1.36c-.5-.29-1.72-.79-1.72-.79s-2.91-2.98-3.27-3.41s-2.19-1.8-2.51-2.37s-1.9-1.9-2.15-2.33s.04-1.01.54-.86c.5.14 2.59 1.94 3.05 2.3c.47.36 1.9.86 1.9.86s-1.26-2.05-1.72-2.62c-.47-.57-1.47-1.44-1.72-3.27s-.39-3.48-.5-3.88s-1.01-2.62-1.29-2.98s-1.54.29-2.01-.39s-.18-3.73-.18-3.73s-2.23-4.13-2.73-4.27s-2.15-.36-2.8 0s-2.8 2.26-3.12 2.55s-2.26 1.94-2.66 2.12c-.39.18-.97.47-.97.47s-.47 2.37-.65 2.62s-.32 2.08-.57 2.73s-.61 1.83-1.44 1.8c-.83-.04-.75-.61-1.01-2.33c-.25-1.72-1.08-3.99-1.26-5.78c-.18-1.8-.47-6.75-.61-7.04s-1.04.07-1.08-.79s.41-3.9.04-4.74c-.47-1.07-2.02-2.02-2.02-2.02" />
                    <radialGradient id="notoGlobeShowingAsiaAustralia1" cx="21.813" cy="33.578" r="43.504" gradientTransform="matrix(.9605 .2782 -.1679 .5797 6.5 8.044)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#e3dda6" />
                        <stop offset="1" stop-color="#e3dda6" stop-opacity="0" />
                    </radialGradient>
                    <path fill="url(#notoGlobeShowingAsiaAustralia1)" d="M5.54 46.98C11.5 26.73 28.47 7.24 56.48 4.75c0 0 3.67 7.8 4 8.1c1.93 1.75 9.21 4.1 8.66 5.74s-.33 2.9 1.15 3.07c1.48.16 1.31-.66 2.13-.44s1.04 2.24 1.37 2.96c.33.71.93 1.48.99 2.9c.05 1.42-.6 3.78-1.31 4.6s-1.09 3.01-2.13 3.61s-2.35.27-3.28.6s-.6 1.64-1.48 2.35s-1.75.99-1.75.99s2.08 2.13 2.03 3.67c-.05 1.53.05 2.52-1.81 3.34s-1.53-.27-1.48-1.75s-.05-2.24-.05-2.24s-1.26-.38-1.53-.66c-.27-.27-.38-.66-.38-.66s-1.64-.33-1.97-.38s-.88.16-1.15-.38c-.27-.55.49-1.42.11-1.64s-2.57 1.31-3.01 2.03c-.44.71.38 1.37.71 1.75s1.37 0 1.42.49s-.22 1.53-.55 1.86s-.82.88-.77 1.26s1.92 1.81 2.13 2.3s1.09.38 1.15 1.81c.05 1.42-.38 2.41-.99 3.12c-.6.71-1.26 1.42-1.42 1.53s-1.26 1.97-2.08 2.63s-2.63 2.13-4 2.57s-3.74.19-4.88.98s-.97 2.15-1.76 2.8s-1.26.86-1.8.18s-.36-1.44-.04-1.72c.32-.29.93-.61.29-1.04c-.65-.43-1.15 0-1.83.47s-1.69 1.01-1.33 2.08c.36 1.08 1.97 2.37 2.51 3.16s.86 1.44.83 2.23c-.04.79.18.97-.57 1.58s-.86.43-2.12 1.11s-2.15 1.58-2.84 1.18s-.83-1.08-.83-1.08s-1.83-2.19-2.33-2.59c-.5-.39-1.8-.68-1.94-.36s-.11 1.76.04 2.41c.14.65.36 1.69.36 2.05s1.15 1.22 1.8 1.58s1.22.25 1.62.86c.39.61 1.04 1.9 1.36 2.73s1.4 2.12 1.4 2.12s2.37 2.15 2.59 2.69s1.26 1.01 1.01 1.83c-.25.83-.61 1.44-1.62 1.36c-1.01-.07-2.59-1.08-3.09-1.36c-.5-.29-1.72-.79-1.72-.79s-2.91-2.98-3.27-3.41s-2.19-1.8-2.51-2.37s-1.9-1.9-2.15-2.33s.04-1.01.54-.86c.5.14 2.59 1.94 3.05 2.3c.47.36 1.9.86 1.9.86s-1.26-2.05-1.72-2.62c-.47-.57-1.47-1.44-1.72-3.27s-.39-3.48-.5-3.88s-1.01-2.62-1.29-2.98s-1.54.29-2.01-.39s-.18-3.73-.18-3.73s-2.23-4.13-2.73-4.27s-2.15-.36-2.8 0s-2.8 2.26-3.12 2.55s-2.26 1.94-2.66 2.12c-.39.18-.97.47-.97.47s-.47 2.37-.65 2.62s-.32 2.08-.57 2.73s-.61 1.83-1.44 1.8c-.83-.04-.75-.61-1.01-2.33c-.25-1.72-1.08-3.99-1.26-5.78c-.18-1.8-.47-6.75-.61-7.04s-1.04.07-1.08-.79s.41-3.9.04-4.74c-.49-1.07-2.04-2.02-2.04-2.02" />
                    <path fill="#159ff7" d="M50.05 20c-.64-.12-1.12 1.2-2.14 1.92c-1.03.72-2.1.8-2.14 1.29s.98 2.19 1.87 2.23s2.22-.73 2.9-1.47c.94-1.02 1.16-3.65-.49-3.97" />
                    <path fill="#7add8a" d="M75.03 21.99c-.25.09-.53.61-.55.98c-.02.69 1.26 2.55 1.31 2.97s.23 2.21.29 2.88c.07.81.14 1.49.5 1.55c.59.1 1.36-1.05 1.52-1.62c.17-.57.52-2.74.36-3.19c-.17-.45-.36-1.13-.98-1.81c-.74-.8-1.92-1.95-2.45-1.76m2.1 9.52c-.54.14-.59.95-.74 2.43c-.14 1.47.02 3.83.02 4.52s-.07 1.17-.07 1.17s-.57 1.64-.62 1.88s-1.33 1.38-1.74 1.78c-.4.4-1.52 1.33-1.52 1.33s-1.47-.24-2.12-.05c-2.43.71-2.55 1.93-2.55 1.93s-.69.54-.78 1.12c-.17 1 .83 1.83 1.78 1.71c.98-.12 2.21-.93 2.93-1.07c.71-.14 1.93-.5 2.9-1.47s2.12-2.59 2.43-2.81s1.19-.48 1.31-2.12s.55-5.38.48-5.61c-.07-.24 1.5-1 1.55-1.38s.36-1.5 0-1.57s-1.41-.24-1.81-.45c-.88-.48-.88-1.48-1.45-1.34M55.22 62.15c-.24.04-.21 1.64-.19 2.5c0 .18-.43.71.12 2.09c.43 1.08 1.28 1.74 1.28 1.74s-.31 3.21.52 4.26c.25.32 1.5 0 1.88.33s.79.73 1.28.9c.48.17 1.93.19 2.14-.19s-.45-1.4-.48-1.62c-.02-.21.48-.74.31-1.31s-2.85-4.09-3.33-4.23s-.76.19-1.28-.4c-.36-.4-.67-1.09-.62-2.14c.06-1.05-.42-2.15-1.63-1.93m-4.33 6.92c-.51.52-1.12 2.83-1.26 3.14s-1.64 1.76-2.24 2.16c-.56.38-1.86 1.67-2 2.02c-.14.36-1.33-.05-2 .05c-.57.08-1.62 1-1.78 1.4c-.17.4.17 1.12.57 1.83s1.28 1.45 1.57 1.76s1.17 1.01 1.43 1.17c.55.33 1.86-.33 2.81-.07s1.81.73 2.09.59c.83-.4 1.4-2.31 1.93-3.62c.76-1.91.88-2.33.88-2.33s.59-.43.9-1.14s.05-1.76.29-3.28s.51-2.09.69-2.9c.17-.74.19-1.33-.21-1.52s-2.53-.43-3.67.74M54 82.8c-.12-.19-.64-.9-.48-2.43c.17-1.52.67-2.5.71-2.69c.05-.19 1.88-1.43 2.55-1.43s1.14.31 1.21.43s.29.33.64.26c.36-.07.64-.74.57-.98s.07-.67.38-.69s.36.64.33 1.26c-.02.62-.1.81-.62 1.05s-2.07.57-2.47 1.14s-.14 1.88-.14 2.09s.93.71 1 1.24c.08.58-.17 1.03-1.95 1.09c-1.27.06-1.73-.34-1.73-.34m8.64-5.57s-1.09.4-1.28.55c-.19.14-.15.68.05.88c.29.29 1.5.02 2.12.1c.54.06 1.09.19 1.76.19c.59 0 .88-.93.69-1.19s-1.21-2.16-1-2.52s.57-.98.55-1.26c-.04-.48-1.28-.4-1.67-.19c-.38.21-.78 1.09-1.07 1.52c-.29.42-.15 1.92-.15 1.92m-18.72 7.92c-.17.08-.81 1.21-.48 1.67c.33.45.69.4 3.71.45s3.79-.08 3.97-.17c.24-.12 2.43-.19 3.38-.81s2.26-.88 2.66-.9s1.19.02 1.45-.17s1.12-.5.93-1.17s-.69 0-3.26.12c-2.17.1-6.18 1.03-6.78 1.05c-.78.03-5.27-.21-5.58-.07m18.01-2.85c-.88.78-1.38 1.24-1 1.71c.28.35 1.19-.29 1.74-.76c.55-.48 1.63-1.1 1.17-1.64c-.44-.5-1.26.1-1.91.69m5.54-7.76c-.11.16.05.98.12 1.19s1.05.55 1.62 1.21c.57.67.57 1.36.74 1.47c.17.12 2.71.02 3.24-.07s1.4-.14 2.5-.17c1.09-.02 2.7.06 2.97.12c.4.1.9.36 1.05.78c.09.28.22.8-.02 1.07s-.71.21-.76.69s-.05.9.62.86c.67-.05 2.81.07 3.33.05s1.67.48 2.24.19s2.12-.67 2.14-1.17s-.38-.62-.17-1.12c.25-.59.83-.48 1.45-.17s2.35 1.67 2.83 1.71s1.59-.21 1.64-.62c.05-.4-.5-.76-.83-.76s-.95-.19-1.14-.33s-1.64-2.02-1.88-2.28s-.12-1.28-.19-1.45s-1.31-.24-1.5-.43s-2.59-2.14-3.47-2.4s-7.61.05-7.95.21c-.33.17-2.19 3.07-2.9 2.97S72.6 74 71.7 73.52s-3.97.64-4.23 1.02m13.47 39.88c-.27.07-1.29-.22-1.58.11c-.29.32-.54 1.29-.47 1.76s.58 1.4 1.33 1.47c1.05.1 2.59-1.55 2.55-2.3c-.03-.75-.97-1.26-1.83-1.04m12.29-1.22c-.54.23-.97-1.47-1.62-1.44c-.47.03-1.89 1.17-3.09 2.01c-1.24.87-1.98 1.11-2.19 2.01c-.06.25.11.97 1.26 1.11s5.32-2.27 6.11-2.8s3.74-2.37 3.85-3.06c.11-.68-.86-2.37-.93-2.84s-.4-1.65-.79-1.62c-.4.04-.7.47-.61 1.44c.04.48-.03 1.16-.05 1.35c-.09.67-.36.78-.62.93c-.33.19-.77.31-.98.96c-.29.83.35 1.66-.34 1.95M77.52 87.47c-.05.71.97 1.6 1.37 1.97c.71.66 1.7 1.48 2.69 1.53s1.97-.38 2.19-.88c.22-.49 1.48-3.01 1.48-3.67s.44-2.3.49-2.74s.38-.6.93-.6s.71.33 1.04.93s.66 1.64 1.04 2.3s1.15 2.03 1.15 2.03s-.16 1.75 0 2.63s2.52 3.51 2.52 4.33s-.22 1.37.16 1.92s1.21.88 1.32 1.21s.44 1.64.27 2.36c-.16.71-.71 2.74-1.97 4s-3.18 2.79-3.18 2.79s-2.05 2.81-2.93 3.52s-1.57 1.22-2 1.41c-.35.15-1.42 1.15-4.27 1.04s-3.56-1.21-4.06-1.59c-.49-.38-1.59-.3-1.86-.71c-.44-.66 0-1.1-.11-1.81c-.06-.36-.49-1.26-1.92-1.48s-5.43.27-6.41.55c-.99.27-1.83 1.34-2.74 1.21c-1.15-.16-2.3.44-4.11.33c-1.86-.11-3.12-1.26-2.52-1.75c.27-.22.77-.66.49-1.37c-.27-.71-2.36-4.82-2.96-6.08s-1.37-2.62-1.32-3.73c.16-3.29 1.59-3.18 1.92-3.34s.71.05 1.26-.27c.55-.33 2.74-1.15 3.07-1.64s.38-1.81.77-2.14c.38-.33 3.84-3.34 4.55-3.78s1.37-.27 1.59.16s1.04.88 1.81.71c1.61-.34 1.21-2.25 1.97-2.74c.77-.49 3.4-.99 5.59-.71s3.23.27 3.51 1.42s-.82 2.68-.82 2.68" />
                    <radialGradient id="notoGlobeShowingAsiaAustralia2" cx="64.536" cy="88.962" r="19.144" fx="53.958" fy="95.795" gradientTransform="matrix(.068 .9977 -1.4592 .0994 189.96 15.728)" gradientUnits="userSpaceOnUse">
                        <stop offset=".611" stop-color="#e3dda6" />
                        <stop offset=".966" stop-color="#e3dda6" stop-opacity="0.087" />
                        <stop offset="1" stop-color="#e3dda6" stop-opacity="0" />
                    </radialGradient>
                    <path fill="url(#notoGlobeShowingAsiaAustralia2)" d="M87.13 105.61s6.88-4.11 7.05-4.83c.16-.71-.16-2.03-.27-2.36s-.93-.66-1.32-1.21c-.38-.55-.16-1.1-.16-1.92s-2.36-3.45-2.52-4.33s0-2.63 0-2.63s-.77-1.37-1.15-2.03s-.71-1.7-1.04-2.3s-.49-.93-1.04-.93s-.88.16-.93.6s-.49 2.08-.49 2.74s-1.26 3.18-1.48 3.67s-1.21.93-2.19.88c-.99-.05-1.97-.88-2.69-1.53c-.4-.37-1.42-1.26-1.37-1.97c0 0 1.1-1.53.82-2.69s-1.32-1.15-3.51-1.42s-4.82.22-5.59.71s-.37 2.4-1.97 2.74c-.77.16-1.59-.27-1.81-.71s-.88-.6-1.59-.16s-4.17 3.45-4.55 3.78s-.44 1.64-.77 2.14s-2.52 1.32-3.07 1.64c-.55.33-.93.11-1.26.27s-1.75.05-1.92 3.34c-.06 1.11.71 2.47 1.32 3.73c.6 1.26 2.69 5.37 2.96 6.08s-.22 1.15-.49 1.37c-.6.49.66 1.64 2.52 1.75c1.81.11 2.96-.49 4.11-.33c.91.13 1.75-.93 2.74-1.21c.99-.27 4.99-.77 6.41-.55s1.86 1.12 1.92 1.48c.11.71 6.77-1.16 6.77-1.16z" />
                </svg>
            </button>
            <Link href="/room">
                <svg xmlns="http://www.w3.org/2000/svg" class="drop-shadow" width="2.5em" height="2.5em" viewBox="0 0 64 64">
                    <path fill="#89664c" d="M3 29v32h58V29C61-10 3-9.4 3 29" />
                    <path fill="#594640" d="M7.2 31.2V61h49.5V31.2C56.8-5 7.2-4.5 7.2 31.2" />
                    <path fill="#a37d64" d="M8 31.7V61h48V31.7c0-35.8-48-35.2-48 0" />
                    <path fill="#94989b" d="M0 61h64v3H0z" />
                    <path fill="#594640" d="M35.2 30.5h16.6c-.6-12.1-8.3-18.6-16.6-19.8zm-5.5 0V10.8c-8.3 1.2-16 7.9-16.6 19.7zm5.5 5.6h16.7V56H35.2zm-22.2 0h16.7V56H13z" />
                    <path fill="#89664c" d="M34.8 30.1h16.6c-.6-12.1-8.3-18.6-16.6-19.8zm-5.6 0V10.4c-8.3 1.2-16 7.9-16.6 19.7zm5.6 5.6h16.7v19.9H34.8zm-22.3 0h16.7v19.9H12.5z" />
                    <path fill="#ffce31" d="M47.5 28.9h7v14h-7z" />
                    <path fill="#f2b200" d="M48 29.4h6v13h-6z" />
                    <path fill="#3e4347" d="m52 41.2l-.4-2.7c.2-.2.4-.5.4-.8c0-.6-.4-1-1-1s-1 .4-1 1c0 .3.2.6.4.8l-.4 2.7z" />
                    <circle cx="51" cy="33" r="2.9" fill="#b78300" />
                    <path fill="#ffd664" d="M53.8 32.5c0 1.6-1.3 2.9-2.9 2.9S48 34.1 48 32.5s1.3-2.9 2.9-2.9s2.9 1.3 2.9 2.9" />
                </svg>
            </Link>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="drop-shadow" width="2.5em" height="2.5em" viewBox="0 0 32 32">
                    <g fill="none">
                        <circle cx="16.002" cy="26.266" r="3.661" fill="url(#f118id5)" />
                        <circle cx="16.002" cy="26.266" r="3.661" fill="url(#f118id0)" />
                        <circle cx="16.002" cy="26.266" r="3.661" fill="url(#f118id6)" />
                        <g filter="url(#f118id9)">
                            <rect width="2.408" height="4.361" x="14.796" y="2.06" fill="url(#f118id7)" rx="1.204" />
                        </g>
                        <g filter="url(#f118ida)">
                            <path fill="url(#f118id1)" d="M7.978 10.674a8 8 0 0 1 7.766-6.433h.513a8 8 0 0 1 7.765 6.433l1.86 9.316a4 4 0 0 0 .881 1.814l1.24 1.451a4 4 0 0 1 .957 2.598v1.326a.75.75 0 0 1-.75.75H3.79a.75.75 0 0 1-.75-.75v-1.326a4 4 0 0 1 .957-2.598l1.24-1.45a4 4 0 0 0 .88-1.815z" />
                        </g>
                        <path fill="url(#f118id2)" d="M7.978 10.674a8 8 0 0 1 7.766-6.433h.513a8 8 0 0 1 7.765 6.433l1.86 9.316a4 4 0 0 0 .881 1.814l1.24 1.451a4 4 0 0 1 .957 2.598v1.326a.75.75 0 0 1-.75.75H3.79a.75.75 0 0 1-.75-.75v-1.326a4 4 0 0 1 .957-2.598l1.24-1.45a4 4 0 0 0 .88-1.815z" />
                        <path fill="url(#f118id8)" d="M7.978 10.674a8 8 0 0 1 7.766-6.433h.513a8 8 0 0 1 7.765 6.433l1.86 9.316a4 4 0 0 0 .881 1.814l1.24 1.451a4 4 0 0 1 .957 2.598v1.326a.75.75 0 0 1-.75.75H3.79a.75.75 0 0 1-.75-.75v-1.326a4 4 0 0 1 .957-2.598l1.24-1.45a4 4 0 0 0 .88-1.815z" />
                        <g filter="url(#f118idb)">
                            <path fill="url(#f118id3)" d="m7.479 21.313l-1.563 2.125h21l-1.687-2.125z" />
                        </g>
                        <g filter="url(#f118idc)">
                            <path fill="url(#f118id4)" d="M16.791 9.326a2.264 2.264 0 0 1 4.464-.534l3.036 12.52h-7.5z" />
                        </g>
                        <defs>
                            <linearGradient id="f118id0" x1="15.26" x2="15.51" y1="27.156" y2="28.938" gradientUnits="userSpaceOnUse">
                                <stop offset=".186" stop-color="#e57356" />
                                <stop offset="1" stop-color="#e57356" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="f118id1" x1="18.467" x2="4.946" y1="26.093" y2="26.093" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fcb949" />
                                <stop offset="1" stop-color="#e28c37" />
                            </linearGradient>
                            <linearGradient id="f118id2" x1="18.104" x2="18.104" y1="28.188" y2="25.188" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#d7737d" />
                                <stop offset=".302" stop-color="#fca162" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="f118id3" x1="6.229" x2="26.291" y1="23.438" y2="23.438" gradientUnits="userSpaceOnUse">
                                <stop offset=".277" stop-color="#f5a43c" />
                                <stop offset="1" stop-color="#ffe154" />
                            </linearGradient>
                            <linearGradient id="f118id4" x1="25.174" x2="15.541" y1="18.572" y2="18.572" gradientUnits="userSpaceOnUse">
                                <stop offset=".118" stop-color="#ffef6d" />
                                <stop offset="1" stop-color="#ffef6d" stop-opacity="0" />
                            </linearGradient>
                            <radialGradient id="f118id5" cx="0" cy="0" r="1" gradientTransform="rotate(-126.512 16.328 10.307)scale(2.95496 4.08094)" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ffc26d" />
                                <stop offset="1" stop-color="#f68d61" />
                            </radialGradient>
                            <radialGradient id="f118id6" cx="0" cy="0" r="1" gradientTransform="matrix(-2.875 2.875 -4.74402 -4.74402 16.885 26.718)" gradientUnits="userSpaceOnUse">
                                <stop offset=".441" stop-color="#ea8059" stop-opacity="0" />
                                <stop offset="1" stop-color="#c27068" />
                            </radialGradient>
                            <radialGradient id="f118id7" cx="0" cy="0" r="1" gradientTransform="matrix(0 -2.18066 1.3125 0 16.791 4.24)" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ffe957" />
                                <stop offset="1" stop-color="#f7a630" />
                            </radialGradient>
                            <radialGradient id="f118id8" cx="0" cy="0" r="1" gradientTransform="matrix(-19.00185 12.74995 -12.23105 -18.22851 22.041 14.625)" gradientUnits="userSpaceOnUse">
                                <stop offset=".67" stop-color="#e69136" stop-opacity="0" />
                                <stop offset=".977" stop-color="#cf7d44" />
                            </radialGradient>
                            <filter id="f118id9" width="2.608" height="4.361" x="14.796" y="2.06" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dx=".2" />
                                <feGaussianBlur stdDeviation=".25" />
                                <feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic" />
                                <feColorMatrix values="0 0 0 0 0.87451 0 0 0 0 0.564706 0 0 0 0 0.341176 0 0 0 1 0" />
                                <feBlend in2="shape" result="effect1_innerShadow_18_17986" />
                            </filter>
                            <filter id="f118ida" width="30.921" height="23.688" x="-.961" y="4.241" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dx="-4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic" />
                                <feColorMatrix values="0 0 0 0 1 0 0 0 0 0.905882 0 0 0 0 0.392157 0 0 0 1 0" />
                                <feBlend in2="shape" result="effect1_innerShadow_18_17986" />
                                <feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dx="-.5" />
                                <feGaussianBlur stdDeviation=".5" />
                                <feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic" />
                                <feColorMatrix values="0 0 0 0 0.996078 0 0 0 0 0.866667 0 0 0 0 0.462745 0 0 0 1 0" />
                                <feBlend in2="effect1_innerShadow_18_17986" result="effect2_innerShadow_18_17986" />
                                <feColorMatrix in="SourceAlpha" result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dx="1" />
                                <feGaussianBlur stdDeviation="1" />
                                <feComposite in2="hardAlpha" k2="-1" k3="1" operator="arithmetic" />
                                <feColorMatrix values="0 0 0 0 0.917647 0 0 0 0 0.572549 0 0 0 0 0.32549 0 0 0 1 0" />
                                <feBlend in2="effect2_innerShadow_18_17986" result="effect3_innerShadow_18_17986" />
                            </filter>
                            <filter id="f118idb" width="25" height="6.125" x="3.916" y="19.313" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur result="effect1_foregroundBlur_18_17986" stdDeviation="1" />
                            </filter>
                            <filter id="f118idc" width="11.5" height="18.25" x="14.791" y="5.063" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur result="effect1_foregroundBlur_18_17986" stdDeviation="1" />
                            </filter>
                        </defs>
                    </g>
                </svg>
            </button>
            <div>
                <Avatar
                    :frameSrc="$page.props.assets + '/site_assets/frames/3.png'"
                    :profileSrc="$page.props.auth.user.avatar"
                    :frameBorder="15"
                    :frameSize="70"
                    :url="route('profile.user_profile')"
                    class="relative w-32 drop-shadow"
                />
            </div>
        </div>
    </div>
</template>
<script setup>
import ThemeSwitch from "@/Components/themeSwitch.vue";
import Avatar from "@/Components/Avatar.vue";
</script>
