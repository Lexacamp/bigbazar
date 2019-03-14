<?php
use yii\helpers\Html;;
use yii\helpers\Url;

?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->

                    <div class="col-sm-12">
                        <div class="product-information"><!--/product-information-->
                            <h2><?=$service->name?></h2>

                            <span>
<!--									<span>--><?//=$product->price?><!-- тенге</span>-->


								</span>
                            <p><?=$service->content?></p>
                            <p><b>Категория:</b> <?=$service->catservice->name?></p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


            </div>
        </div>
    </div>
</section>