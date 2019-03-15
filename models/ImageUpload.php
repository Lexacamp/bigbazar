<?php
namespace app\models;


use yii\web\UploadedFile;
use yii\base\Model;

class ImageUpload extends Model{

    public $image;

    public function rules(){
        return [
            [['image'],'required'],
            [['image'],'file','extensions'=>'png,jpg','checkExtensionByMimeType'=>false],
        ];
    }

    public function uploadFile(UploadedFile $file,$currentImage){
        $this->image = $file;
        if($this->validate()){

            $this->deleteCurrentImage($currentImage);

            return $this->saveImage();
        }
    }

    public function getFolder(){
        return 'web/uploads/';
    }
    public function generateFileName(){
        return strtolower(md5(uniqid($this->image->baseName)).'.'.$this->image->extension);
    }
    public function deleteCurrentImage($currentImage){
        if($this->fileExists($currentImage)){
            unlink($this->getFolder().$currentImage);
        }
    }
    public function fileExists($currentImage){
        if(!empty($currentImage) && $currentImage != null){
            return file_exists($this->getFolder().$currentImage);
        }

    }

    public function saveImage(){
        $filename = $this->generateFileName();
        $this->image->saveAs($this->getFolder().$filename);
        return $filename;
    }
} 