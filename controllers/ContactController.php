<?php

namespace app\controllers;
use app\models\Contact;
use Yii;

class ContactController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $this->layout = 'view';
        $model = new Contact();
        $model->date = date('y-m-d');
        $model->status = 'show';
        if($model->load(Yii::$app->request->post()) && $model->save()){

            Yii::$app->session->setFlash('success','Письмо отправлено');
            return $this->refresh();
        }

        return $this->render('index',compact('model'));
    }

}
