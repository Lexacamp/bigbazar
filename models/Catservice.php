<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catservice".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 */
class Catservice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catservice';
    }
    public function getService(){
        return $this->hasMany(Service::className(),['service_id'=>'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'name'], 'required'],
            [['id', 'parent_id'], 'integer'],
            [['name'], 'string', 'max' => 254],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
        ];
    }
}
