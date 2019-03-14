<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $date
 * @property string $status
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $verifyCode;
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'message', 'date', 'status'], 'required'],
            [['message', 'status'], 'string'],
            [['date'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255],
            [['email'], 'email'],
            ['verifyCode', 'captcha'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'message' => 'Сообщение',
            'date' => 'Дата',
            'status' => 'Статус',
            'verifyCode'=>'Вы робот?'
        ];
    }
}
