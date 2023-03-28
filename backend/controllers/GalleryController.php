<?php

namespace app\controllers;

use Yii;
use app\models\Gallery;
use app\models\GallerySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * GalleryController implements the CRUD actions for Gallery model.
 */
class GalleryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],

            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','index'],
                'rules' => [
                    // [
                    //     'allow' => true,
                    //     'actions' => ['index'],
                    //     'roles' => ['?'],
                    // ],
                    [
                        'allow' => true,
                        'actions' => ['create','index'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Gallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gallery model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Gallery();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate()
    {
        $model = new Gallery();


        if ($model->load(Yii::$app->request->post())) {
            

            if (!empty(UploadedFile::getInstance($model, 'img_path'))) {
                $model->imageFile = UploadedFile::getInstance($model, 'img_path'); // get image

                // get a random number as the image name
                $img_name = mt_rand();
                $img_path = "img/uploads/gallery/".$img_name;
                // save it to the variable 
                $model->img_path = $img_path.'.'.$model->imageFile->extension;
                // upload image to folder
                if (!$model->upload($img_name)) { 
                    echo "error";
                    exit();
                // todo
                // find a way to add errrs to an array
                }

            }else{
                $model->img_path = "dd";
            }


             // save model
            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);

                exit();
            }else{
                echo "<pre>";
                print_r($model->getErrors());
                echo "</pre>";
            }
        }else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    } // end method

    /**
     * Updates an existing Gallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionUpdate($id)
    {
        $model                  = $this->findModel($id);
        $first_model_imgname    = $model->img_path;

        if ($model->load(Yii::$app->request->post())) {

            // GET THE IMAGE UPLOADED
            $image_instance= $model->imageFile = UploadedFile::getInstance($model, 'img_path'); // get image

            // UPLOAD IMAGE TO FOLDER
            if ($image_instance) {
              
                $img_name = mt_rand(); // get a random number as the image name
                // Create the directory path where the image will be saved to
                $img_path = "img/uploads/gallery/".$img_name;
                // save the directory path created above to the model to be saved
                $model->img_path = $img_path.'.'.$model->imageFile->extension;

                // Upload the image to the directory
                if ($model->upload($img_name) === false) { 
                    echo "アップロードできませんでした。";
                    exit();
                }
            
            // exit();
            }else{
                // if there is no image to be saved, set the previous image path as the model attribute value. 
                $model->img_path=$first_model_imgname;
            }

            

            // save model
            if ($model->save(false)) {
            
                return $this->redirect(['view', 'id' => $model->id]);
                exit();
            }else{
                echo "<pre>";
                print_r($model->getErrors());
                echo "</pre>";
            }
                
           
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Gallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallery::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
