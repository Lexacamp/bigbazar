<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 12.07.2017
 * Time: 14:37
 */

namespace app\controllers;

use app\controllers\AppController;
use Yii;
use app\models\Product;
use app\models\OrderItems;
use app\models\Order;
use app\models\Cart;
class CartController extends AppController{

    public function actionAdd(){

        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $products = Product::findOne($id);
        if(empty($products)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($products,$qty);
        $this->layout = false;

        return $this->render('cart-modal',[
            'session' => $session,
            'qty' => $qty,
        ]);
    }

    public function actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;

        return $this->render('cart-modal',['session' => $session]);
    }
    public function actionDelItem(){
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart;
        $cart->recalc($id);
        $this->layout = false;

        return $this->render('cart-modal',['session' => $session]);
    }
    public function actionShow(){

        $session = Yii::$app->session;
        $session->open();

        $this->layout = false;

        return $this->render('cart-modal',['session' => $session]);
    }
    public function actionView(){
        $session = Yii::$app->session;
        $session->open();
        $this->setMeta('Корзина');
        $order = new Order();
        if($order->load(Yii::$app->request->post())){
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
            if($order->save()){
                $this->saveOrderItems($session['cart'], $order->id);
                Yii::$app->session->setFlash('success','Ваш заказ принят. Менеджер вскоре с Вами свяжется');
                Yii::$app->mailer->compose('order',['session'=>$session])
                    ->setFrom('almuko@mail.ru')
                    ->setTo($order->email)
                    ->setSubject('Заказ')
                    ->send();
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error','Ошибка оформления заказа');
            }
        }
        return $this->render('view',[
            'session'=>$session,
            'order'=>$order,
        ]);
    }

    protected function saveOrderItems($items,$order_id){

        foreach ($items as $id=>$item) {
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty']*$item['price'];
            $order_items->save();
        }
    }

} 