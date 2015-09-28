<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eq-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Equipment', [
            'value' => Url::to('index.php?r=eq/create'),
            'class' => 'modalButton btn btn-success',
        ]) ?>
    </p>
    
    <?php
        Modal::begin([
        	'class' => 'modal',
        	'size' => 'modal-xl',
        ]);
    ?>
    <div class="modalContent"></div>
    <?php Modal::end(); ?>
    
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'eq_id',
            'bs_pass',
            'eq_type',
            'eq_desc:ntext',
            'eq_inv:ntext',
            [
                'attribute' => 'user_fname',
                'value' => 'user.fname',
            ],
            [
                'attribute' => 'user_id',
                'value' => 'user.lname',
            ],
            [
                'attribute' => 'user_company',
                'value' => 'user.company',
            ],
            [
                'attribute' => 'Change Date',
                'value' => 'user.change_date',
            ],

            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
