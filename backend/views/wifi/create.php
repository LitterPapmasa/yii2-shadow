<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Wifi */

$this->title = 'Create Wifi';
$this->params['breadcrumbs'][] = ['label' => 'Wifis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wifi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
