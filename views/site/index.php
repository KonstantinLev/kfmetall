<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = Yii::$app->name.' | широкий выбор профиля и комплектующих';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Компания '.Yii::$app->name.'. Широкий выбор профиля и комплектующих, производство профиля для гипсокартона, перфорированного металлического крепежа и комплектующих'
]);
?>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="block-short-descr">
                <p class="title"><b>KF Metall</b> - перспективное и уверенно развивающееся предприятие!</p>
                <p class="info">Основная ценность для нас - клиент, поэтому коллектив нашего завода предоставляет
                    выгодные и удобные условия для каждого заказчика. Мы стремимся сделать партнёрство
                    надёжным и удобным для всех</p>
                <p class="privilege">Преимущества работы с нами:</p>
                <ul>
                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Вы получаете продукцию высокого качества по конкурентоспособной цене;</li>
                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Вся продукция соответствует действующим стандартам и техническим условиям;</li>
                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Индивидуальный подход к каждому заказчику повышает эффективность сотрудничества;</li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 hidden-xs">
            <div class="block-callback">
                <h1 class="text-center">Обратная связь</h1>
                <?php
                $form = ActiveForm::begin([
                    'enableAjaxValidation' => true,
                    'action' => ['site/completed'],
                ]); ?>
                    <div class="form-group labeled-input">
                        <input id="phone" name="Application[phone]" placeholder="телефон" required>
                        <label for="phone" class="label-placeholder">Как с Вами связаться?</label>
                    </div>
                    <div class="form-group">
                        <i>
                            Заполняя данную форму, вы принимаете условия
                            <a href="policy" target="_blank">Соглашения об использовании сайта</a>, в том
                            числе в части обработки и использования персональных данных
                        </i>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn-main center-block" value="Отправить">
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
