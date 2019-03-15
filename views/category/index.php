<?php
use yii\helpers\Url;

use yii\widgets\LinkPager;
use yii\helpers\Html;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Продукты</h2>
                    <?php
                        $i=0;
                        foreach($products as $product):?>
                    <div class="col-sm-2">

                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="<?=Url::toRoute(['/product/view','id'=>$product->id])?>"><?=Html::img($product->getImage(),['weidht'=>150, 'height'=>150])?></a>
<!--                                    <h2>--><?//=$product->price?><!-- тенге</h2>-->
                                    <p><a href="<?=Url::toRoute(['/product/view','id'=>$product->id])?>">
									<?php if(strlen($product->name) > 20){
											echo substr($product->name, 0, 20);
											echo " ..";
										} else {
											echo $product->name;
										}
									?>
				</a></p>
                                    <a href="<?=Url::to(['cart/add','id'=>$product->id])?>" data-id="<?=$product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-plus-circle"></i>Запомнить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                        if($i%6 == 0){?>
                        <div class="clearfix"></div>
                        <?php }
                        endforeach?>
                    <div class="clearfix"></div>
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>

