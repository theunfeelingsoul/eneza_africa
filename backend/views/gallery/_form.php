<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\Gallerycategories;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(['options' => [  'enctype' => 'multipart/form-data']]); ?>

    <!-- </?= $form->field($model, 'img_path')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'caption')->textInput(['maxlength' => true]) ?>

    <!-- </?= $form->field($model, 'category')->textInput() ?> -->

     <!-- <div class="row"> -->
        <?= $form->field($model, 'category')->dropDownList(
            ArrayHelper::map(Gallerycategories::find()->all(),'id','category'),
            ['prompt'=>'Choose your option',

            ]
        ); ?>
    <!-- </div> -->

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'img_path')->fileInput(['class'=>'']); ?>

            
        </div>
        <div class="col-md-12">
                <?php 
                    // only show if its empty
                    if (!empty($model->img_path)) {
                      echo Html::img( Url::home().$model->img_path, [
                                    'alt'=>'', 'class'=>'img-border','width'=>'100'
                                    ]);
                    } 
                ?>
            </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
