<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $showInactive boolean */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'active',
            ['class' => 'yii\grid\Column', 'content' => function($model, $key, $index, $column) {
                return Html::a('Edit', ['update', 'id' => $model->id]);
            }],
        ],
    ]); ?>

    <p>
        <?php
            if ($showInactive) {
                echo(Html::a('Hide inactive items', ['index']));
            } else {
                echo(Html::a('Show inactive items', ['index', 'showinactive' => 1]));
            }
        ?>
    </p>

</div>
