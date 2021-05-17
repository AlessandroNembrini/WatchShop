<?php

/* @var $this yii\web\View */
    use yii\widgets\ActiveForm;
    use app\models\Images;

$this->title = 'The Brand - Watch Details';
?>

<div class="site-index">
    <div class="body-content mx-3">

        <section class="section1">
            <header-component></header-component> 
        </section>

        <div style="margin: 5rem 0;"></div>

        <section id="product-details-section" class="container p-5">
            <product-details-component></product-details-component>
        </section>

        <section class="container p-5">
           <product-description-component></product-description-component>
        </section>

        <div style="margin: 20rem 0px;"></div>

        <section class="container p-5">
            <product-specifications-component></product-specifications-component>
        </section>

        <div style="margin: 15rem 0px;"></div>
      
        <section class="section">
            <related-pieces-component></related-pieces-component>
        </section>

    </div>
</div>


