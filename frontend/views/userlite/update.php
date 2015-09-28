<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Userlite */

$this->title = 'Update Userlite: ' . ' ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Userlites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userlite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
