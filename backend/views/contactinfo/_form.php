<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contactinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactinfo-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>
                </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    

    

    

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
