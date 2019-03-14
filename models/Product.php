<?php

namespace app\models;

use Yii;


class Product extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }

    public function rules()
    {
        return [
            [['category_id', 'name', 'content', 'keywords', 'description'], 'required'],
            [['category_id'], 'integer'],
            [['content', 'new'], 'string'],
            [['price'], 'number'],
            [['name', 'image', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'name' => 'Название',
            'content' => 'Контент',
            'price' => 'Цена',
            'new' => 'Новый',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'image' => 'Фото',
        ];
    }

    public function saveImage($filename){
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage(){
        if($this->image){
            return '/web/uploads/'.$this->image;
        }else{
            return '/web/uploads/.no-image.png';
        }
    }
}
