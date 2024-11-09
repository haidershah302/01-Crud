<template>
    <div class="drawer-side">
        <label for="sidebar" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu glass min-h-full">
            <!-- Sidebar content here -->
            <li>
                <Link :href="route('admin')" class="logo-link">
                    <img :src="$page.props.assets + '/site_assets/brand/logo.png'"
                         class="drop-shadow-xl"
                         width="60" height="auto"
                         alt="">
                    <h1>Fly-live</h1>
                </Link>
            </li>
            <ul class="menu gap-5 mt-8">
                <li v-for="menu in menuItems" class="glass rounded-xl">
                    <details>
                        <summary class="font-mono">{{ menu.title }}</summary>
                        <ul>
                            <li v-for="child in menu.child">
                                <Link :href="child.href" class="menu-item">
                                    {{ child.title }}
                                </Link>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </ul>
    </div>
</template>
<style scoped>
.logo-link {
    @apply p-0 bg-cover bg-center bg-no-repeat
    shadow-xl shadow-primary/15 py-1 px-4;
    background-image: url('/storage/site_assets/backgrounds/14.webp');
}
.logo-link > h1 {
    @apply text-2xl font-mono font-bold text-white;
    text-shadow:
        0 0 2px #712bdc,
        0 0 4px #a06af3,
        0 0 6px #b78ff8,
        0 0 42px #805cb4;
}
.logo-link > * {
    @apply transition-all duration-300;
}
.logo-link:hover > * {
    @apply scale-125 ml-6;
}
.logo-link:hover {
    @apply scale-90;
}
</style>
<script setup>
const menuItems = [
    {
        title: 'Users',
        child: [
            {
                title: 'All users',
                href: route('admin'),
            },
            {
                title: 'Roles and Abilities',
                href: route('admin'),
            },
        ]
    },
    {
        title: 'Rooms',
        child: [
            {
                title: 'Index',
                href: route('admin.room.index'),
            },
            {
                title: 'Theme',
                href: route('admin.room.theme.index'),
            },
        ]
    },
    {
        title: 'Gifts',
        child: [
            {
                title: 'View All Gifts',
                href: route('admin'),
            },
            {
                title: 'Add New Gift',
                href: route('admin'),
            }
        ]
    }
];
</script>
