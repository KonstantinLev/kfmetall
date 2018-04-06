<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Category;
use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
/*$this->title = Yii::$app->name;*/
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4e93bc">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4e93bc">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4e93bc">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="my-page" class="<?=Yii::$app->controller->id == 'site' ? 'home' : ''?>">
    <div id="my-header">
        <header>
            <a href="#my-menu" class="hamburger hamburger--emphatic hidden-lg hidden-md hidden-sm">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
            </a>
            <nav id="my-menu">
                <ul>
                    <li><?=Html::a('Главная', Yii::$app->homeUrl)?></li>
                    <li>
                        <?=Html::a('Каталог', ['catalog/index'])?>
                        <?=Category::drawLeftMenu()?>
                    </li>
                    <li><?=Html::a('О компании', ['about/index'])?></li>
                    <li><?=Html::a('Контакты', ['contact/index'])?></li>
                </ul>
                <?=Category::drawLeftMenu()?>
            </nav>
            <div class="top-line">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-1">
                            <div class="logo"><?=Html::img('@web/img/logo.png', ['alt' => Yii::$app->name])?></div>
                        </div>
                        <div class="col-sm-4 col-md-5 col-lg-5">
                            <div class="descr">
                                <h1>KF Metall</h1>
                                <p>Широкий выбор профиля и комплектующих</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="contacts">
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:+79529992323"><span>+7 (952) 999-23-23</span></a>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>kfmetall@yandex.ru</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            <div class="block-btn">
                                <a href="#callback" class="btn-main btn-open-form" data-toggle="modal" data-link="<?=Url::toRoute('site/get-callback-form')?>" data-target="#callback">Есть вопрос?</a>
                                <?php Modal::begin(); ?>
                                <?php Modal::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-rf hidden-sm hidden-md">
                    <?=Html::img('@web/img/rf.png', ['alt' => 'Работаем по всей России'])?>
                </div>
            </div>
            <div class="top-menu hidden-xs">
                <div class="container">
                    <ul>
                        <li><?=Html::a('Главная', Yii::$app->homeUrl)?></li>
                        <li><?=Html::a('Каталог', ['catalog/index'])?></li>
                        <li><?=Html::a('О компании', ['about/index'])?></li>
                        <li><?=Html::a('Контакты', ['contact/index'])?></li>
                    </ul>
                </div>

            </div>
        </header>
    </div>
    <div id="my-content">
        <div class="content <?=Yii::$app->controller->id == 'site' ? 'home' : ''?> ">
            <?=$content?>
        </div>
    </div>
    <div id="my-footer">
        <?php if(Yii::$app->controller->id != 'site') { ?>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="f-block-1">
                                <div class="logo"><?=Html::img('@web/img/logo.png', ['alt' => Yii::$app->name])?></div>
                                <h3>KF Metall</h3>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="f-block-2">
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:+79529992323"><span>+7 (952) 999-23-23</span></a>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>kfmetall@yandex.ru</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="f-block-3">
                                <ul>
                                    <li><span class="underline">Полное наименование фирмы:</span> Общество с ограниченной ответственностью "Строй-Инвест"</li>
                                    <li><span class="underline">Юридический адрес:</span> 215113, Смоленская обл., г. Вязьма, ул. 2-я Бозня, д.2, стр. 2</li>
                                    <li><span class="underline">ОГРН клиента:</span> 1126722000283</li>
                                    <li><span class="underline">ИНН:</span> 6722027281</li>
                                    <li><span class="underline">КПП:</span> 672201001</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <?php } ?>
    </div>
</div>

<!--Модалка-->
<div class="modal fade" tabindex="-1" role="dialog" id="callback">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>Заявка на обратную связь</h2>
            </div>
            <div class="modal-body callback-body">

            </div>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
