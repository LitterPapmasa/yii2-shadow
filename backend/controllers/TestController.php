<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use common\models\User;
use backend\models\Users;
/**
 * Site controller
 */
class TestController extends Controller
{


	public function actionIndex()
	{
		
		echo "<pre>";
// 		var_dump(Users::find()->all()->select('company'));
		
		var_dump(ArrayHelper::map(Users::find()->all(), 'company', 'company'));
		echo "</pre>";
	}
}
