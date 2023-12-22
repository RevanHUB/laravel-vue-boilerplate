import './bootstrap';
import { createApp } from 'vue';


import Welcome from './components/Welcome.vue';
import Index from './components/Index.vue';

console.log("%c Vue is loading ....", "color: red, backound: #f3f3f3; padding:10px;");

const app = createApp({});

app
    .component('Index', Index)
    .component('Welcome', Welcome);

app.mount('#app');
console.log("%c Vue is loaded", "color: red, backound: #f3f3f3; padding:10px;");