<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $fid_category
 * @property string $title
 * @property string $description
 * @property string $add_date
 * @property string $img_path_full
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fid_category'], 'integer'],
            [['description'], 'string'],
            [['add_date'], 'safe'],
            [['title', 'img_path_full'], 'string', 'max' => 4000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fid_category' => 'Fid Category',
            'title' => 'Title',
            'description' => 'Description',
            'add_date' => 'Add Date',
            'img_path_full' => 'Img Path Full',
        ];
    }
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'fid_category']);
    }

    public static function getProductById($id)
    {
        return Product::find()->where(['id' => $id])->one();
    }

    public static function getProductByIdCategory($id)
    {
        return Product::find()->where(['fid_category' => $id])->all();
    }

    public static function drawProducts($idCategory)
    {
        $data = self::getProductByIdCategory($idCategory);
        $result = '';
        foreach($data as $item){
            $result .= '<div class="col-md-6">';
                $result .= '<div class="block-profile-product">';
                    $result .= '<div class="row">';
                        $result .= '<div class="col-md-3">';
                            $result .= '<div class="photo">';
                                $result .= Html::a(Html::img('@web/img/'.$item->img_path_full, ['alt' => $item->title]), Url::toRoute(['catalog/product/'.$item->id]));
                            $result .= '</div>';
                        $result .= '</div>';
                        $result .= '<div class="col-md-9">';
                            $result .= '<div class="descr">';
                                $result .= '<div class="title">';
                                    $result .= Html::a($item->title, Url::toRoute(['catalog/product/'.$item->id]));
                                $result .= '</div>';
                                $result .= '<div class="text">';
                                    $result .= $item->description;
                                $result .= '</div>';
                            $result .= '</div>';
                        $result .= '</div>';
                    $result .= '</div>';
                $result .= '</div>';
            $result .= '</div>';
        }
        return $result;
    }
}
