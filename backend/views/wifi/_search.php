<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WifiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wifi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dev_id') ?>

    <?= $form->field($model, 'ssid') ?>

    <?= $form->field($model, 'pass') ?>

    <?= $form->field($model, 'dev_login') ?>

    <?= $form->field($model, 'dev_pass') ?>

    <?php // echo $form->field($model, 'reboot_url') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'show') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
