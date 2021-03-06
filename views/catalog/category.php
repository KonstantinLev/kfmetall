<?php

/* @var $this yii\web\View */

use app\models\Category;
use app\models\Product;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => Url::toRoute('catalog/index')];;
$this->params['breadcrumbs'][] = $category->title;
$this->title = Yii::$app->name.' | '.$category->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Компания '.Yii::$app->name.'. Каталог товаров, '.$category->title
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
                    <?=Product::drawProducts($category->id)?>
                </div>
            </div>
        </div>
    </div>
</div>