<?php
use yii\widgets\ActiveForm;
?>

<div style="padding: 50px 0;"></div>
<div class="container mt-5">
    <h1>Edit <?= $watch->brand . " " . $watch->model . " " . $watch->name ?></h1>
    <h2 class="mt-5 p-2 bg-dark text-white">Header</h2>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>    
    
        <?= $form->field($watch->header, 'tag') ?>  
        <?= $form->field($watch, 'brand') ?>
        <?= $form->field($watch, 'model') ?>
        <?= $form->field($watch, 'name') ?>
        <?= $form->field($watch, 'price') ?>
        <?= $form->field($watch, 'serial_number') ?>

        <h4>Bilder</h4>
        <div class="d-inline-flex ">
            <?php foreach($watch->header->images as $image):?>
                <div class="edit-detail-image mr-5 thumbnail" style="background-image: url(<?= $image->preview_image ?>)"></div>
            <?php endforeach; ?>
        </div>
        
        <?= $form->field($file, 'imageFile')->fileInput(['class' => 'dropzone', 'id' => 'myId']) ?>  
        <?= $form->field($file, 'fk_header')->hiddenInput(['value'=> $watch->header->id])->label(false) ?>

        <button class="btn btn-primary btn-block">Update</button>
    <?php ActiveForm::end() ?>
</div>

<div style="padding: 50px 0;"></div>

