<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EquipsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equips-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'eq_id') ?>

    <?= $form->field($model, 'eq_type') ?>

    <?= $form->field($model, 'eq_inv') ?>

    <?= $form->field($model, 'eq_desc') ?>

    <?= $form->field($model, 'eq_pass') ?>

    <?php // echo $form->field($model, 'eq_boot') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'last_user_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'eq_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
