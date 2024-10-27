import './bootstrap';
import '../css/app.css';

import {createInertiaApp, Head, Link} from '@inertiajs/vue3'
import { createApp, h } from 'vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';


createInertiaApp({
    title: (title) => `${import.meta.env.VITE_APP_NAME} ${title}`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('Head', Head)
            .component('Link', Link)
            .mount(el)
    },
    progress: {color: '#60a0f6'},
})


