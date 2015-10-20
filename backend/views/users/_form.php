<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- -------- model ------------------------------------------- -->

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->dropDownList([ 'Pleon' => 'Pleon', 'AGL' => 'AGL', 'MD' => 'MD', 'TALAN' => 'TALAN', ], ['prompt' => '']) ?>

    <?php // $form->field($model, 'user_status')->dropDownList([ 'Active' => 'Active', 'Passive' => 'Passive', ], ['Value' => 'Active']) ?>

    
    <!-- -------- Equipment --------------------------------------- -->

    <?= $form->field($equips, 'eq_type')->dropDownList([ 'PC' => 'PC', 
    													 'MAC' => 'MAC', 
											    		 'iMac' => 'IMac', 
											    		 'Monitor' => 'Monitor', 
											    		 'PenPad' => 'PenPad', 
											    		 'Printer' => 'Printer', 
											    		 'Scaner' => 'Scaner', 
											    		 'Other' => 'Other', 
											    ], ['prompt' => '']) ?>

    <?= $form->field($equips, 'eq_inv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($equips, 'eq_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($equips, 'eq_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($equips, 'eq_boot')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($equips, 'eq_update')->textInput(['value'=>date('Y-m-d h:m:s')]) ?>

    <?php //echo  $form->field($equips, 'last_user_id')->textInput() ?>

    <?php // $form->field($equips, 'status')->dropDownList([ 'Inuse' => 'Inuse', 'Storehouse' => 'Storehouse', 'Broken' => 'Broken', ], ['prompt' => '']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
