<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Equips */

$this->title = $model->eq_id;
$this->params['breadcrumbs'][] = ['label' => 'Equips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equips-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->eq_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->eq_id], [
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
            'eq_id',
            'pass',
            'eq_inv',
            'eq_type',
            'describe',
            'change_date',
            'eq_created',
            'user_id',
        ],
    ]) ?>

</div>
