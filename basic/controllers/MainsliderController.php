<?php

namespace app\controllers;

use app\models\Mainslider;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MainsliderController implements the CRUD actions for Mainslider model.
 */
class MainsliderController extends Controller
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
     * Lists all Mainslider models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this -> layout = 'old';

        $dataProvider = new ActiveDataProvider([
            'query' => Mainslider::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mainslider model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this -> layout = 'old';

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mainslider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $this -> layout = 'old';

        $this -> layout = 'old';
        $model = new Mainslider();

     if ($this->request->isPost){
        $model -> load($this->request->post());
        $model -> bgimage = UploadedFile::getInstance($model,'bgimage');
        $model -> bgimage->saveAs('uploads/mainslider/'.$model->bgimage->baseName.'.'.$model->bgimage->extension);
        $model -> save(false);
        return $this->redirect(['index']);
     }
     else{
        $model->loadDefaultValues();
     }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mainslider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this -> layout = 'old';

        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mainslider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this -> layout = 'old';

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mainslider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Mainslider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mainslider::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
