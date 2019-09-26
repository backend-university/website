<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\product\Product */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
<style>
    .ck-editor__editable_inline {
        min-height: 500px !important;
    }
</style>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube_src')->textInput()->label($model->getAttributeLabel('youtube_src') . ' ' . ' for example: https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=https://backend-university.ru') ?>

    <?= $form->field($model, 'screencast_description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'theory')->textarea(['rows' => 18]) ?>

    <?= $form->field($model, 'instructions')->textarea(['rows' => 18]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#product-theory' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#product-instructions' ) )
        .catch( error => {
            console.error( error );
        } );
</script>