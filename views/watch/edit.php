<?php
use yii\widgets\ActiveForm;
?>

<div style="padding: 50px 0;"></div>
<div class="container mt-5">
    <h1 class="mt-5">Header - <?= $watch->brand . " " . $watch->model . " " . $watch->name . ' ('.$watch->id.')'?></h1>
    <!-- Update Watch/Header -->
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'mt-5']]) ?>    
    <div class="shadow-lg p-3">
        <h4 class=" mb-3">Attribute</h4>
        <?= $form->field($watch->header, 'tag') ?>  
        <?= $form->field($watch, 'brand') ?>
        <?= $form->field($watch, 'model') ?>
        <?= $form->field($watch, 'name') ?>
        <?= $form->field($watch, 'price') ?>
        <?= $form->field($watch, 'serial_number') ?>
        <?= $form->field($watch->header, 'description')->textarea(['rows' => '3'])  ?>
    </div>
    <div class="shadow-lg p-3 mt-5">
    <h4>Bilder</h4>
        <div class="d-inline-flex wrap container p-0 mt-3">
            <?php foreach($watch->header->images as $image):?>
                <div class="edit-detail-image mr-5 thumbnail" style="background-image: url(<?= $image->preview_image ?>)"></div>
            <?php endforeach; ?>
        </div>

        <?= $form->field($image, 'imageFile')->fileInput(['id' => 'fileInput'])->label("Weiteres Bild hinzufügen") ?>  
        <?= $form->field($image, 'fk_header')->hiddenInput(['value'=> $watch->header->id])->label(false) ?>
    </div>   
        <button class="btn btn-primary btn-block mt-5">Update</button>
    <?php ActiveForm::end() ?>
    </div>
</div>

<div style="padding: 50px 0;"></div>

