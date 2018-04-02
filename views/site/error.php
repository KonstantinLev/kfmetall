<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center">
                    <h1>Что-то пошло не так =(</h1>
                    <p>Данная страница не существует. Попробуйте воспользоваться пунктами меню для перехода в нужный раздел.</p>
                    <?=\yii\helpers\Html::a('На главную страницу', Yii::$app->homeUrl, ['class' => 'btn-main'])?>
                </div>
            </div>
        </div>
    </div>
</div>
