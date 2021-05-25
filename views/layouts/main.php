<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="m-0 p-0" lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>   
    <!-- Id = #app (von Vue Kontrolliert) -->
    <div id="app" class="page">  
    <!-- NavBar-Vue -->
    <nav-bar></nav-bar>    
     <!-- Seiteninhalt -->       
    <?= $content ?>
     <!-- Seiteninhalt END --> 
     <footer-component></footer-component>
    </div>
    <?php $this->endBody() ?>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        breakpoints: {
           // when window width is <= 220px
           220: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 320px
          320: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 3,
            spaceBetween: 40
          }
        },
        navigation: {
          nextEl: '.mySwiper__roundedBtn',
         // prevEl: '.mySwiper__roundedBtn',
        },
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        
      });

    </script>
</body>

</html>
<?php $this->endPage() ?>