<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 12.07.2017
 * Time: 11:19
 */

namespace app\controllers;


use app\models\Product;
use Yii;

class ProductController extends AppController{

    public function actionView(){

        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);



        return $this->render('view',['product'=>$product]);
    }
} 