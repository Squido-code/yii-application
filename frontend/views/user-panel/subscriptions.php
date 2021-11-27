<?php

use common\widgets\Alert;
use yii\helpers\Html;

$this->title = 'subscriptions';
$this->registerJsFile('https://js.stripe.com/v3/');
$this->registerJsFile(Yii::getAlias('@web') . '/js/checkout.js');
?>
<?= Alert::widget() ?>

<div class="container">
    <h1 class="text-center p-3">Subscripciones</h1>
    <hr>
    <div class="row text-center ">
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/bronze.jpg', ['class' => 'card-img-top', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción bronze</h5>
                    <button id="bronze" class="btn btn-primary btn-xs">Únete por 1€</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/silver.jpg', ['class' => 'card-img-top ', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción silver</h5>
                    <button id="silver" class="btn btn-primary btn-xs">Únete por 5€</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/gold.jpg', ['class' => 'card-img-top', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción gold</h5>
                    <button id="gold" class="btn btn-primary btn-xs">Únete por 10€</button>
                </div>
            </div>
        </div>
    </div>
</div>
