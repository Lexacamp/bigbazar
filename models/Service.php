<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property integer $service_id
 * @property string $name
 * @property string $content
 * @property string $image
 * @property integer $price
 * @property string $date
 * @property integer $visible
 * @property string $keywords
 * @property string $description
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }
    public function getCatservice(){
        return $this->hasOne(Catservice::className(),['id'=>'service_id']);
    }

    public function saveImage($filename){
        $this->image = $filename;
        return $this->save(false);
    }
    public function getImage(){
        return $this->image ? '/web/upload/'.$this->image : '/web/upload/.no-image.png/';
    }

    /**
     * @inheritdoc
     */


    public function rules()
    {
        return [
            [['service_id', 'name', 'content', 'image', 'price'], 'required'],
            [['service_id', 'price', 'visible'], 'integer'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_id' => 'Service ID',
            'name' => 'Name',
            'content' => 'Content',
            'image' => 'Image',
            'price' => 'Price',
            'date' => 'Date',
            'visible' => 'Visible',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
