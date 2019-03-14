<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 19.09.2017
 * Time: 14:47
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Service;
use Yii;

class ServiceController extends Controller
{
    public function actionView(){
        $id = Yii::$app->request->get('id');
        $service = Service::findOne($id);



        return $this->render('view',['service'=>$service]);
    }

}