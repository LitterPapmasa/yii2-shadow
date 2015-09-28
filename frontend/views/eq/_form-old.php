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

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bs_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eq_type')->dropDownList([ 'PC' => 'PC', 'Mac' => 'Mac', 'iMac' => 'IMac', 'Monitor' => 'Monitor', 'Other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eq_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eq_inv')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->dropDownList(
            ArrayHelper::map(Userlite::find()->all(), 'user_id','lname','fname'),
            ['prompt' => 'Select User']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
