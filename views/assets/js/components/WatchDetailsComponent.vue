<template>
  <div class="watch__details">
      <span class="watch__details__tag">Piaget Watches</span>
      <div class="p-2"></div>
      <h2 class="watch__details__title">Piaget Altiplano<br/> Ultimate 910P</h2>
      <div class="p-1"></div>
      <div class="pl-5 watch__details">
        <span class="watch__details__price">CHF 35'700.00</span>
        <div class="p-2"></div>
        <span class="watch__details__serialnumber">Watch G0A39111</span>
      
       <div class="p-1"></div>
      <p class="watch__details_description">The thinnest hand-wound mechanical watches<br> in the world.Manufacture Piaget 910P ultra-thin,<br> hand-wound mechanical movement</p>
      <button-component class="mt-2" :href="a" :text="b"></button-component>
    </div>

    
  </div>
</template>

<script>
import ButtonComponent from "./ButtonComponent.vue";

export default {
    components: {
      ButtonComponent
    },
    data: () => {
      return{
        a: "#",
        b: "Add to shopping bag"
      }
    }
}
</script>