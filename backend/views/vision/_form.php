<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vision */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vision-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vision_title')->textInput(['maxlength' => true,'readonly' => true, 'value' => 'Vision Statement']) ?>
    <?= $form->field($model, 'vision_statement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mission_title')->textInput(['maxlength' => true,'readonly' => true, 'value' => 'Mision Statement']) ?>
    <?= $form->field($model, 'mission_statement')->textarea(['rows' => 6]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
