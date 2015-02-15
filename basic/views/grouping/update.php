<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grouping */

$this->title = 'Update Grouping: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Groupings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grouping-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
