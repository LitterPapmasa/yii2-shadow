<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Equips */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equips-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eq_id')->textInput() ?>

    <?= $form->field($model, 'eq_type')->dropDownList([ 'PC' => 'PC', 'MAC' => 'MAC', 'iMac' => 'IMac', 'Monitor' => 'Monitor', 'PenPad' => 'PenPad', 'Printer' => 'Printer', 'Scaner' => 'Scaner', 'Other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eq_inv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eq_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eq_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eq_boot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'last_user_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Inuse' => 'Inuse', 'Storehouse' => 'Storehouse', 'Broken' => 'Broken', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eq_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
