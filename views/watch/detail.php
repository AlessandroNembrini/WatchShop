<?php

/* @var $this yii\web\View */

$this->title = 'The Brand - Watch Details';
?>

<div class="site-index">
    <div class="body-content mx-3">
        <section class="section1">
            <header-component :mydata="response"></header-component> 
        </section>

        <!-- <div class="page-spacer1">
         <p> /*json_encode($model) /*?></p>
        </div> -->


        <section id="product-details-section" class="container p-5">
            <product-details-component></product-details-component>
        </section>

        <section class="container p-5">
           <product-description-component></product-description-component>
        </section>

        <div style="margin: 200px 0;"></div>

        <section id="product-details-section" class="container p-5">
            <product-specifications-component></product-specifications-component>
        </section>

        <div style="margin: 200px 0;"></div>

        <section class="section">
            <related-pieces-component></related-pieces-component>
        </section>
         
    </div>
</div>






