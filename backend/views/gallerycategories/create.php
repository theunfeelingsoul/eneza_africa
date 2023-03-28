<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gallerycategories */

$this->title = 'Create Gallerycategories';
$this->params['breadcrumbs'][] = ['label' => 'Gallerycategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallerycategories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
