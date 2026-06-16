import { createApp } from 'vue';
import Alpine from 'alpinejs';
import Count from './components/Count.vue';

window.Alpine = Alpine;

Alpine.start();

const app = createApp({});

// register vue component here
app.component('count', Count);
app.mount("#app");