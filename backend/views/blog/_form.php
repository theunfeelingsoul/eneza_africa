<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */

$category = array(
    '1' => 'cat 1', 
    '1' =>'cat 1' , 
    '1' =>'cat 1' , 
);
?>


<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => [  'enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-6">
            <div class=""><?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></div>
            <div class="">
                <!-- </?= 
                    $form->field($model, 'category')->dropdownList([
                        1 => 'item 1', 
                        2 => 'item 2'
                    ],
                    ['prompt'=>'Select Category']
                );?> -->
            </div>
        </div>
       <!--  <div class="col-md-6">
            
        </div>
         -->
        <!-- <div class="col-md-3"></?= $form->field($model, 'main_image')->textInput(['maxlength' => true]) ?></div> -->
        <div class="col-md-6">
            <div class="row">
            <?= $form->field($model, 'main_image')->fileInput(['class'=>'']); ?>
                
            </div>
            <div class="row">
                
             <?php 
                    // only show if its empty
                    if (!empty($model->main_image)) {
                      echo Html::img( Url::home().$model->main_image, [
                                    'alt'=>'', 'class'=>'img-border','width'=>'100'
                                    ]);
                    } 
                ?>
            </div>
        </div>

    </div>

   

    
    <!-- </?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?> -->
    <?= $form->field($model, 'content')->textarea(['rows' => 20]) ?>
        



    

    <!-- </?= $form->field($model, 'timestamp')->textInput(['maxlength' => true]) ?> -->

    <!-- </?= $form->field($model, 'author')->textInput() ?> -->

    <!-- </?= Html::activeHiddenInput($model, 'timestamp'); ?> -->
    <!-- </?= Html::activeHiddenInput($model, 'author'); ?> -->


    <!-- </?= $form->field($model, 'category')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

