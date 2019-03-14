<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"><?=$catservise->name?></h2>
                    <?php if(isset($services)):?>
                        <?php $i=0; foreach($services as $service):?>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <?=Html::img($service->getImage(),['height' => 300])?>
                                            <!--                        <h2>--><?//=$product->price?><!--</h2>-->
                                            <p><a href="<?=Url::toRoute(['/service/view','id'=>$service->id])?>"><?=$service->name?> (подробнее...)</a></p>
                                            <a href="<?=Url::to(['cart/add','id'=>$service->id])?>" data-id="<?=$service->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                            if($i%6 == 0) {
                                ?>
                                <div class="clearfix"></div>
                                <?php
                            }
                            ?>
                        <?php endforeach?>
                    <?php else :?>
                        <h1>Такого товара нет</h1>
                    <?php endif?>

<!--                    <div class="clearfix"></div>-->
<!--                    --><?php
//                    echo LinkPager::widget([
//                        'pagination' => $pages,
//                    ]);
//                    ?>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>