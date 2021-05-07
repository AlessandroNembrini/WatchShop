<template>
  <div class="watch__details">
      <span class="watch__details__tag">{{ watch.header.tag }}</span>
      <div class="p-2"></div>
      <h2 class="watch__details__title">{{ `${watch.brand} ${watch.model} ${watch.name}` }}</h2>
      <div class="p-1"></div>
      <div class="pl-5 watch__details">
        <span class="watch__details__price">CHF {{ watch.price }}</span>
        <div class="p-2"></div> 
        <span class="watch__details__serialnumber">{{ watch.serial_number}}</span>
      
       <div class="p-1"></div>
      <p class="watch__details_description">{{ watch.header.description }}</p>
      <button-component class="mt-2" :href="buttonLink" :text="buttonText"></button-component>
    </div>

    
  </div>
</template>

<script>
import ButtonComponent from "./ButtonComponent.vue";

export default {

  props: ['watch'],

  components: {
    ButtonComponent
  },

    

    data: () => {
      return{
        buttonLink: "#",
        buttonText: "Add to shopping bag"
      }
    }
}
</script>