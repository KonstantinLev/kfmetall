<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applications".
 *
 * @property int $id
 * @property string $phone
 * @property string $name
 * @property string $created_at
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['phone', 'name'], 'string', 'max' => 4000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'name' => 'Name',
            'created_at' => 'Created At',
        ];
    }
}
