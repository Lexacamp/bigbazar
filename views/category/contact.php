<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="title text-center">Наши <strong>контакты </strong></h2>
                <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940001684879/center/76.98012828826906,43.349243285899/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.983001,43.351806/zoom/15/routeTab/rsType/bus/to/76.983001,43.351806╎СтройКомДизайн, торговая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до СтройКомДизайн, торговая компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":43.349243285899,"lon":76.98012828826906,"zoom":15},"opt":{"city":"almaty"},"org":[{"id":"9429940001684879"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Контактная информация</h2>
                    <address>
                        <p>ТОО "СтройКомДизайн"</p>
                        <p>Казахстан Алматы г. Алматы  ул.Бекмаханова 96г</p>
                        <p>Телефон: +7727385-89-83</p>
                        <p>Fax: </p>
                        <p>Email: a.nado@mail.ru</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Социальные сети</h2>
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/stroikomdizain_kz/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                    <div class="alert alert-success">
                        Сообщение отправлено
                    </div>
                <?php else: ?>
                    <div class="alert alert-success">
                        Сообщение не отправлено
                    </div>
                <?php endif;?>

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->label('Имя')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email')->label('e-mail') ?>

                    <?= $form->field($model, 'subject')->label('Тема') ?>

                    <?= $form->field($model, 'body')->label('Описание')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>