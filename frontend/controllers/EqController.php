<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Eq;
use frontend\models\EqSearch;
use frontend\models\Userlite;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Object;

/**
 * EqController implements the CRUD actions for Eq model.
 */
class EqController extends Controller
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
     * Lists all Eq models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EqSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Eq model.
     * @param integer $eq_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionView($eq_id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($eq_id, $user_id),
        ]);
    }

    /**
     * Creates a new Eq model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Eq();
        $users = new Userlite();

        if (Yii::$app->request->isAjax && $model->load($_POST) && $users($_POST)){
            Yii::$app->response->format = 'json';

            //return
            echo \yii\widgets\ActiveForm::validate($model)." and ".\yii\widgets\ActiveForm::validate($users) ;
            die;
        }

        if ($model->load(Yii::$app->request->post()) and $users->load(Yii::$app->request->post())) {

            $users->user_id = $users->find()->max('user_id') + 1 ;
            $model->user_id = $users->user_id;
            $users->save();
        	$model->save();

        	return $this->redirect(['view', 'eq_id' => $model->eq_id, 'user_id' => $model->user_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            	'users' => $users,
            ]);
        }
    }

    /**
     * Updates an existing Eq model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $eq_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionUpdate($eq_id, $user_id)
    {
        $model = $this->findModel($eq_id, $user_id);


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'eq_id' => $model->eq_id, 'user_id' => $model->user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Eq model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $eq_id
     * @param integer $user_id
     * @return mixed
     */
    public function actionDelete($eq_id, $user_id)
    {
        $this->findModel($eq_id, $user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Eq model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $eq_id
     * @param integer $user_id
     * @return Eq the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($eq_id, $user_id)
    {
        if (($model = Eq::findOne(['eq_id' => $eq_id, 'user_id' => $user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
