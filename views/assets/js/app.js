
window.Vue = require('vue');

import NavBar from './components/NavBar.vue';
import HeaderComponent from './components/HeaderComponent.vue';
import ProductDetailsComponent from './components/ProductDetailsComponent.vue';
import ProductDescriptionComponent from './components/ProductDescriptionComponent.vue';
import ProductSpecificationsComponent from './components/ProductSpecificationsComponent.vue';
import RelatedPiecesComponent from './components/RelatedPiecesComponent.vue';
import FooterComponent from './components/FooterComponent.vue';
import AjaxLoaderComponent from './components/AjaxLoaderComponent.vue';
import axios from 'axios';

//api base url
//Vue.prototype.$api = 'https://thebrand-fullstack.ch/web/api';
Vue.prototype.$api = 'http://localhost:8080/api'

const app = new Vue({
    el: '#app',
    components:{
        NavBar,
        HeaderComponent,
        ProductDetailsComponent,
        ProductDescriptionComponent,
        ProductSpecificationsComponent,
        RelatedPiecesComponent,
        FooterComponent,
        AjaxLoaderComponent,
    },

    created() {
        //Global Ajax Loader
        axios.interceptors.request.use((config) => {
            // trigger 'loading=true' event here 
           $("#detail-loading-indicator").show();
            return config;
        }, (error) => {
            // trigger 'loading=false' event here
            $("#detail-loading-indicator").hide();
            return Promise.reject(error);
        });

        axios.interceptors.response.use((response) => {
            // trigger 'loading=false' event here
            setTimeout(function(){
                $("#detail-loading-indicator").hide();
           }, 800);//wait 2 seconds
            
            return response;
        }, (error) => {
            // trigger 'loading=false' event here
            $("#detail-loading-indicator").hide();
            return Promise.reject(error);
        });
    }
});
