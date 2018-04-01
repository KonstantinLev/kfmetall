<?php

/* @var $this yii\web\View */

use app\models\Category;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => Url::toRoute(['catalog/index'])];
$this->params['breadcrumbs'][] = ['label' => $product->category->title, 'url' => Url::toRoute(['catalog/'.$product->category->id])];
$this->params['breadcrumbs'][] = $product->title;
$this->title = Yii::$app->name.' | '.$product->title;
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
                    <div class="col-md-12">
                        <div class="block-profile-product">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="photo">
                                        <?=\yii\helpers\Html::img('@web/img/'.$product->img_path_full)?>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="descr">
                                        <h3><?=$product->title?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text">
                                        <?=$product->description?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>