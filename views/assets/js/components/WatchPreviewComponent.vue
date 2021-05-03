<template>
    <div class="row flex-wrap-reverse">
        <!-- Preview Thumbs -->
        <div class="d-flex flex-lg-column flex-sm-row col-lg-3 col-sm-12 justify-content-center align-items-center">
            <img v-for="thumbnail in thumbnails" :key="thumbnail.id"
             @click="changePreviewImg(thumbnail.id)" 
             class="watch__preview__thumbnail border" 
             :src="thumbnail.source" width="70" height="70" alt="">
        </div>
        <!-- Preview -->
        <div class="col-lg-9 col-sm-12">
             <div class="watch__preview border" 
             :style="{ backgroundImage: 'url(' + previewImg.source + ')' }"></div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return{
            thumbnails: [
                {
                    id: 1,
                    source: "/design/images/Product_Thumbnail_1.png",
                    previewImg: {
                        id: 1,
                        source: "/design/images/Product_Main.png"
                    }
                },
                {
                    id: 2,
                    source: "/design/images/Product_Thumbnail_2.png",
                    previewImg: {
                        id: 2,
                        source: "/design/images/Product_Main_2.png"
                    }
                },
                {
                    id: 3,
                    source: "/design/images/Product_Thumbnail_3.png",
                    previewImg: {
                        id: 1,
                        source: "/design/images/Product_Main_3.jpg"
                    }
                }
            ],

            previewImg: {
                id: 1,
                source: "/design/images/Product_Main.png"
            }
        }
    },
    methods: {
        changePreviewImg(tId){
            var thumbnailPreviewImg = this.thumbnails.find(x => x.id === tId).previewImg;
            this.previewImg = thumbnailPreviewImg;
        }
    }
}
</script>