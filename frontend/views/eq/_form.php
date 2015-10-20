<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;
use frontend\models\Userlite;

/* @var $this yii\web\View */
/* @var $model frontend\models\Eq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eq-form">

    <?php $form = ActiveForm::begin(); //['enableAjaxValidation' => true] ?>

    <?= $form->field($model, 'bs_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($users, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($users, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($users, 'company')->dropDownList([ 'AGL' => 'AGL', 'MD' => 'MD', 'Pleon' => 'Pleon', 'Talan' => 'Talan', 'Clever' => 'Clever', 'MC' => 'MC', 'Visage' => 'Visage', 'CatMedia' => 'CatMedia', 'MadMedia' => 'MadMedia', 'NewMix' => 'NewMix', ], ['prompt' => '']) ?>


	<!-- Equipment form ------------------>

    <?= $form->field($model, 'eq_type')->dropDownList([ 'PC' => 'PC', 'Mac' => 'Mac', 'iMac' => 'IMac', 'Monitor' => 'Monitor', 'Other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eq_inv')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'eq_desc')->textarea(['rows' => 3]) ?>

    <?= $form->field($users, 'change_date')->textInput(['value'=>date('Y-m-d h:m:s')])  ?>

    <?php
//     echo $form->field($model, 'user_id')->dropDownList(
//               ArrayHelper::map(Userlite::find()->Select(["user_id","CONCAT(fname, ' ', lname) AS fname"])->all(),
//                                'user_id', 'fname'),
//               ['prompt' => 'Select User']

//         ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
