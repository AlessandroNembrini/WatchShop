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
    <div id="app">
        <header style="background-color: gray;">
            <p>HEADER</p>
        </header>
        <div class="wrap">         
            <div class="container">               
                <?= $content ?>
            </div>
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