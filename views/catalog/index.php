<?php

/* @var $this yii\web\View */

use app\models\Category;
use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = 'Каталог';
$this->title = Yii::$app->name.' | Каталог';
?>
<div class="container">
    <div class="row">
        <div class="block-catalog">
            <div class="col-md-3">
                <?=Category::drawLeftMenu()?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?=Breadcrumbs::widget(['homeLink' => ['label' => 'Главная', 'url' => Yii::$app->homeUrl], 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],])?>
                    <?=Category::drawCatalog()?>
                </div>
            </div>
        </div>
    </div>
</div>
