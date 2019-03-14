<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\components\Alert;

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?=Alert::widget()?>
        </p>

        <div class="row">
            <div class="col-lg-6">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'message')->textarea(['rows'=>6]) ?>

<!--                --><?//= $form->field($model, 'status')->dropDownList(['show'=>'Просмотрено','hide'=>'Скрыто']) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                   // 'captchaAction'=>'contact/captcha'
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-6">
                <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940001684879/center/76.9831967353821,43.35202067305005/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a>
                <div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.983188,43.351826/zoom/16/routeTab/rsType/bus/to/76.983188,43.351826╎СтройКомДизайн, компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до СтройКомДизайн, компания</a></div>
                <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":540,"height":450,"borderColor":"#a3a3a3","pos":{"lat":43.35202067305005,"lon":76.9831967353821,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"9429940001684879"}]});</script>
                <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>
        </div>
</div>
