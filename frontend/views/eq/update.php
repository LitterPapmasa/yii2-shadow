<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Eq */

$this->title = 'Update Eq: ' . ' ' . $model->eq_id;
$this->params['breadcrumbs'][] = ['label' => 'Eqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eq_id, 'url' => ['view', 'eq_id' => $model->eq_id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eq-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
