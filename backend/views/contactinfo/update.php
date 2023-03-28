<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contactinfo */

$this->title = 'Update Contact Information: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contactinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contactinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
