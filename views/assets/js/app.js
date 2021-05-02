
window.Vue = require('vue');

import NavBar from './components/NavBar.vue';
import Drawer from './components/Drawer.vue';

const app = new Vue({
    el: '#app',
    components:{
        NavBar,
        Drawer
    },
});
