<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vision */

$this->title = 'Create Vision';
$this->params['breadcrumbs'][] = ['label' => 'Visions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vision-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
