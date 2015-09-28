<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserliteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userlites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlite-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create New User', [
            'value' => Url::to('index.php?r=userlite/create'),
            'class' => 'modalButton btn btn-success',
        ]) ?>
    </p>

    <?php
        Modal::begin([
        	'class' => 'modal',
        	'size' => 'modal-sm',
        ]);
    ?>
    <div class="modalContent"></div>
    <?php Modal::end(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if ($model->company == 'MD'){
                return ['class' => 'danger'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'fname',
            'lname',
            'company',
            'change_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
