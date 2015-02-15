<?php

namespace app\controllers;

use Yii;
use app\models\Grouping;
use app\models\GroupingSearch;
use app\models\ProductGrouping;
use app\models\Product;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Json;
use yii\filters\VerbFilter;

/**
 * GroupingController implements the CRUD actions for Grouping model.
 */
class GroupingController extends Controller
{

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
     * Adds a product to a grouping.
     * @return string JSON string of products in the grouping or false on failure.
     */
    public function actionAdd()
    {
        if (Yii::$app->getRequest()->Post('groupingId') && Yii::$app->getRequest()->Post('productId')) {
            $groupingId = (int)Yii::$app->getRequest()->Post('groupingId');
            $productId = (int)Yii::$app->getRequest()->Post('productId');
            $model = ProductGrouping::find()->andWhere(['grouping_id' => $groupingId])->
                andWhere(['product_id' => $productId])->one();
            if (!$model) {
                $model = new ProductGrouping();
                $model->grouping_id = $groupingId;
                $model->product_id = $productId;
                if ($model->validate()) {
                    $model->save();
                }
            }

            $products = Product::find()->inGrouping($groupingId)->active()->
            asArray()->all();
        } else {
            $products = false;
        }
           
        \Yii::$app->response->format = 'json';
        return $products;
    }

    /**
     * Gets a list of all active products not in a grouping.
     * @param integer $id The Id of the grouping
     * @return string JSON product data
     */
    public function actionAvailable($id)
    {
        $products = Product::find()->notInGrouping($id)->active()->
            asArray()->all();
        \Yii::$app->response->format = 'json';
        return $products;
    }

    /**
     * Manages the content of a group.
     * @param integer $id The Id of the group
     * @return mixed
     */
    public function actionProduct($id)
    {
        $model = $this->findModel($id);
    
        return $this->render('product', [
            'model' => $model,
        ]);
    }

    /**
     * Lists all Grouping models.
     * @param boolean $showinactive Set to true to show inactive models
     * @return mixed
     */
    public function actionIndex($showinactive = false)
    {
        $searchParams = Yii::$app->request->queryParams;
        if (!$showinactive) {
            if (!isset($searchParams['GroupingSearch'])) {
                $searchParams['GroupingSearch'] = [];
            }
            $searchParams['GroupingSearch']['active'] = 1;
        }

        $searchModel = new GroupingSearch();
        $dataProvider = $searchModel->search($searchParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'showInactive' => $showinactive == true,
        ]);
    }

    /**
     * Creates a new Grouping model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Grouping();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Gets a list of all active products in a grouping.
     * @param integer $id The Id of the grouping
     * @return string JSON product data
     */
    public function actionContent($id)
    {
        $products = Product::find()->inGrouping($id)->active()->
            asArray()->all();
        \Yii::$app->response->format = 'json';
        return $products;
    }

    /**
     * Removes a product from a grouping.
     * @return string JSON string of products in the grouping or false on failure.
     */
    public function actionRemove()
    {
        if (Yii::$app->getRequest()->Post('groupingId') && Yii::$app->getRequest()->Post('productId')) {
            $groupingId = (int)Yii::$app->getRequest()->Post('groupingId');
            $productId = (int)Yii::$app->getRequest()->Post('productId');
            $model = ProductGrouping::find()->andWhere(['grouping_id' => $groupingId])->
                andWhere(['product_id' => $productId])->one();
            if ($model) {
                $model->delete();
            }

            $products = Product::find()->inGrouping($groupingId)->active()->
            asArray()->all();
        } else {
            $products = false;
        }
           
        \Yii::$app->response->format = 'json';
        return $products;
    }

    /**
     * Updates an existing Grouping model.
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
     * Finds the Grouping model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Grouping the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Grouping::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
