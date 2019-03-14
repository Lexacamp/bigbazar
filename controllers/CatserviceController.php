<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 18.09.2017
 * Time: 23:23
 */

namespace app\controllers;


use app\models\Service;
use yii\web\Controller;

class CatserviceController extends Controller
{
    public function actionIndex($id){

        $this->layout='view';
        $services = Service::find()->where(['service_id'=>$id])->all();
//        debug($services);die;

        return $this->render('index',['services'=>$services]);
    }
}