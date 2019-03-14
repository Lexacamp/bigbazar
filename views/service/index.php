<?php
use yii\helpers\Html;;
use yii\helpers\Url;

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-4">
                        <div class="view-product">
                            <?=Html::img("/web/public/images/service/{$service->image}")?>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="product-information"><!--/product-information-->
                            <h2><?=$service->name?></h2>

                            <span>
<!--									<span>--><?//=$product->price?><!-- тенге</span>-->
									<label>Количество:</label>
									<input type="text" value="1" id="qty" />
									<a href="" data-id="<?=$service->id?>" class="btn btn-default add-to-cart cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        В корзину
                                    </a>
								</span>
                            <p><?=$service->content?></p>
                            <p><b>Категория:</b> <?=$product->category->name?></p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


            </div>
        </div>
    </div>
</section>