<?php

use yii\helpers\Html;

$this->title = 'User panel';
$this->registerJsFile('https://js.stripe.com/v3/');
$this->registerJsFile(Yii::getAlias('@web') . '/js/checkoutDonation.js');
?>
<div class="container">
    <h1>Panel de Usuario</h1>
    <div class="row">
        <div class="col-md-5 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3>usuario: <?= $user->username; ?></h3>
                </div>
                <div class="card-body">
                    <h3>email: <?= $user->email ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-5 text-center">
            <?= HTMl::img(Yii::getAlias('@web') . '/img/fiesta.gif', ['class' => 'img-thumbnail']) ?>
            <div style="color:#999;margin:1em 0">
                Contribuye con 1€ para mejorar la web
            </div>
            <button id="btn" class="btn btn-primary btn-xs">Donacion</button>
        </div>
    </div>
    <hr>

    <div class="row text-center ">
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/bronze.jpg', ['class' => 'card-img-top', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción bronze</h5>
                    <button id="btn" class="btn btn-primary btn-xs">Únete por 1€</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/silver.jpg', ['class' => 'card-img-top ', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción silver</h5>
                    <button id="btn" class="btn btn-primary btn-xs">Únete por 5€</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/gold.jpg', ['class' => 'card-img-top', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción gold</h5>
                    <button id="btn" class="btn btn-primary btn-xs">Únete por 10€</button>
                </div>
            </div>
        </div>
    </div>
</div>
