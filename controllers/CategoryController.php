<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 06.07.2017
 * Time: 9:13
 */

namespace app\controllers;


use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use app\controllers\AppController;
use app\models\ContactForm;
use Yii;

class CategoryController extends AppController{
    public function actionIndex(){
        $this->setMeta('BIGBAZAR');
        $query = Product::find();
        $count = $query->count();
        $pages = new Pagination(['totalCount'=>$count, 'pageSize'=>66]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',['products'=>$products,'pages'=>$pages]);
    }
    public function actionView($id){
        $this->layout='view';
      
        $id = Yii::$app->request->get('id');
        $query = Product::find()->where(['category_id'=>$id]);
        $count = $query->count();
        $pages = new Pagination(['totalCount'=>$count, 'pageSize'=>8   ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category =Category::findOne($id);
        $this->setMeta('BIGBAZAR | '.$category->name,$category->keywords,$category->description );



        return $this->render('view',[
            'products'=>$products,
            'pages'=>$pages,
            'category'=>$category,

        ]);
    }
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()){
//            if($model->contact(Yii::$app->params['adminEmail'])) {
//                Yii::$app->session->setFlash('success','Успешно отправлен');
//            }else {
//                Yii::$app->session->setFlash('error', 'Ошибка отправки');
//            }
//            return $this->refresh();
//        }else{
//            return $this->render('contact', [
//                'model' => $model,
//            ]);
//        }
//    }


    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    public function actionAbout(){

        return $this->render('about');
    }
} 