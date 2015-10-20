<?php

use yii\helpers\Html;
use yii\grid\GridView;


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
        'id' => 'tablegrid',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'user_id',
            [
            		'attribute' => 'faname',
            		'label' => "First and Last user name",
            		'value' => function($data)
            			{
							return $data->fname.' '.$data->lname;
            			},
            		'filter' =>	Html::tag(
            				'div',
            					Html::tag('div', Html::activeTextInput($searchModel, 'fname', ['class' => 'form-control']), ['class' => 'col-xs-6']) .
            					Html::tag('div', Html::activeTextInput($searchModel, 'lname', ['class' => 'form-control']), ['class' => 'col-xs-6']),
            					['class' => 'row']),
            ],
            'company',

			['attribute' => 'eq_pass',
				'value' => function($data)
				{
					return $data->equips->eq_pass.' '.$data->equips->eq_pass;
				} ,

			//'equips.eq_pass',
				'filter' =>	Html::tag(
							'div',
							Html::tag('div', Html::activeTextInput($searchEquips, 'eq_pass', ['class' => 'form-control']), ['class' => 'col-xs-6']),
							['class' => 'row']),
			],
        	['attribute' => 'type', 'value' => 'equips.eq_type'],
        	['attribute' => 'user_id', 'value' => 'equips.eq_inv'],
        	['attribute' => 'describe', 'value' => 'equips.eq_desc'],
//         		[
//         		'filter' =>
//         		Html::tag(
//         				'div',
//         				Html::tag('div', Html::activeTextInput($searchModel, 'date_from', ['class' => 'form-control']), ['class' => 'col-xs-6']) .
//         				Html::tag('div', Html::activeTextInput($searchModel, 'date_to', ['class' => 'form-control']), ['class' => 'col-xs-6']),
//         				['class' => 'row']
//         		),
//         		'attribute' => 'created_at',
//         		'format' => 'datetime',
//         		],
            'date_create',
        	'user_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

//     echo GridView::widget([
//     		'dataProvider' => $dataProviderEq,
//     		'filterModel' => $searchEquips,
//     		'columns' => [
//     				['class' => 'yii\grid\SerialColumn'],
//     				'eq_pass',
//     		]
//     ]);
    ?>
      <?php
    // You only need add this,
    $this->registerJs('
        var gridview_id = "tablegrid"; // specific gridview
        var columns = [2]; // index column that will grouping, start 1

        /*
        DON\'T EDIT HERE

http://www.hafidmukhlasin.com

        */
        var column_data = [];
            column_start = [];
            rowspan = [];

        for (var i = 0; i < columns.length; i++) {
            column = columns[i];
            column_data[column] = "";
            column_start[column] = null;
            rowspan[column] = 1;
        }

        var row = 1;
        $(gridview_id+" table > tbody  > tr").each(function() {
            var col = 1;
            $(this).find("td").each(function(){
                for (var i = 0; i < columns.length; i++) {
                    if(col==columns[i]){
                        if(column_data[columns[i]] == $(this).html()){
                            $(this).remove();
                            rowspan[columns[i]]++;
                            $(column_start[columns[i]]).attr("rowspan",rowspan[columns[i]]);
                        }
                        else{
                            column_data[columns[i]] = $(this).html();
                            rowspan[columns[i]] = 1;
                            column_start[columns[i]] = $(this);
                        }
                    }
                }
                col++;
            })
            row++;
        });
    ');
    ?>


</div>
