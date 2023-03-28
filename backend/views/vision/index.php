<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mission & Vision';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vision-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- </?= Html::a('Create Vision', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'vision_statement:ntext',
            'mission_statement:ntext',
            // 'vision_title',
            // 'mission_title',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}{link}',

            ],
        ],
    ]); ?>
</div>
