<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Wifi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wifi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ssid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dev_login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dev_pass')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reboot_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_create')->textInput(['value' => date("Y-m-d H:i:s")]) ?>

    <?= $form->field($model, 'show')->dropDownList( [ 'enable' => 'Enable', 'disable' => 'Disable', ], ['selection' => 'Enable']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
