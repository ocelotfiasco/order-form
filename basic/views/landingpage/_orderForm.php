<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $countries Array */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\Order */
?>
<div class="bg-success">
    <h3><?= Yii::$app->session->getFlash('message'); ?></h3>
</div>
<div class="bg-danger">
    <h4><?= Yii::$app->session->getFlash('error'); ?></h4>
</div>
<h3>Delivery Details</h3>

<div class="order-form">

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'address_1')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'address_2')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'address_3')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'postal')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'country_id')->dropDownList($countries) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit Order', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</div>