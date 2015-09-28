<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EquipsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equips-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'eq_id') ?>

    <?= $form->field($model, 'pass') ?>

    <?= $form->field($model, 'eq_inv') ?>

    <?= $form->field($model, 'eq_type') ?>

    <?= $form->field($model, 'describe') ?>

    <?php // echo $form->field($model, 'change_date') ?>

    <?php // echo $form->field($model, 'eq_created') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
