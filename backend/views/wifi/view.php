<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Wifi */

$this->title = $model->dev_id;
$this->params['breadcrumbs'][] = ['label' => 'Wifis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wifi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->dev_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->dev_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'dev_id',
            'ssid',
            'pass',
            'dev_login',
            'dev_pass',
            'reboot_url:url',
            'comment',
            'date_create',
            'show',
        ],
    ]) ?>

</div>
