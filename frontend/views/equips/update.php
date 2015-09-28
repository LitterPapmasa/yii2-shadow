<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Equips */

$this->title = 'Update Equips: ' . ' ' . $model->eq_id;
$this->params['breadcrumbs'][] = ['label' => 'Equips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eq_id, 'url' => ['view', 'id' => $model->eq_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="equips-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
