<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use \kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Users;
use yii\widgets\Pjax;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'showPageSummary'=>true,
    'pjax'=>true,
    'striped'=>true,
    'hover'=>true,
    'panel'=>['type'=>'primary', 'heading'=>'Shadow list'],
    'columns'=>[
        ['class'=>'kartik\grid\SerialColumn'],
    	[
    			'attribute'=>'fname',
    			'width'=>'100px',
    			'group'=>true,
    			'subGroupOf'=>1
    	],
        [
            'attribute'=>'lname',
            'width'=>'120px',
            'group'=>true,  // enable grouping
            'subGroupOf'=>1
        ],

        [
            'attribute'=>'company',
            'width'=>'200px',
            'value'=>function ($model, $key, $index, $widget) {
                return $model->company;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            //'filter'=>ArrayHelper::getValue($companies,'users.company'),
            'filter'=>ArrayHelper::map(Users::find()->asArray()->all(), 'company', 'company'),
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Any category'],
            'group'=>true,  // enable grouping
            'subGroupOf'=>1 // supplier column index is the parent group
        ],
        [
            'attribute'=>'equips.eq_type',
        	'width'=>'80px',
            'pageSummary'=>'Type',
            'pageSummaryOptions'=>['class'=>'text-right text-warning'],

        ],
        [
            'attribute'=>'inventars',
        	'value' => 'equips.eq_inv',
            'width'=>'150px',
            'hAlign'=>'right',
           // 'format'=>['decimal', 2],
//             'pageSummary'=>true,
//             'pageSummaryFunc'=>GridView::F_AVG,
//             'filter' =>	Html::tag(
//                 'div',
//                 Html::tag('div', Html::activeTextInput($searchEquips, 'eq_inv', ['class' => 'form-control']), ['class' => 'col-xs-6']),
//                 ['class' => 'row']),
        ],
        [
            'attribute'=>'equips.eq_desc',
            'width'=>'150px',
            'hAlign'=>'right',

//             'format'=>['decimal', 0],
//             'pageSummary'=>true
        ],
        [
        'attribute'=>'equips.eq_update',
        'width'=>'150px',
        'hAlign'=>'right',
        'group'=>true,

        //             'format'=>['decimal', 0],
        //             'pageSummary'=>true
        ],
        [
        'attribute'=>'date_create',
        'width'=>'150px',
        'hAlign'=>'right',
        'group'=>true,
        'subGroupOf'=>1
        //             'format'=>['decimal', 0],
        //             'pageSummary'=>true
        ],
        [
        'attribute'=>'user_status',
        'width'=>'50px',
        'hAlign'=>'right',
        'group'=>true,
        'subGroupOf'=>1
        //             'format'=>['decimal', 0],
        //             'pageSummary'=>true
        ],

//         [
//             'class'=>'kartik\grid\FormulaColumn',
//             'header'=>'Amount In Stock',
//             'value'=>function ($model, $key, $index, $widget) {
//                 $p = compact('model', 'key', 'index');
//                 return $widget->col(4, $p) * $widget->col(5, $p);
//             },
//             'mergeHeader'=>true,
//             'width'=>'150px',
//             'hAlign'=>'right',
//             'format'=>['decimal', 2],
//             'pageSummary'=>true
//         ],
    ],
]);

    ?>


</div>
