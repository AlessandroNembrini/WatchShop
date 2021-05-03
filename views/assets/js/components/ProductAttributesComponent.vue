<template>
 <div>
    <span class="watch__details__tag">Product Details</span>
    <h3>Piaget Altiplano Ultimate 910P</h3>
    <div class="productAttributes d-inline-flex justify-content-between">
        <div class="d-flex">
            <div class="border">           
                <div class="d-flex border flex-column">
                    <div class="d-flex border">
                        <div><img src="/design/icons2/Brand.png" height="50" width="50"></div>
                        <div>
                            <span>Brand</span>
                            <span>Piaget</span>
                        </div>
                    </div>

                     <div class="d-flex border">
                        <div><img src="/design/icons2/Brand.png" height="50" width="50"></div>
                        <div>
                            <span>Brand</span>
                            <span>Piaget</span>
                        </div>
                    </div>

                     <div class="d-flex border">
                        <div><img src="/design/icons2/Brand.png" height="50" width="50"></div>
                        <div>
                            <span>Brand</span>
                            <span>Piaget</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="border">           
                <div class="d-flex border flex-column">
                   <div class="d-flex border">
                        <div><img src="/design/icons2/Brand.png" height="50" width="50"></div>
                        <div>
                            <span>Brand</span><br>
                            <span>Piaget</span>
                        </div>
                    </div>
                     <div class="d-flex border">
                        <div><img src="/design/icons2/Brand.png" height="50" width="50"></div>
                        <div>
                            <span>Brand</span>
                            <span>Piaget</span>
                        </div>
                    </div>
                     <div class="d-flex border">
                        <div><img src="/design/icons2/Brand.png" height="50" width="50"></div>
                        <div>
                            <span>Brand</span>
                            <span>Piaget</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</template>

<script>
import store from '../store.js'

export default {
    data: () => {
        return{
            img: "/design/images/Product_Details_Main.png"
        }
    },

    computed: {
        store(){
            return store;
        }
    }
}
</script>