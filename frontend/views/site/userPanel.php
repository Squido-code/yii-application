<?php

$this->title = 'User panel';
$this->params['breadcrumbs'][] = $this->title;
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
        <div class="col-md-5">
            <div style="color:#999;margin:1em 0">
                Contribuye con 1€ para mejorar la web
            </div>
            <button id="btn" class="btn btn-primary btn-xs">Donacion</button>
            <?php $this->registerJsFile('https://js.stripe.com/v3/');
            $this->registerJsFile(Yii::getAlias('@web') . '/js/checkoutDonation.js'); ?>
        </div>
    </div>

</div>
