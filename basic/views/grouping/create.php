<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Grouping */

$this->title = 'Create Grouping';
$this->params['breadcrumbs'][] = ['label' => 'Groupings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grouping-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
