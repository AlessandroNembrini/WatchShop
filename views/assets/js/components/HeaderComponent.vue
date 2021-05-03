<template>
    <div class="container">
        <div class="row flex-wrap-reverse pt-5">
            <div class="col-lg-6 col-sm-12 border">          
                <watch-preview-component></watch-preview-component>
             </div>
            <div class="col-lg-6 col-sm-12 p-5 border">
                <watch-details-component></watch-details-component>
            </div>
        </div>
        <div class="myOptions__spacer">
            <options-component></options-component>    
        </div> 
    </div>
</template>

<script>
import WatchDetailsComponent from './WatchDetailsComponent.vue';
import WatchPreviewComponent from './WatchPreviewComponent.vue';
import OptionsComponent from './OptionsComponent.vue';
    
export default {
    components: {
        WatchDetailsComponent,
        WatchPreviewComponent,
        OptionsComponent
    }
}
</script>
