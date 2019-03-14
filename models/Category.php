<?php

namespace app\models;

use Yii;


class Category extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }
    public function getProduct(){
        return $this->hasMany(Product::className(),['category_id'=>'id']);
    }

    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id', 'parent_id'], 'integer'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
