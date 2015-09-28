<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Eq */

$this->title = $model->eq_id;
$this->params['breadcrumbs'][] = ['label' => 'Eqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eq-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'eq_id' => $model->eq_id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'eq_id' => $model->eq_id, 'user_id' => $model->user_id], [
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
            'bs_pass',
            'eq_type',
            'eq_desc:ntext',
            'eq_inv:ntext',
            'user_id',
        ],
    ]) ?>

</div>
