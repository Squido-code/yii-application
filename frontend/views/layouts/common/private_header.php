
<!-- Main navbar -->
<div class="navbar navbar-expand-lg navbar-dark navbar-static px-0">
    <div class="container px-2 px-lg-3">
        <div class="d-flex flex-1 d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-paragraph-justify3"></i>
                <span class="badge badge-mark border-warning m-1"></span>
            </button>
        </div>

        <div class="navbar-brand wmin-0 mr-lg-5">
            <a href="index.html" class="d-inline-block">
                <img src="../../../../global_assets/images/logo_light.png" class="d-none d-sm-block" alt="">
                <img src="../../../../global_assets/images/logo_icon_light.png" class="d-sm-none" alt="">
            </a>
        </div>

<!--        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item">-->
<!--                    <a href="#" class="navbar-nav-link">-->
<!--                        <i class="icon-stack2 mr-3"></i>-->
<!--                        Collapsible link-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <li class="nav-item">-->
<!--                    <a href="#" class="navbar-nav-link">-->
<!--                        <i class="icon-people"></i>-->
<!--                        <span class="d-lg-none ml-3">Collapsible link with icon</span>-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <li class="nav-item dropdown">-->
<!--                    <a href="#" class="navbar-nav-link" data-toggle="dropdown">-->
<!--                        <i class="icon-bell2"></i>-->
<!--                        <span class="d-lg-none ml-3">Collapsible link with menu</span>-->
<!--                        <span class="badge badge-warning rounded-pill ml-auto ml-lg-0">3</span>-->
<!--                    </a>-->
<!---->
<!--                    <div class="dropdown-menu">-->
<!--                        <a href="#" class="dropdown-item">Menu item 1</a>-->
<!--                        <a href="#" class="dropdown-item">Menu item 2</a>-->
<!--                        <a href="#" class="dropdown-item">Menu item 3</a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">Menu item 4</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!---->
        <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
<!--            <li class="nav-item">-->
<!--                <a href="#" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="dropdown">-->
<!--                    <i class="icon-envelop"></i>-->
<!--                    <span class="d-none d-lg-inline-block ml-2">Link</span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li class="nav-item">-->
<!--                <a href="#" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="dropdown">-->
<!--                    <i class="icon-bell2"></i>-->
<!--                    <span class="badge badge-warning rounded-pill ml-auto ml-lg-0">3</span>-->
<!--                </a>-->
<!--            </li>-->

            <li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
                <a href="#" class="navbar-nav-link navbar-nav-link-toggler d-inline-flex align-items-center h-100 dropdown-toggle" data-toggle="dropdown">
                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-pill mr-lg-2" height="34" alt="">
                    <span class="d-none d-lg-inline-block"><?= Yii::$app->controller->user->username;?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Menu item 1</a>
                    <a href="#" class="dropdown-item">Menu item 2</a>
                    <a href="#" class="dropdown-item">
                        Menu item 3
                        <span class="badge badge-primary badge-pill ml-auto">2</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Menu item 4</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Secondary navbar -->
<div class="navbar navbar-expand navbar-light px-0">
    <div class="container px-0 px-sm-3">
        <div class="overflow-auto overflow-lg-visible scrollbar-hidden flex-1">
            <ul class="navbar-nav flex-row text-nowrap">
                <li class="nav-item">
                    <a href="../full/index.html" class="navbar-nav-link">
                        Home
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg mega-menu-full">
                    <a href="#" class="navbar-nav-link dropdown-toggle active" data-toggle="dropdown">
                        Navigation
                    </a>

                    <div class="dropdown-menu dropdown-scrollable-lg wmin-lg-300 p-0">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="font-weight-semibold border-bottom pb-2 mb-2">Navbars</div>
                                    <a href="layout_navbar_fixed.html" class="dropdown-item rounded">Fixed navbar</a>
                                    <a href="layout_navbar_hideable.html" class="dropdown-item rounded">Hideable navbar</a>
                                    <a href="layout_navbar_sticky.html" class="dropdown-item rounded">Sticky navbar</a>
                                    <a href="layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                                </div>

                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="font-weight-semibold border-bottom pb-2 mb-2">Sidebars</div>
                                    <a href="layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1 side</a>
                                    <a href="layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2 sides</a>
                                    <a href="layout_3_sidebars.html" class="dropdown-item rounded">3 sidebars</a>
                                </div>

                                <div class="col-md-4">
                                    <div class="font-weight-semibold border-bottom pb-2 mb-2">Sections</div>
                                    <a href="layout_no_header.html" class="dropdown-item rounded">No header</a>
                                    <a href="layout_no_footer.html" class="dropdown-item rounded">No footer</a>
                                    <a href="layout_boxed_page.html" class="dropdown-item rounded active">Boxed page</a>
                                    <a href="layout_boxed_content.html" class="dropdown-item rounded">Boxed content</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-stack2 mr-2"></i>
                        Link
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-bell2"></i>
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        Dropdown
                    </a>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Menu item 1</a>
                        <a href="#" class="dropdown-item">Menu item 2</a>
                        <a href="#" class="dropdown-item">
                            Menu item 3
                            <span class="badge badge-primary badge-pill ml-auto">2</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Menu item 4</a>
                    </div>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        Multi level
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header">Header</div>
                        <a href="#" class="dropdown-item">Item 1</a>
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle">Item 2</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Item 1.1</a>
                                <a href="#" class="dropdown-item">Item 1.2</a>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">Item 1.3</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Item 1.3.1</a>
                                        <a href="#" class="dropdown-item">Item 1.3.2</a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle">Item 1.4</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Item 1.4.1</a>
                                        <a href="#" class="dropdown-item">Item 1.4.2</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item">Item 1.5</a>
                            </div>
                        </div>
                        <div class="dropdown-header">Header</div>
                        <a href="#" class="dropdown-item">Item 3</a>
                    </div>
                </li>

                <li class="nav-item ml-lg-auto">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-bell2"></i>
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        Right dropdown
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">Header</div>
                        <a href="#" class="dropdown-item">Item 1</a>
                        <div class="dropdown-submenu dropdown-submenu-left">
                            <a href="#" class="dropdown-item dropdown-toggle">Item 2</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Item 1.1</a>
                                <a href="#" class="dropdown-item">Item 1.2</a>
                                <div class="dropdown-submenu dropdown-submenu-left">
                                    <a href="#" class="dropdown-item dropdown-toggle">Item 1.3</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Item 1.3.1</a>
                                        <a href="#" class="dropdown-item">Item 1.3.2</a>
                                    </div>
                                </div>
                                <div class="dropdown-submenu dropdown-submenu-left">
                                    <a href="#" class="dropdown-item dropdown-toggle">Item 1.4</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">Item 1.4.1</a>
                                        <a href="#" class="dropdown-item">Item 1.4.2</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item">Item 1.5</a>
                            </div>
                        </div>
                        <div class="dropdown-header">Header</div>
                        <a href="#" class="dropdown-item">Item 3</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /secondary navbar -->


<!-- Page header -->
<div class="page-header">
    <div class="page-header-content container">
        <div class="page-title d-sm-flex">
            <h4><span class="font-weight-semibold">Seed</span> - Boxed page</h4>
            <div class="breadcrumb ml-0 ml-sm-auto">
                <a href="#" class="breadcrumb-item py-0"><i class="icon-home2 mr-2"></i> Home</a>
                <a href="#" class="breadcrumb-item py-0">Link</a>
                <span class="breadcrumb-item active py-0">Current</span>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->