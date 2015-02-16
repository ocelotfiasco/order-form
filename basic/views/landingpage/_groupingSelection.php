<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $groupings Array */


?>
<h3>Available Items</h3>
<div class="groupings">
<?= Html::checkboxList('groupings', [], $groupings); ?>
</div>