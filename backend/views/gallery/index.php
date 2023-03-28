<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'img_path',
            'caption',
            'category',
            [
            'attribute' => 'img_path',
            'format' => 'html',
            'label' => 'Image',
             'value' => function ($data) {
                return Html::img( Url::home(). $data['img_path'],
                    ['width' => '100px']);
            },
        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
