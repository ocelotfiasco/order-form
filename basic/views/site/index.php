<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Laning Page Generator';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">This is the demo landing page generator.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <h2 class="text-center">Available landing pages</h2>

                <?php 
                foreach($landingPages as $lp) {
                    echo(Html::a($lp['name'], ['landingpage/display', 'id' => $lp['id']], ['class' => 'btn btn-info btn-block']));   
                }
                ?>

            </div>
        </div>

    </div>
</div>
