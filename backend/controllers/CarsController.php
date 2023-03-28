<?php

namespace app\controllers;

use app\models\cars;
use app\models\CarsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarsController implements the CRUD actions for cars model.
 */
class CarsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all cars models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CarsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single cars model.
     * @param int $iid Iid
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($iid)
    {
        return $this->render('view', [
            'model' => $this->findModel($iid),
        ]);
    }

    /**
     * Creates a new cars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new cars();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'iid' => $model->iid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing cars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $iid Iid
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($iid)
    {
        $model = $this->findModel($iid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'iid' => $model->iid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing cars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $iid Iid
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($iid)
    {
        $this->findModel($iid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the cars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $iid Iid
     * @return cars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($iid)
    {
        if (($model = cars::findOne(['iid' => $iid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
