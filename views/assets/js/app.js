
window.Vue = require('vue');
require('./plugins/vue-particles');

import NavBar from './components/NavBar.vue'

const app = new Vue({
    el: '#app',
    components:{
        NavBar
    },
});
