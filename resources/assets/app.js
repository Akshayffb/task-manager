import { createApp } from 'vue';
import Alpine from 'alpinejs';
import '@tabler/core/dist/js/tabler.min.js';

import Count from './js/components/Count.vue';

window.Alpine = Alpine;

Alpine.start();

const app = createApp({});

// register vue component here
app.component('count', Count);
app.mount('#vue-app');
