<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
?>
<h3 class="stat_center">Статистика посещений по IP</h3>

<div id="stat_ip">

<!--    --><?php //echo $this->render('default',[
//        'count_ip'=> $count_ip,
//        'stat_ip' => $stat_ip,
//    ]); ?>

    <?php $form = ActiveForm::begin(); ?>
    <?=$form->field($count_model, 'reset')->hiddenInput(['value' => true])->label(false)?>
    <div class="button-reset">
        <?=Html::submitButton('Сбросить фильтры'); ?>
    </div>
    <?php ActiveForm::end(); ?>
    <hr>

    <?php $form = ActiveForm::begin(); ?>
    <h3>Сформировать за указанную дату</h3>
    <?=$form->field($count_model, 'date_ip')->widget(DatePicker ::classname(), [
        'dateFormat' => 'dd.MM.yyyy',
        'language' => 'ru',
        'clientOptions' => [
            'yearRange' => '2015:2025',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'firstDay' => '1',
        ]
    ])->label(false) ?>
    <?=Html::submitButton('Отфильтровать'); ?>
    <?php ActiveForm::end(); ?>
    <hr>
    <?php $form = ActiveForm::begin(); ?>
    <h3>Сформировать за выбранный период </h3>
    <?=$form->field($count_model, 'start_time')->widget(DatePicker ::classname(), [
        'dateFormat' => 'dd.MM.yyyy',
        'language' => 'ru',
        'clientOptions' => [
            'yearRange' => '2015:2025',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'firstDay' => '1',
        ]
    ])->label('Начало') ?>
    <?=$form->field($count_model, 'stop_time')->widget(DatePicker ::classname(), [
        'dateFormat' => 'dd.MM.yyyy',
        'language' => 'ru',
        'clientOptions' => [
            'yearRange' => '2015:2025',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'firstDay' => '1',
        ]
    ])->label('Конец  ')  ?>
    <?=Html::submitButton('Отфильтровать'); ?>
    <?php ActiveForm::end(); ?>
    <hr>

    <?php $form = ActiveForm::begin(); ?>
    <h3>Сформировать по определенному IP</h3>
    <?=$form->field($count_model, 'ip', [
        'inputOptions' => [
            'size'=> 20,
        ]])->textInput(['value'=>'127.0.0.1'])->label('IP') ?>
    <?=Html::submitButton('Отфильтровать'); ?>
    <?php ActiveForm::end(); ?>
    <hr>