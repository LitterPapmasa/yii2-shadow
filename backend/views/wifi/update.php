<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Wifi */

$this->title = 'Update Wifi: ' . ' ' . $model->dev_id;
$this->params['breadcrumbs'][] = ['label' => 'Wifis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dev_id, 'url' => ['view', 'id' => $model->dev_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wifi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
