<?php

?>
<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="../../../../global_assets/images/placeholders/placeholder.png" class="rounded-circle"
                             alt="">
                    </a>

                    <div class="media-body mt-auto mb-auto">
                        <div class="font-weight-semibold"><?= Yii::$app->user->identity->username ?></div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <button type="button"
                                class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button"
                                class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Principal</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="/user-panel/index" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>Panel de usuario</span>
                    </a>
                </li>
                <!-- /main -->

                <!-- Layout -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Opciones</div>
                    <i class="icon-menu" title="Layout options"></i></li>
                <?php if (isset($this->context->subscription)) {
                    echo '<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">';
                    echo '<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>' . $this->context->subscription . '</span></a>';
                    switch ($this->context->subscription) {
                        case Yii::$app->params['sub_name_1']:
                            include Yii::$app->basePath . '/views/layouts/subscriptions_options/sub_uno_nav_options.php';
                            break;
                        case Yii::$app->params['sub_name_2']:
                            include Yii::$app->basePath . '/views/layouts/subscriptions_options/sub_dos_nav_options.php';
                            break;
                        case Yii::$app->params['sub_name_3']:
                            include Yii::$app->basePath . '/views/layouts/subscriptions_options/sub_tres_nav_options.php';
                            break;
                    }
                    echo '</li>';
                } ?>

                <li class="nav-item nav-item-submenu ">
                    <a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Información complementaria</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
                        <li class="nav-item"><a href="/user-panel/menu" class="nav-link">menú</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="/user-panel/caracteristicas" class="nav-link">características</a>
                        </li>
                    </ul>
                </li>
                <!-- /layout -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->