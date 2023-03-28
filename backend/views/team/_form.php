<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<style type="text/css">
    .img-border{
        border: solid 10px #c1c1c1;
        border-radius: 3px;
    }
</style>

<div class="team-form">

    <!-- </?php $form = ActiveForm::begin(); ?> -->
     <?php $form = ActiveForm::begin(['options' => [  'enctype' => 'multipart/form-data']]); ?>

     <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'img')->fileInput(['class'=>'']); ?>

            
        </div>
        <div class="col-md-12">
                <?php 
                    // only show if its empty
                    if (!empty($model->img)) {
                      echo Html::img( Url::home().$model->img, [
                                    'alt'=>'', 'class'=>'img-border','width'=>'100'
                                    ]);
                    } 
                ?>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'quote')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'social')->textarea(['rows' => 6]) ?>
        </div>
    </div>



    
    

    <!-- </?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?> -->

     

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
