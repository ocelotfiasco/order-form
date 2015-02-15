<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LandingPage */

$this->title = 'Update Landing Page: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Landing Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="landing-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
