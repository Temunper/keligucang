<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_En')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advantage_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advantage_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advantage_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget('manks\FileInput', []);
    ?>
    <?= $form->field($model, 'dt_image')->widget('manks\FileInput', []);
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
