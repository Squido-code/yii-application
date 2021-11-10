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
                        <!--                            <div class="font-size-sm line-height-sm opacity-50">-->
                        <!--                                Senior developer-->
                        <!--                            </div>-->
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
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="index" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>
									Dashboard
								</span>
                    </a>
                </li>
                <!-- /main -->

                <!-- Layout -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Layout</div>
                    <i class="icon-menu" title="Layout options"></i></li>
                <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                    <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
                        <li class="nav-item"><a href="layout_static.html" class="nav-link">Static layout</a></li>
                        <li class="nav-item"><a href="layout_no_header.html" class="nav-link">No header</a></li>
                        <li class="nav-item"><a href="layout_no_footer.html" class="nav-link">No footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_fixed_header.html" class="nav-link">Fixed header</a></li>
                        <li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_2_sidebars_1_side.html" class="nav-link">2 sidebars on 1
                                side</a></li>
                        <li class="nav-item"><a href="layout_2_sidebars_2_sides.html" class="nav-link">2 sidebars on 2
                                sides</a></li>
                        <li class="nav-item"><a href="layout_3_sidebars.html" class="nav-link">3 sidebars</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_boxed_page.html" class="nav-link">Boxed page</a></li>
                        <li class="nav-item"><a href="layout_boxed_content.html" class="nav-link active">Boxed
                                content</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Menu levels">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third
                                        level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i>
                                                Fourth level</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i>
                                                Fourth level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third
                                        level</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a>
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