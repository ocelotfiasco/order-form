<?php

use yii\helpers\Html;
use yii\helpers\Url;

use app\assets\ItemGrouperAsset;

/* @var $this yii\web\View */
/* @var $model app\models\LandingPage */

ItemGrouperAsset::register($this);

$this->title = 'Landing Page: ' . ' ' . $model->name . ' Groupings';
$this->params['breadcrumbs'][] = ['label' => 'Landing Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name];
$this->params['breadcrumbs'][] = 'Groupings';
?>
<div class="landingpage-grouping">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <div class="row">

        <div class="col-md-3 col-sm-4">
            <h3>Available Groupings</h3>
            <div id="grp-available"></div>
        </div>

        <div class="col-md-3 col-sm-2">
        </div>

        <div class="col-md-3 col-sm-4">
            <h3>Current Groupings</h3>
            <div id="grp-content"></div>
        </div>

    </div>

</div>

<?php
$searchUrl = Url::toRoute('landingpage/available');
$contentUrl = Url::toRoute('landingpage/content');
$addUrl = Url::toRoute('landingpage/add');
$removeUrl = Url::toRoute('landingpage/remove');

$script = <<< JS
var productSelector;

$(document).ready(function() {
    productSelector = new ItemSelector({
        "groupId":$model->id,
        "searchUrl":"$searchUrl",
        "contentUrl":"$contentUrl",
        "addUrl":"$addUrl",
        "removeUrl":"$removeUrl",
        "availableSectionId":"grp-available",
        "contentSectionId":"grp-content"
    });
    productSelector.content();
    productSelector.search();
});
JS;
$this->registerJs($script);