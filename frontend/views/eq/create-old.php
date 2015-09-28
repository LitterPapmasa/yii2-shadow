<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Eq */

$this->title = 'Create Eq';
$this->params['breadcrumbs'][] = ['label' => 'Eqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eq-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
