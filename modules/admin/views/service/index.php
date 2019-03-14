<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label'=>'service_id',
                'format'=>'Html',
                'value' => function($data){
                    return $data->catservice->name ? $data->catservice->name : 'Самостоятельная категория';
                }
            ],
           // 'service_id',
            'name',
            'content:html',
            [
                'label'=>'image',
                'format'=>'Html',
                'value' => function($data){
                    return Html::img($data->getImage(),['width'=>100]);
                }
            ],
            //'image',
            // 'price',
            // 'date',
            // 'visible',
            // 'keywords',
            // 'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
