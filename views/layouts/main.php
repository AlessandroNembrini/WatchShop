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
    <header> 
       <div class="header-icons">
            <div class="header-icons-left">
                <div><img src="<?php echo Yii::$app->request->baseUrl.'/views/assets/design/icons/Contact.png'?>" width="94" height="92" /></div>
                
                <div>2</div>
                <div>3</div>
            </div>  
            <div class="herader-icons-right">
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
            </div>         
       </div>
       <div class="header-nav"></div>
       <div class="header-breadcrumbs">
        <p>Breadcrumbs / 1 / 2 / 3</p>
       </div>
    </header>
    <!-- Id = app für Vue -->
    <div id="app" class="page">        
        <div class="wrap">  
            <!-- Seiteninhalt -->       
            <div class="container">               
                <?= $content ?>
            </div>
            <!-- Seiteninhalt END --> 
        </div>
        <footer class="footer">
           <p>FOOTER</p>
        </footer>
    </div>
    <!-- Kompiliertes App.js einbinden (Vue-Komponenten)-->
    <script src="js/app.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>