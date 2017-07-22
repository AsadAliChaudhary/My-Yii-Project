<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form ActiveForm */
?>
<div class="item">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Item_name') ?>
        <?= $form->field($model, 'Item_id') ?>
        <?= $form->field($model, 'Cat_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- item -->
