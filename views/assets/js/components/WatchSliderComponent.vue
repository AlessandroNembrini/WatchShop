<template>
    <!-- Swiper -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" v-for="item in items" :key="item.id">
            <div>
                <div class="mySwiper__images__image" v-bind:style="{ backgroundImage: 'url(' + item.image + ')' }"></div>
                <div class="mySwiper__images">
                    <span class="mySwiper__description__tag">Piaget</span><br>
                    <span class="mySwiper__description__name">Altiplano</span><br>
                    <span class="mySwiper__description__serialnumber">Watch G0542</span><br>
                    <span class="mySwiper__description__price">CHF 24.900</span>
                </div>
            </div>  
        </div>
      </div>
    </div>
</template>

<script>

export default {
    props: ["items"],
}
</script>