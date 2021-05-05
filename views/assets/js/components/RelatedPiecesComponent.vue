<template>
<div class="container">
    <div class="row">
            <div class="d-flex flex-column col-lg-4 col-sm-12 justify-content-center">
                <div>
                    <span class="watch__details__tag">Altiplano Collection</span>
                    <h4 class="mySwiper__title">Related Pieces</h4>
                    <a class="mySwiper__roundedBtn" href="#">
                        <i class="mySwiper__roundedBtn__icon fas fa-long-arrow-alt-right"></i>
                    </a>
                    <!-- <div class="swiper-pagination text-white pb-3"></div>    -->
                </div>  
                
            </div>
            <div class="col-lg-8 col-sm-12">
                <watch-slider-component :items="sliderItems"></watch-slider-component>
            </div>
    </div>
</div>
</template>

<script>
import WatchSliderComponent from './WatchSliderComponent.vue';

export default {
data: () => {
    return{
        sliderItems: [
            {
                id: 1,
                image: "/design/images/Related_Piece_1.png",
                label: "",
                tag: "",
                serialnumber: "",
                price: ""
            },
            {
                id: 2,
                image: "/design/images/Related_Piece_2.png",
                label: "",
                tag: "",
                serialnumber: "",
                price: ""
            },
            {
                id: 3,
                image: "/design/images/Related_Piece_3.png",
                label: "",
                tag: "",
                serialnumber: "",
                price: ""
            },
            {
                id: 4,
                image: "/design/images/Related_Piece_4.png",
                label: "",
                tag: "",
                serialnumber: "",
                price: ""
            },
        ]
    }
},

    components: {
        WatchSliderComponent
    }

}
</script>

<style>

</style>