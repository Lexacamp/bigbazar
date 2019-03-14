<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="product-form">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Фото', ['class' =>  'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>

