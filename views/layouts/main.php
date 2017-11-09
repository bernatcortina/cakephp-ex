<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://gestio-ojc.rhcloud.com/img/logo_cercles.png" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '<img src= "https://gestio-ojc.rhcloud.com/img/logo_cercles.png" width="30">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            $usuari = Yii::$app->user->id;

            if ($usuari == '1') { // admin
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Inici', 'url' => ['/site/login']],
                        ['label' => 'Músics', 'url' => ['/musics/index']],
                        ['label' => 'Casting', 'url' => ['/casting']],
                        '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Partitures <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="'.Url::to(['/partitures']).'">Partitures</a></li>
                                <li><a href="'.Url::to(['/autors']).'">Autors</a></li>
                                <li><a href="'.Url::to(['/generes']).'">Gèneres</a></li>
                                <li><a href="'.Url::to(['/localitzacions']).'">Localitzacions</a></li>
                            </ul>
                        </li>',
                        ['label' => 'Inventari', 'url' => ['/inventari']],
                        ['label' => 'Personal OJC', 'url' => ['/personal']],
                        Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                    ],
                ]);
            }
            elseif ($usuari == '2') { // partitures
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Inici', 'url' => ['/site/login']],
                        '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Partitures <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="'.Url::to(['/partitures']).'">Partitures</a></li>
                                <li><a href="'.Url::to(['/autors']).'">Autors</a></li>
                                <li><a href="'.Url::to(['/generes']).'">Gèneres</a></li>
                                <li><a href="'.Url::to(['/localitzacions']).'">Localitzacions</a></li>
                            </ul>
                        </li>',
                        Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                    ],
                ]);
            }
            elseif ($usuari == '3') { // gestio
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Inici', 'url' => ['/site/login']],
                        ['label' => 'Músics', 'url' => ['/musics/index']],
                        ['label' => 'Casting', 'url' => ['/casting']],
                        '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Partitures <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="'.Url::to(['/partitures']).'">Partitures</a></li>
                                <li><a href="'.Url::to(['/autors']).'">Autors</a></li>
                                <li><a href="'.Url::to(['/generes']).'">Gèneres</a></li>
                                <li><a href="'.Url::to(['/localitzacions']).'">Localitzacions</a></li>
                            </ul>
                        </li>',
                        ['label' => 'Inventari', 'url' => ['/inventari']],
                        ['label' => 'Personal OJC', 'url' => ['/personal']],
                        Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                    ],
                ]);
            }
            elseif ($usuari == '4') { // casting
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Casting', 'url' => ['/casting']],
                        Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                    ],
                ]);
            }
            else {
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Inici', 'url' => ['/site/login']],
                        Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                    ],
                ]);
            }
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Orquestra Simfònica Julià Carbonell de les Terres de Lleida - OJC <?= date('Y') ?></p>
            <p class="pull-right">Desenvolupat per <a href="http://bernatcortina.cat" target="_blank">Bernat Cortina</a></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
