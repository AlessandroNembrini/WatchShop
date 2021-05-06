
window.Vue = require('vue');

import NavBar from './components/NavBar.vue';
import HeaderComponent from './components/HeaderComponent.vue';
import ProductDetailsComponent from './components/ProductDetailsComponent.vue';
import ProductDescriptionComponent from './components/ProductDescriptionComponent.vue';
import ProductSpecificationsComponent from './components/ProductSpecificationsComponent.vue';
import RelatedPiecesComponent from './components/RelatedPiecesComponent.vue';
import FooterComponent from './components/FooterComponent.vue';



const app = new Vue({
    el: '#app',
    components:{
        NavBar,
        HeaderComponent,
        ProductDetailsComponent,
        ProductDescriptionComponent,
        ProductSpecificationsComponent,
        RelatedPiecesComponent,
        FooterComponent
    },


    data: () => {
        return {
            //response is loaded from main.php header script
            response: response, 
        }
    }
});
