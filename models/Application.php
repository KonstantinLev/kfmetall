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
 * @property string $result_send
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
            [['phone', 'name', 'result_send'], 'string', 'max' => 4000],
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
            'result_send' => 'result_send',
        ];
    }

    public function sendAppOnMail()
    {
        $to = Yii::$app->params['kfMetalEmail'];
        $subject = 'Новые обращение с сайта kfmetall.ru';
        $message = '<html>
            <head>
            </head>
            <body>
                Оформлено новое обращение с сайта kfmetall.ru. Номер телефона клиента - <b>'.$this->phone.'</b>
            </body></html>';
        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: order@kfmetall.ru';

        $result = mail($to, $subject, $message, implode("\r\n",$headers));
        if (!$result) {
            $result =  error_get_last()['message'];
        }
        $this->result_send = $result;
        $this->save();
    }
}
