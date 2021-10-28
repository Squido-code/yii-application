<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'home';
if (!Yii::$app->user->isGuest) {
    $this->registerJsFile('https://js.stripe.com/v3/');
    $this->registerJsFile(Yii::getAlias('@web') . '/js/checkout.js');
}
?>
<div class="site-index"
     style="background-image: <?php HTMl::img(Yii::getAlias('@web') . '/img/background_index.jpg') ?>">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">¡Bienvenid@!</h1>

        <p class="lead">Regístrate para ver todas las opciones.</p>
    </div>
    <hr>
    <div class="text-center">
        <p class="lead">Subscríbete para disfrutar de todas las ventajas</p>
    </div>
    <div class="row text-center">
        <div class="col-md-3 m-auto">
            <div class="card bg-light" style="width: 18rem;">
                <?= HTMl::img(Yii::getAlias('@web') . '/img/bronze.jpg', ['class' => 'card-img-top', 'style' => 'width: 286px; height: 180px;']) ?>
                <div class="card-body">
                    <h5 class="card-title">Subscripción bronze</h5>
                    <?php if (!Yii::$app->user->isGuest) {
                        echo '<button id="bronze" class="btn btn-primary btn-xs">Únete por 1€</button>';
                        echo ' <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />';
                    } else {
                        echo '<a href="site/login" class="btn btn-primary btn-xs">Únete por 1€</a>';
//                        '<button id="bronze"onClick=> class="btn btn-primary btn-xs">Únete por 1€</button>';
                    }
                    ?>
                    <!--                    <button id="bronze" class="btn btn-primary btn-xs">Únete por 1€</button>-->
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
