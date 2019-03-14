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
    <link rel="shortcut icon" href="/web/img/title2.png" type="image/png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?=$this->render('//common/admin_head.php')?>
    <div class="container">
        <?= $content ?>
    </div>
<!--    --><?//=$this->render('//common/footer.php')?>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
