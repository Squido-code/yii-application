<?php

use yii\helpers\Html;

?>
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content container d-sm-flex">
        <div class="page-title">
            <h4><span class="font-weight-semibold">Profile</span></h4>
        </div>
        <div class="my-sm-auto ml-sm-auto mb-3 mb-sm-0">
            <?php if (isset($subscription)) {

                echo Html::a('Gestiona tu informacion de pago', ['/stripe/client-session'], ['class' => 'btn btn-primary w-100 w-sm-auto']);
            }
            ?>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content container">
    <div class="row">
        <!-- Basic card -->
        <div class="col-md-5 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Login information</h5>
                </div>

                <div class="card-body text-center">
                    <h6 class="font-weight-semibold">Username</h6>
                    <p class="mb-3"><?= Yii::$app->user->identity->username ?></p>

                    <h6 class="font-weight-semibold">Email</h6>
                    <p class="mb-3"><?= Yii::$app->user->identity->email ?></p>
                </div>
            </div>
        </div>
        <!-- /basic card -->
        <!-- subscription card-->
        <?php if (isset($subscription)) {
            echo '<div class="col-md-5 m-auto">';
            echo '<div class="card">';
            echo '<div class="card-header">';
            echo '<h5 class="card-title">Active subscription</h5>';
            echo '</div>';
            echo '<div class="card-body text-center">';
            echo '<h6 class="font-weight-semibold text-center">' . $subscription . '</h6>';
            echo HTMl::img('/img/' . $subscription . '.jpg', ['class' => 'card-img-top', 'style' => 'width: 220px; height: 120px;']);
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

</div>
<!-- /content area -->


