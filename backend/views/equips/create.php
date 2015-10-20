<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Equips */

$this->title = 'Create Equips';
$this->params['breadcrumbs'][] = ['label' => 'Equips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equips-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
