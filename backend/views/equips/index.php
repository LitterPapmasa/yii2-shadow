<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EquipsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equips-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Equips', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'eq_id',
            'eq_type',
            'eq_inv',
            'eq_desc',
            'eq_pass',
            'eq_boot',
        	[ 'attribute' => 'Name',
        	  'value' => 'users.fname',
        	],
        	[ 'attribute' => 'user_id',
        	  'value' => 'users.lname',
        	],

             'last_user_id',
             'status',
             'eq_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
