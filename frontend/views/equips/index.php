<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquipsSearch */
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
            'pass',
            'eq_inv',
            'eq_type',
            'describe',
            // 'change_date',
            // 'eq_created',
            'user.fname', 		//'user_id',
            
        	'user.lname',
        	['attribute' => 'user_id',
        	 'value' => 'user.user_id'
   			],
        	//'user.company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
