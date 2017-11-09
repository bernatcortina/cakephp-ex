<?php

namespace app\Controllers;

use Yii;
use app\models\Produccions;
use app\models\ProduccionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use kartik\widgets\FileInput;
use yii\web\UploadedFile;


/**
 * ProduccionsController implements the CRUD actions for Produccions model.
 */
class ProduccionsController extends Controller
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
     * Lists all Produccions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProduccionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produccions model.
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
     * Creates a new Produccions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Produccions();

        Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/fitxes_produccions/';

        if ($model->load(Yii::$app->request->post())) {
            // get the uploaded file instance. for multiple file uploads
            // the following data will return an array
            $fitxa_prod = UploadedFile::getInstance($model, 'fitxa_prod');
 
            // store the source file name
            $ext = end((explode(".", $fitxa_prod->name)));
            $model->fitxa = $model->nom.'.'.$ext;

            // the path to save file, you can set an uploadPath
            // in Yii::$app->params (as used in example below)
            $path = Yii::$app->params['uploadPath'].'/'.$model->nom;

            // comprova que l'usuari no tingui carpeta d'imatges
            // si no en te la crea i assigna permisos, sino no fa res
            if (!is_dir($path)){
                mkdir($path, 0777, true);
                chmod($path, 0777);
            }

            if($model->save()){
                // print_r($model);die();
                $fitxa_prod->saveAs($path.'/'.$model->nom.".{$ext}"); // nom amb que guarda el fitxer
                return $this->redirect(['view', 'id'=>$model->id]);
            } else {
                // error in saving model
            }
        }
            
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing Produccions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Produccions model.
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
     * Finds the Produccions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Produccions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Produccions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
