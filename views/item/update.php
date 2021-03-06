<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
$this->context->layout='mylayout';

$this->title = 'Update Item: ' . $model->Item_id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Item_id, 'url' => ['view', 'id' => $model->Item_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
