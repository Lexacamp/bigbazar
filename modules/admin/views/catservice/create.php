<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catservice */

$this->title = 'Create Catservice';
$this->params['breadcrumbs'][] = ['label' => 'Catservices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catservice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
