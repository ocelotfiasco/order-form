<?php

namespace app\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

use app\models\Grouping;
use app\models\LandingPage;
use app\models\LandingPageGrouping;
use app\models\LandingPageSearch;

/**
 * LandingPageController implements the CRUD actions for LandingPage model.
 */
class LandingPageController extends Controller
{

    /**
     * Adds a grouping to a landing page.
     * @return string JSON string of groupings in the landing page or false on failure.
     */
    public function actionAdd()
    {
        if (Yii::$app->getRequest()->Post('gid') && Yii::$app->getRequest()->Post('iid')) {
            $landingPageId = (int)Yii::$app->getRequest()->Post('gid');
            $groupingId = (int)Yii::$app->getRequest()->Post('iid');
            $model = LandingPageGrouping::find()->andWhere(['landing_page_id' => $landingPageId])->
                andWhere(['grouping_id' => $groupingId])->one();
            if (!$model) {
                $model = new LandingPageGrouping();
                $model->landing_page_id = $landingPageId;
                $model->grouping_id = $groupingId;
                if ($model->validate()) {
                    $model->save();
                }
            }

            $groupings = Grouping::find()->onLandingPage($landingPageId)->active()->
            asArray()->all();
        } else {
            $groupings = false;
        }
           
        \Yii::$app->response->format = 'json';
        return $groupings;
    }

    /**
     * Gets a list of all active groupings not on this landing page.
     * @param integer $id The Id of the landing page
     * @return string JSON product data
     */
    public function actionAvailable($id)
    {
        $groupings = Grouping::find()->notOnLandingPage($id)->active()->
            asArray()->all();
        \Yii::$app->response->format = 'json';
        return $groupings;
    }

    /**
     * Gets a list of all active groupings on this landing page.
     * @param integer $id The Id of the landing page
     * @return string JSON product data
     */
    public function actionContent($id)
    {
        $groupings = Grouping::find()->onLandingPage($id)->active()->
            asArray()->all();
        \Yii::$app->response->format = 'json';
        return $groupings;
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
     * Manages the groupings on a landing page.
     * @param integer $id The Id of the landing page
     * @return mixed
     */
    public function actionGrouping($id)
    {
        $model = $this->findModel($id);
    
        return $this->render('grouping', [
            'model' => $model,
        ]);
    }

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
     * Removes a grouping from a landing page.
     * @return string JSON string of groupings on the landing page or false on failure.
     */
    public function actionRemove()
    {
        if (Yii::$app->getRequest()->Post('gid') && Yii::$app->getRequest()->Post('iid')) {
            $landingPageId = (int)Yii::$app->getRequest()->Post('gid');
            $groupingId = (int)Yii::$app->getRequest()->Post('iid');
            $model = LandingPageGrouping::find()->andWhere(['landing_page_id' => $landingPageId])->
                andWhere(['grouping_id' => $groupingId])->one();
            if ($model) {
                $model->delete();
            }

            $groupings = Grouping::find()->onlandingpage($landingPageId)->active()->
            asArray()->all();
        } else {
            $groupings = false;
        }
           
        \Yii::$app->response->format = 'json';
        return $groupings;
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
     * Add verb filters so that add and remove actions
     * can only be performed via POST.
     * @return Array Behaviors
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'add' => ['post'],
                    'remove' => ['post'],
                ],
            ],
        ];
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