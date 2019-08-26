<?php

use app\models\News;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->widget('manks\FileInput', []);
    ?>

    <?= $form->field($model, 'brief')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
//            'imageManagerJson' => ['/redactor/upload/image-json'],
//            'imageUpload' => ['/redactor/upload/image'],
//            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor', 'imagemanager']]
    ]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <label for="ECalendar_date1" style="width: 100%">选择时间</label>
        <div class="calendarWarp">
            <input type="text" name="year" class='ECalendar' id="ECalendar_date1" value="<?= $model->year?>"
                   placeholder="开始日期"/>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
