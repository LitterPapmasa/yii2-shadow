<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php // if Yii::$app->session->getFlash()?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'eqipPass'); ?>
<?php echo $form->field($model, 'user'); ?>
<?php echo $form->field($model, 'linuxName'); ?>
<?php echo $form->field($model, 'userBefore'); ?>
<?php echo $form->field($model, 'companyName'); ?>
<?php echo Html::submitButton('Submit',['class' => 'btn btn-success']); ?>