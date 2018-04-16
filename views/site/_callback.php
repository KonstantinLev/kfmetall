<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php

$form = ActiveForm::begin([
    'id' => 'callback_form',
    'layout' => 'horizontal',
    'enableAjaxValidation' => true,
    'action' => ['site/completed'],
]); ?>

<div class="form-group labeled-input">
    <input id="contacts" name="Application[phone]" placeholder="Ваш телефон" required>
    <label for="contacts" class="label-placeholder">Как с Вами связаться?</label>
</div>
<div class="form-group">
    <i>
        Заполняя данную форму, вы принимаете условия
        <a href="<?=\yii\helpers\Url::to(['policy/index'])?>" target="_blank">Соглашения об использовании сайта</a>, в том
        числе в части обработки и использования персональных данных
    </i>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <?= Html::submitButton('Отправить', ['class' => 'btn-main center-block']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
