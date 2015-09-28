<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php /* if (Yii::$app->session->getFlash('success')) {

       echo  '<div class="alert alert-success">'.Yii::$app->session->getFlash('success').'</div>';
      }
      */
?>

<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'name');?>
<?= $form->field($model, 'email');?>

<?= Html::submitButton("Submit", ['class'=>'btn'])?>

