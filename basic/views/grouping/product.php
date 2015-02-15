<?php

use yii\helpers\Html;
use yii\helpers\Url;

use app\assets\ItemGrouperAsset;

/* @var $this yii\web\View */
/* @var $model app\models\Grouping */

ItemGrouperAsset::register($this);

$this->title = 'Grouping: ' . ' ' . $model->name . ' Content';
$this->params['breadcrumbs'][] = ['label' => 'Groupings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name];
$this->params['breadcrumbs'][] = 'Content';
?>
<div class="grouping-content">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <div class="row">

        <div class="col-md-3 col-sm-4">
            <h3>Available Products</h3>
            <div id="prod-available"></div>
        </div>

        <div class="col-md-3 col-sm-2">
        </div>

        <div class="col-md-3 col-sm-4">
            <h3>Current Products</h3>
            <div id="prod-content"></div>
        </div>

    </div>

</div>

<?php
$searchUrl = Url::toRoute('grouping/available');
$contentUrl = Url::toRoute('grouping/content');
$addUrl = Url::toRoute('grouping/add');
$removeUrl = Url::toRoute('grouping/remove');

$script = <<< JS
var productSelector;

$(document).ready(function() {
    productSelector = new ItemSelector({
        "groupId":$model->id,
        "searchUrl":"$searchUrl",
        "contentUrl":"$contentUrl",
        "addUrl":"$addUrl",
        "removeUrl":"$removeUrl",
        "availableSectionId":"prod-available",
        "contentSectionId":"prod-content"
    });
    productSelector.content();
    productSelector.search();
});
JS;
$this->registerJs($script);