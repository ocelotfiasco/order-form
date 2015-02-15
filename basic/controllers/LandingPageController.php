<?php

namespace app\controllers;

use Yii;
use app\models\LandingPage;
use app\models\LandingPageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * LandingPageController implements the CRUD actions for LandingPage model.
 */
class LandingPageController extends Controller
{

    /**
     * Lists all LandingPage models.
     * @param boolean $showinactive Set to true to show inactive models
     * @return mixed
     */
    public function actionIndex($showinactive = false)
    {
        $searchParams = Yii::$app->request->queryParams;
        if (!$showinactive) {
            if (!isset($searchParams['LandingPageSearch'])) {
                $searchParams['LandingPageSearch'] = [];
            }
            $searchParams['LandingPageSearch']['active'] = 1;
        }

        $searchModel = new LandingPageSearch();
        $dataProvider = $searchModel->search($searchParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'showInactive' => $showinactive == true,
        ]);
    }

    /**
     * Creates a new LandingPage model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LandingPage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing LandingPage model.
     * If update is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Finds the LandingPage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LandingPage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LandingPage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
