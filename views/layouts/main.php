<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <drawer></drawer>    
        <div class="wrap">  
            <!-- Seiteninhalt -->       
            <div class="container">               
                <?= $content ?>
            </div>
            <!-- Seiteninhalt END --> 
        </div>
    </div>
    <!-- Kompiliertes App.js einbinden (Vue-Komponenten)-->
    <script src="js/app.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>