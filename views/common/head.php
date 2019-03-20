<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>+7(777)029-95-63</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> lexacampp@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?=\yii\helpers\Url::to(['category/index'])?>"><?=\yii\bootstrap\Html::img(["/web/public/images/home/logo.jpg",['alt'=>'BigBaZar']])?></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <?php if(!Yii::$app->user->isGuest) : ?>
                                <li><a href="<?=\yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i>Выход</a></li>
                            <?php endif?>
                            <li><a href="<?=\yii\helpers\Url::toRoute(['/cabinet/contact'])?>"><i class="fa fa-plus"></i>ПОДАТЬ ОБЪЯВЛЕНИЕ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
				</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="ПОИСК"/>
						</div>
						<div class="search_button">
							<input type="button" placeholder="ПОИСК"/>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li class="dropdown"><a href="#">Продукты<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="#"><?=\app\components\MenuWidget::widget()?></a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

</header><!--/header-->
