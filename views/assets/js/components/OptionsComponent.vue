<template>
    <div class="myOptions container d-inline-flex p-0 flex-wrap-reverse">
        <!-- Toggler White -->
       <div class="myOptions__toggler d-flex justify-content-center">
        <div>
            <a href="#">
                <i style="font-size: 15px; color: #caa25c;" class="fas fa-long-arrow-alt-down pr-3">
                </i>Show product details
            </a>
        </div>       
       </div>
        <!-- Options -->
       <div class="myOptions__options d-flex flex-wrap">
           <a class="myOptions__option" href="#">
               <i class="fas fa-share-alt myOptions__icon pr-3"></i>
            Share</a>
           <a class="myOptions__option" href="#">
               <i class="far fa-heart myOptions__icon pr-3"></i>
               Wish list </a>
           <a class="myOptions__option" href="#">
               <i class="fas fa-search myOptions__icon pr-3"></i>
            Compare</a>
           <a class="myOptions__option" href="#">
               <i class="far fa-envelope myOptions__icon pr-3"></i>
            Enquire</a>
       </div>
    </div>
</template>

<script>
export default {
    
}
</script>