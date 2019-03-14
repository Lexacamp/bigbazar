<?php

use yii\helpers\Html;

use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/web/img/title.png" type="image/png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?=$this->render('//common/head.php')?>

    <div class="container">
        <?= $content ?>
    </div>
    <?=$this->render('//common/footer.php')?>
</div>


<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина<h2>',
    'id' => 'cart',
    'size' => 'modal-lg',

    'footer' => '<button type="button" class="btn btn-success" data-dismiss="modal">Продолжить покупки</button>
                     <a href="'.\yii\helpers\Url::to(['/cart/view']).'" class="btn btn-success">Оформить заказ</a>
                     <button type="button" class="btn btn-danger " onclick="clearCart()">Очистить заказ</button>'

])?>

<?php \yii\bootstrap\Modal::end()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
