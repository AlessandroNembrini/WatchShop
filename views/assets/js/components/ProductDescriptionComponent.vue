<template>
    <div class="d-flex flex-wrap flex-lg-nowrap justify-content-center w-100">
        <!-- Image -->
        <div style="position: relative">
            <div class="productDescription__img1" :style="{ backgroundImage: 'url(' + img + ')' }"></div>
            <div class="productDescription__img2" :style="{ backgroundImage: 'url(' + img2 + ')' }"></div>
        </div>
        <!-- Text -->
        <div class="d-flex justify-content-center flex-wrap p-lg-5 p-sm-0 productDescription__textbox">
            <div>
                <div>
                    <span class="watch__details__tag">Product Description</span>
                    <div class="my-3"></div>
                    <h4 class="productAttributes_title">The world's thinnest Automatic Watch</h4>
                </div>
                <div class="mt-5 pl-5">
                    <p class="productDescription__text1">The thinnest hand-wound mechanical watches 
                    in the world. Manufacture Piaget 910P ultra-thin, 
                    hand-wound mechanical movement. </p>

                    <p class="productDescription__text2">The Altiplano 38 mm watch is a unique concept, and resolutely proud of its status as one of the thinnest and most elegant mechanical
                    timepieces in the world. Blending hand-wound calibre and external features into a single concept, the watch has been designed as
                    a whole unit and is only 3.65 mm thick. </p>

                    <p class="productDescription__text2">The culmination of over half a century of virtuoso craftsmanship 
                    in the field of ultra-thin watchmaking, a domain in which Piaget reigns supreme, this luxury watch symbolises all the excellence.</p>
                </div> 
            </div>          
        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return{
            img: "/design/images/Product_Description_1.png",
            img2: "/design/images/Product_Description_2.png",
        }
    }
}
</script>