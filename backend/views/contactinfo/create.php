<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contactinfo */

$this->title = 'Create Contact Information';
$this->params['breadcrumbs'][] = ['label' => 'Contactinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
