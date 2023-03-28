<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
   

    <header id="header">
    <?php
    NavBar::begin([
        // 'brandLabel' => Yii::$app->name,
        'brandLabel' => 'Eneza Admin',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            // ['label' => 'Home', 'url' => ['/site/index']],
            // ['label' => 'About', 'url' => ['/site/about']],
            // ['label' => 'Contact', 'url' => ['/site/contact']],

            ['label' => 'Visit Site', 'url' => 'site/index'],
            ['label' => 'Mission/Vision', 'url' => ['/vision/index']],
            ['label' => 'Team', 'url' => ['/team/index']],
            ['label' => 'Gallery', 'url' => ['/gallery/index']],
            ['label' => 'Contacts', 'url' => ['/contactinfo/index']],
            ['label' => 'Blog', 'url' => ['/blog/index']],
            ['label' => 'About', 'url' => ['/about/index']],


            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout ('.Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

    <div class="container">
       
        <br>
        <div class="row">
        <div class="col-md-2 hidden-xs">
            <div class="list-group">
               <!--  <a href="#" class="list-group-item active">
                Cras justo odio
                </a> -->
                <?php echo Html::a('Mission/Vision', ['vision/index',], ['class' => 'list-group-item']); ?>
                <?php echo Html::a('Team', ['team/index',], ['class' => 'list-group-item']); ?> 
                <?php echo Html::a('Gallery', ['gallery/index',], ['class' => 'list-group-item']); ?>
                <?php echo Html::a('Gallery Cat', ['gallerycategories/index',], ['class' => 'list-group-item']); ?>
                <?php echo Html::a('Contacts', ['contactinfo/index',], ['class' => 'list-group-item']); ?>
                <?php echo Html::a('Blog', ['blog/index',], ['class' => 'list-group-item']); ?>
                <?php echo Html::a('About', ['about/index',], ['class' => 'list-group-item']); ?>
               <!--  <a href="#" class="list-group-item">Mission/Vision</a>
                <a href="#" class="list-group-item">Team</a> -->
            </div>
         </div>
         <div class="col-md-9 col-xs-12">
              <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
        <?= $content ?>
             
         </div>
         </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <!-- <p class="pull-left">&copy; My Company </?= date('Y') ?></p> -->

        <!-- <p class="pull-right"></?= Yii::powered() ?></p> -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
