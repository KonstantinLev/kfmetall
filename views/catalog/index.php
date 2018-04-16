<?php

/* @var $this yii\web\View */

use app\models\Category;
use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = 'Каталог';
$this->title = Yii::$app->name.' | Каталог';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Компания '.Yii::$app->name.'. Каталог товаров, категории, профиль перфорированный, профиль для монтажа гипсокартона, крепежные изделия, комплектующие'
]);
?>
<div class="container">
    <div class="row">
        <div class="block-catalog">
            <div class="col-md-3 col-sm-3 hidden-xs">
                <?=Category::drawLeftMenu()?>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <?=Breadcrumbs::widget(['homeLink' => ['label' => 'Главная', 'url' => Yii::$app->homeUrl], 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],])?>
                    <?=Category::drawCatalog()?>
                </div>
            </div>
        </div>
    </div>
</div>
