<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EqSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eq-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'eq_id') ?>

    <?= $form->field($model, 'bs_pass') ?>

    <?= $form->field($model, 'eq_type') ?>

    <?= $form->field($model, 'eq_desc') ?>

    <?= $form->field($model, 'eq_inv') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
