<?php

use yii\helpers\Html;

?>

<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>

    <div class="navbar-brand text-center text-lg-left">
        <a href="/user-panel/index" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_light.png" class="d-none d-sm-block" alt="Logo">
            <img src="../../../../global_assets/images/logo_icon_light.png" class="d-sm-none" alt="Logo">
        </a>
    </div>
    <ul class="navbar-nav flex-row ml-auto justify-content-end align-items-center">

        <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
            <a
                    class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100"
                    data-toggle="dropdown">
                <img src="../../../../global_assets/images/placeholders/placeholder.png" class="rounded-pill mr-lg-2"
                     height="34" alt="">
                <span class="d-none d-lg-inline-block"><?= Yii::$app->user->identity->username ?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="/user-panel/profile" class="dropdown-item">Profile</a>
                <a href="/user-panel/subscriptions" class="dropdown-item">Subscripciones</a>
                <div class="dropdown-divider"></div>
                <?= '<a>'
                . Html::beginForm(['/user/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</a>' ?>
            </div>
        </li>
    </ul>
</div>
<!-- /main navbar -->