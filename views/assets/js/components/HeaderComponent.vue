<template>
    <div class="container">
        <div class="row flex-wrap-reverse pt-5">
            <div class="col-lg-6 col-sm-12">         
                <watch-preview-component :images="images" :previewImage="previewImg"></watch-preview-component>
             </div>
            <div class="col-lg-6 col-sm-12 p-5">
                <watch-details-component :watch="watch"></watch-details-component>
            </div>
        </div>
        <div class="myOptions__spacer">
            <options-component></options-component>    
        </div> 
    </div>
</template>

<script>
import axios from 'axios';
import WatchDetailsComponent from './WatchDetailsComponent.vue';
import WatchPreviewComponent from './WatchPreviewComponent.vue';
import OptionsComponent from './OptionsComponent.vue';
    
export default {
      data: () => {
        return{
            watch: {},  
            previewImg: {},
            images: [] ,
        }
    },

    components: {
        WatchDetailsComponent,
        WatchPreviewComponent,
        OptionsComponent
    },

    mounted(){
      let watchId = location.href.substring(location.href.lastIndexOf('/') + 1);

        // this end point get all data needed for this Component
        axios.get(`${this.$api}/header/${watchId}`)
        .then(res => { //await reult
            //watch model with header
            this.watch = res.data; 
            //get image sources from thumbanil and preview for PreviewComponent
            this.images = res.data.header.images;
            // set first image to preveiw imag, later we can add a flag isPreview
            this.previewImg = res.data.header.images[0].preview_image; 
        })
    },

    

}

</script>
