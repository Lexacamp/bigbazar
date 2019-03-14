<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ksl_ip_bots".
 *
 * @property integer $id_bot
 * @property string $bot_ip
 * @property string $str_url
 * @property string $bot_name
 * @property integer $date
 */
class Bot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const AGE_BOT = 30; //сколько дней хранить статистику по ботам
    public $get_bot_stat;

    public static function tableName()
    {
        return 'ksl_ip_bots';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bot_ip', 'str_url', 'bot_name', 'date'], 'required'],
            [['date'], 'integer'],
            [['bot_ip'], 'string', 'max' => 15],
            [['str_url'], 'string', 'max' => 50],
            [['bot_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bot' => 'Id Bot',
            'bot_ip' => 'Bot Ip',
            'str_url' => 'Str Url',
            'bot_name' => 'Bot Name',
            'date' => 'Date',
        ];
    }
}
