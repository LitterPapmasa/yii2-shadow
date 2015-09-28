<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Userlite */

$this->title = 'Create Userlite';
$this->params['breadcrumbs'][] = ['label' => 'Userlites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
