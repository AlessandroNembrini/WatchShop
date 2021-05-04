
window.Vue = require('vue');

import NavBar from './components/NavBar.vue';
import HeaderComponent from './components/HeaderComponent.vue';
import ProductDetailsComponent from './components/ProductDetailsComponent.vue';


const app = new Vue({
    el: '#app',
    components:{
        NavBar,
        HeaderComponent,
        ProductDetailsComponent
    },
});
