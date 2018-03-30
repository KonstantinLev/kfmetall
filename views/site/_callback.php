<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php

$form = ActiveForm::begin([
    'id' => 'callback_form',
    'layout' => 'horizontal',
    'enableAjaxValidation' => true,
    'action' => ['site/save-callback'],
]); ?>

<div class="form-group labeled-input">
    <input id="contacts" name="Application[phone]" placeholder="Ваш телефон" required>
    <label for="contacts" class="label-placeholder">Как с Вами связаться?</label>
</div>
<div class="form-group">
    <i>
        Заполняя данную форму, вы принимаете условия
        <a href="policy" target="_blank">Соглашения об использовании сайта</a>, в том
        числе в части обработки и использования персональных данных
    </i>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <?= Html::submitButton('Отправить', ['class' => 'btn-main center-bloc']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
