<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SignupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Signups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Signup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstName',
            'lastName',
            'username',
            'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
