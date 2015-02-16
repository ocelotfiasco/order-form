<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\LandingPage */
/* @var $orderModel app\models\Order */

$this->title = $model->title;
?>

<h1 class="lp-header text-center"><?= $model->title ?></h1>
<div class="wrap">
    <div class="lp-container">

    	<?php $form = ActiveForm::begin(); ?>

    	<div class="row">
    		<div class="col-lg-8 col-lg-offset-2 col-md-12">

				<div class="row">
					<div class="col-md-12">
						<p class="lead"><?= $model->description ?></p>
					</div>
				</div>

				<div class="row panel panel-default">

					<div class="col-lg-3 col-lg-offset-2 col-md-6 col-sm-6">
						<?= $this->render('_groupingSelection', [
							'form' => $form,
				        	'groupings' => $groupings,
				    	]) ?>
					</div>

					<div class="col-md-6 col-sm-6">
						<?= $this->render('_orderForm', [
							'form' => $form,
					        'model' => $orderModel,
					    ]) ?>
					</div>

				</div>
			</div>
		</div>

		<?php ActiveForm::end(); ?>

	</div>
</div>