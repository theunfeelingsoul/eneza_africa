<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerycategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallerycategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallerycategories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gallerycategories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
