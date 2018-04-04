<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;

$this->title = Yii::$app->name.' | Контакты';
?>
<div class="contact_block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>215113, Смоленская обл., г. Вязьма, ул. 2-я Бозня, д.2, стр. 2</p>
                <div class="phone">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="tel:+79529992323"><span>+7 (952) 999-23-23</span></a>
                </div>
                <div class="phone">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <a href="tel:+74813150751"><span>8 (48131) 5-07-51</span></a>
                </div>
                <div class="email">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>kfmetall@yandex.ru</span>
                </div>
                <br>
                <p>График работы офиса:</p>
                <p>пн-чт 9:00 - 18:00</p>
                <p>пт 9:00 - 17:00</p>
                <p>сб-вс - выходной</p>
                <div class="block-callback">
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
                        <input type="submit" class="btn-main center-block" value="Отправить">
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <p>Схема проезда</p>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5fbe41203836f646b405406d370797b30484220d9195fbd0166fb829053efc39&amp;width=100%&amp;height=562&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>

