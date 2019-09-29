<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\product\Product */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube_src')->textInput()->label($model->getAttributeLabel('youtube_src') . ' ' . ' for example: https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=https://backend-university.ru') ?>

    <?= $form->field($model, 'screencast_description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'theory')->textarea(['rows' => 18, 'class' => 'textarea-ckeditor']) ?>

    <?= $form->field($model, 'instructions')->textarea(['rows' => 18, 'class' => 'textarea-ckeditor']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>