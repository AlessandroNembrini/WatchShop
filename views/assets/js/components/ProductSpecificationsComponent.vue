<template>
    <div class="d-flex justify-content-md-between justify-content-center flex-wrap">
        <!-- Atributes and Title -->
        <div class="productAttributes__content">
            <div></div>
            <span class="watch__details__tag">Product Specifications</span><br>
            <div class="my-3"></div>
            <h4 class="productAttributes_title">Product Characteristics</h4>
            <div class="my-5"></div>
            <div v-for="row in rows" :key="row.id"  class="d-flex justify-content-around px-4">
                <!-- Atribute Rows -->
                <div v-for="item in row.items" :key="item.id" class="productAttributes__item__inner d-flex px-lg-5 px-0">
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
        <div class="mt-0 mt-5 mt-md-0 productAttributes__specifications">
            <div class="productAttributes__specifications__image1" v-bind:style="{ backgroundImage: 'url(' + img + ')' }"></div>
            <a href=""></a><div class="productAttributes__specifications__image2" v-bind:style="{ backgroundImage: 'url(' + img2 + ')' }"></div>
        </div>
    </div>
</template>

<script>
import store from '../store.js'

export default {
    data: () => {
        return{
            img: "/design/images/Product_Spec_1.png",
            img2: "/design/images/Product_Spec_2.png",
            rows: [
                {
                    id: 1,
                    items: [
                        {
                            id: 1,
                            name: "Metal",
                            value: "Rose Gold / Silver", // values are later dynamic loaded from db
                            icon: "/design/icons3/Metal.png"
                        },
                        {
                            id: 2,
                            name: "Case Shape",
                            value: "Round",
                            icon: "/design/icons3/CaseShape.png"
                        }
                    ]
                },
                 {
                    id: 2,
                    items: [
                         {
                            id: 1,
                            name: "Metal Weight",
                            value: "32.14",
                            icon: "/design/icons3/MetalWeight.png"
                        },
                        {
                            id: 2,
                            name: "Case Diameter",
                            value: "38 mm",
                            icon: "/design/icons3/CaseDiameter.png"
                        }
                    ]
                },
                {
                    id: 3,
                    items: [
                        {
                            id: 1,
                            name: "Strape Type",
                            value: "Alligator", // values are later dynamic loaded from db
                            icon: "/design/icons3/StrapeType.png"
                        },
                        {
                            id: 2,
                            name: "Case Thickness",
                            value: "3.45 mm",
                            icon: "/design/icons3/CaseThickness.png"
                        }
                    ]
                },
                {
                    id: 4,
                    items: [
                        {
                            id: 1,
                            name: "Strap Color",
                            value: "Black / Brown", // values are later dynamic loaded from db
                            icon: "/design/icons3/StrapColor.png"
                        },
                        {
                            id: 2,
                            name: "Water Resistance",
                            value: "30 M / 02 ATM",
                            icon: "/design/icons3/WaterResistence.png"
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
