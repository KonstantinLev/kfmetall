<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name.' | Заявка принята';
?>
<div class="container">
    <div class="row">
        <div class="block_completed">
            <h1>Ваша заявка принята!</h1>
            <p>Менеджер свяжется с Вами в ближайшее время/</p>
            <?=\yii\helpers\Html::a('Вернуться на главную', Yii::$app->homeUrl, ['class' => 'btn-main'])?>
        </div>
    </div>
</div>
