<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Equips */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equips-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pass')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eq_inv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eq_type')->dropDownList([ 'PC' => 'PC', 'Mac' => 'Mac', 
    													'IMac' => 'IMac', 
    													'Monitor' => 'Monitor', 
    													'Notebook' => 'Notebook', 
    													'Netbook' => 'Netbook', 
    													'Mac Air' => 'Mac Air', 
    													'Printer' => 'Printer',     		
    												   ], ['selected' => 'PC']) ?>

    <?= $form->field($model, 'describe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'change_date')->widget(
			DatePicker::className(), [
		        // inline too, not bad
		         'inline' => false, 
		         // modify template for custom rendering
		        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
		        'clientOptions' => [
		            'autoclose' => true,
		            'format' => 'yyyy-M-dd'
		        ]
			]);?>

    <?= $form->field($model, 'eq_created')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
