<?php
/**
 * Created by PhpStorm.
 * User: almuko
 * Date: 12.07.2017
 * Time: 18:55
 */

namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord{

    public function addToCart($products, $qty = 1){
        if($_SESSION['cart'][$products->id]){
            $_SESSION['cart'][$products->id]['qty'] += $qty;
        }else{
            $_SESSION['cart'][$products->id] = [
                'qty' => $qty,
                'name'=> $products->name,
                'price'=> $products->price,
                'image'=> $products->image,
            ];
        }

        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty*$products->price :  $qty*$products->price;
    }

    public function recalc($id){
        if(!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty']*$_SESSION['cart'][$id]['price'];

        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);



    }




}