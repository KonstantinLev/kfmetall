<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_prod_character".
 *
 * @property int $id
 * @property int $fid_product
 * @property int $fid_prod_character
 * @property string $value
 */
class RelProdCharacter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rel_prod_character';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fid_product', 'fid_prod_character'], 'integer'],
            [['value'], 'string', 'max' => 4000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fid_product' => 'Fid Product',
            'fid_prod_character' => 'Fid Prod Character',
            'value' => 'Value',
        ];
    }
}
