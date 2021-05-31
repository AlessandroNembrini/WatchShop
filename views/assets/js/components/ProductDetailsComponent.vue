<template>
    <div class="d-flex justify-content-md-between justify-content-center flex-wrap">
        <!-- Atributes and Title -->
        <div class="productAttributes__content">
            <span class="watch__details__tag">Product Details</span><br>
            <div class="my-3"></div>
            <h4 class="productAttributes_title">Piaget Altiplano Ultimate 910P</h4>
            <div class="my-5"></div>
            <div v-for="row in rows" :key="row.id"  class="d-flex justify-content-around px-4">
                <!-- Atribute Rows -->
                <div v-for="item in row.items" :key="item.id" class="productAttributes__item d-flex px-lg-5 px-0">
                    <div class="productAttributes__item__inner d-flex border-bottom" >
                        <div class="d-flex py-3">
                        <div class="productAttributes__icon mr-3"  :style="{ backgroundImage: 'url(' + item.icon + ')' }">
                        </div>     
                        <div>
                            <span class="productAttributes__label">{{ item.name }}</span><br>
                            <span class="productAttributes__value">{{ item.value }}</span>                                   
                        </div>   
                        </div>                               
                    </div>  
                </div>                             
            </div>                                 
        </div>
        <!-- Image (Item 2) -->
        <div class="mt-0 mt-5 mt-md-0">
            <div class="productAttributes__image" v-bind:style="{ backgroundImage: 'url(' + img + ')' }"></div>
        </div>
    </div>
</template>

<script>
import store from '../store.js'

export default {
    data: () => {
        return{
            img: "/design/images/Product_Details_Main.png",
            icon: "/design/icons3/Brand.png",

            rows: [
                {
                    id: 1,
                    items: [
                        {
                            id: 1,
                            name: "Brand",
                            value: "Piaget", // values are later dynamic loaded from db
                            icon: "/design/icons3/Brand.png"
                        },
                        {
                            id: 2,
                            name: "Warranty",
                            value: "2 Years",
                            icon: "/design/icons3/Warranty.png"
                        }
                    ]
                },
                 {
                    id: 2,
                    items: [
                        {
                            id: 1,
                            name: "Collection",
                            value: "60Th Anniversary", // values are later dynamic loaded from db
                            icon: "/design/icons3/Collection.png"
                        },
                        {
                            id: 2,
                            name: "Gender",
                            value: "For men's",
                            icon: "/design/icons3/Gender.png"
                        }
                    ]
                },
                {
                    id: 3,
                    items: [
                        {
                            id: 1,
                            name: "Movement",
                            value: "Autamatic movement", // values are later dynamic loaded from db
                            icon: "/design/icons3/Movement.png"
                        },
                        {
                            id: 2,
                            name: "Origin",
                            value: "Switzerland",
                            icon: "/design/icons3/Origin.png"
                        }
                    ]
                },
            ]
           
            
        }
    },

    computed: {
        store(){
            return store;
        }
    }
}
</script>