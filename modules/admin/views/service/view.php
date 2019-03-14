<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Service */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Фото', ['set-image', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'service_id',
            [
                'label' => 'service_id',
                'format' => 'Html',
                'value' => function($model){
                    return $model->catservice->name ? $model->catservice->name : 'Самостоятельная категория';
                }

            ],
            'name',
            'content:ntext',
            [
                'label' => 'image',
                'format' => 'Html',
                'value' => function($model){
                    return Html::img($model->getImage(),['width'=>100]);
                }
            ],
            //'image',
            'price',
            'date',
            'visible',
            'keywords',
            'description',
        ],
    ]) ?>

</div>
