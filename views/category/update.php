<?php

use yii\helpers\Html;
$this->context->layout='mylayout';

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = 'Update Category: ' . $model->cat_Id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cat_Id, 'url' => ['view', 'id' => $model->cat_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
