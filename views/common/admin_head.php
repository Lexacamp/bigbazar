<header id="header">
    <div class="header-bottom container">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo pull-left">
                        <a href="<?=\yii\helpers\Url::home()?>"><?=\yii\bootstrap\Html::img(["/web/public/images/home/logo_admin.png",['alt'=>'СтройКомДизайн']])?></a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-right">
                        <ul class="nav navbar-nav collapse navbar-collapse">
<!--                            <li><a href="/" class="active">Главная</a></li>-->
                            <li><a href="<?=\yii\helpers\Url::to(['/admin/product/index'])?>">Продукты</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/admin/category/index'])?>">Категории</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/admin/order/index'])?>">Заказы</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/admin/catservice/index'])?>">Виды услуг</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/admin/service/index'])?>">Услуги</a></li>
                            <?php if(!Yii::$app->user->isGuest) : ?>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i>Выход</a></li>
                            <?php endif?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>