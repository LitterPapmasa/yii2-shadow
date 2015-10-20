<?php

namespace backend\controllers;

use Yii;
use backend\models\Users;
use backend\models\UsersSearch;
use backend\models\Equips;
use backend\models\EquipsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Object;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $searchEquips = new EquipsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProviderEq =  $searchEquips->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
        	'searchEquips' => $searchEquips,
            'dataProvider' => $dataProvider,
        	'dataProviderEq' => $dataProviderEq,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $equips = new Equips();
        $model = new Users();

        if ($model->load(Yii::$app->request->post()) && $equips->load(Yii::$app->request->post())) {
        	
        	// Make autoincrement for Users
        	if ($model->find()->max('user_id') === null ){
        		$model->user_id = 0;
        	} else{
        		$model->user_id = $model->find()->max('user_id') + 1;
        	}
        	
        	$model->date_create = date('Y-m-d h:m:s');
        	$model->user_status = "Active";
        	
        	// Make autoincrement for Equips
        	if ($equips->find()->max('eq_id') === null ){
        		$equips->eq_id = 0;
        	} else{
        		$equips->eq_id = $equips->find()->max('eq_id') + 1;
        	}
        	$equips->user_id = $model->user_id;
        	$equips->status = "Inuse";
        	
        	$equips->save();
        	$model->save();
			
        	return $this->redirect(['view', 'id' => $model->user_id]);//'eq_id' => $equips->eq_id,'user_id' => $equips->user_id]);
        } else {
            return $this->render('create', [
                'equips' => $equips,
            	'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
