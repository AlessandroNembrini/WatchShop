<template>
    <div class="row flex-wrap-reverse">
        <!-- Preview Thumbs -->
        <!-- <h2>{{response}}</h2> -->
        <div class="d-flex flex-lg-column flex-sm-row col-lg-3 col-sm-12 justify-content-center align-items-center">
            <div v-for="image in images" :key="image.id"
             @click="changePreviewImg(image.id)" 
             class="watch__preview__thumbnail" 
             :style="{ backgroundImage: 'url(' + image.thumbnail_image + ')' }"></div>
        </div>
        <!-- Preview -->    
        <div class="col-lg-9 col-sm-12">
             <div class="watch__preview" 
             :style="{ backgroundImage: 'url(' + previewImage + ')' }" id="d1"></div>
        </div>
    </div>
</template>

<script>

export default {

    props: ['images', 'previewImage'],

   

    methods: {
        changePreviewImg(imgId){
            //get preview image for thumbnail
            var thumbnailPreviewImg = this.images
            .find(x => x.id === imgId).preview_image;
            //change bg-img
            document.getElementById('d1').style.backgroundImage="url("+ thumbnailPreviewImg +")";
        }
    },

}
</script>