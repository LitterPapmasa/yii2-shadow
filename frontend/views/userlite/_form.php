<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Userlite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userlite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->dropDownList([ 'AGL' => 'AGL', 'MD' => 'MD', 'Pleon' => 'Pleon', 'Talan' => 'Talan', 'Clever' => 'Clever', 'MC' => 'MC', 'Visage' => 'Visage', 'CatMedia' => 'CatMedia', 'MadMedia' => 'MadMedia', 'NewMix' => 'NewMix', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'change_date')->textInput(['value'=>date('Y-m-d h:m:s')]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
