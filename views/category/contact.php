<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Контактная информация</h2>
                    <address>
                        <p>ТОО "Complex Servises"</p>
                        <p>Казахстан Алматы г. Алматы  ул.Абылай Хана 34д.</p>
                        <p>Телефон: +77770299563</p>
                        <p>Email: lexacampp@gmail.com</p>
                    </address>
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