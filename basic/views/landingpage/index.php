<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LandingPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $showInactive boolean */

$this->title = 'Landing Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="landing-page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Landing Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'title',
            'description:ntext',
            'active',
            ['class' => 'yii\grid\Column', 'content' => function($model, $key, $index, $column) {
                return Html::a('Edit', ['update', 'id' => $model->id]);
            }],
            ['class' => 'yii\grid\Column', 'content' => function($model, $key, $index, $column) {
                return Html::a('Groupings', ['grouping', 'id' => $model->id]);
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
