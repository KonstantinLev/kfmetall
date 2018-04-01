<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property string $img_path
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'img_path'], 'string', 'max' => 4000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img_path' => 'Img Path',
        ];
    }

    public function getProduct()
    {
        return $this->hasMany(Product::class, ['fid_category' => 'id']);
    }

    public static function drawLeftMenu()
    {
        $result = '<div class="left-menu">';
        $result .= '<ul>';
        $data = Category::find()->all();
        foreach ($data as $item){
            $result .= '<li>';
            $result .= '<span>'.$item->title.'</span>';
            $result .= '<ul>';
            foreach($item->product as $val){
                $result .= '<li>'.Html::a($val->title, ['catalog/product/'.$val->id]).'</li>';
            }
            $result .= '</ul>';
            $result .= '</li>';
        }
        $result .= '</ul>';
        $result .= '</div>';
        return $result;
    }

    public static function drawCatalog()
    {
        $data = Category::find()->all();
        $result = '';
        foreach ($data as $item){
            $result .= '<div class="col-md-6 col-sm-6">';
            $result .= '<div class="block-product">';
            $result .= Html::a(Html::img('@web/img/'.$item->img_path, ['alt' => $item->title]).'<span>'.$item->title.'</span>', ['catalog/'.$item->id], ['title' => $item->title]);
            $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}
