<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title><?php echo $title ?></title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo assets_url('css/font-face.css') ?>" rel="stylesheet" media="all">
    <!--for icons to show, let 5 come before 4.7  -->
    <link href="<?php echo assets_url('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">

    <link href="<?php echo assets_url('vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo assets_url('vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo assets_url('vendor/animsition/animsition.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/wow/animate.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/slick/slick.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo assets_url('css/theme.css') ?>" rel="stylesheet" media="all">

    <link href="<?php echo assets_url('vendor/vector-map/jqvmap.min.css') ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo assets_url('images/icon/logo.png') ?>" alt="Logo Mobile" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li> <a href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li> <a href="<?php echo site_url('SocialLinks') ?>">
                                <i class="fas fa-smile-o"></i>Social Links</a>
                        </li>

                        <li> <a href="<?php echo site_url('FooterContents') ?>">
                                <i class="fas fa-arrow-down"></i>Footer Content</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>Home Content</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                                <li>
                                    <a href="<?php echo site_url('Home') ?>">Slider Content</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Home') ?>">Section One</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Home#grids') ?>">Section Two</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Home#testimonies') ?>">Testimonials Section</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>About Content</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('About') ?>">Banner Section</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-one') ?>">Section One</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-two') ?>">Section Two</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-three') ?>">Section Three</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-four') ?>">Section Four</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-partner') ?>">Partners Section</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo site_url('ServiceContents') ?>">
                                <i class="fas fa-gears"></i>Services Content</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                                <li>
                                    <a href="">Section One</a>
                                </li>
                                <li>
                                    <a href="">Section Two</a>
                                </li>
                                <li>
                                    <a href="">Other Services</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Pricing') ?>">
                                <i class="fas fa-credit-card"></i>Pricing Content</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('FAQs') ?>">
                                <i class="fas fa-question-circle"></i>FAQs</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Blog') ?>">
                                <i class="fas fa-pencil-square"></i>Blog</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Contact') ?>">
                                <i class="fas fa-mobile-phone"></i>Contact</a>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo assets_url('images/icon/logo.png') ?>" alt="Logo Siderbar" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active"> <a href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li> <a href="<?php echo site_url('SocialLinks') ?>">
                                <i class="fas fa-smile-o"></i>Social Links</a>
                        </li>

                        <li> <a href="<?php echo site_url('FooterContents') ?>">
                                <i class="fas fa-arrow-down"></i>Footer Content</a>
                        </li>



                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>Home Content</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('Home') ?>">Slider Content</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Home') ?>">Section One</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Home#grids') ?>">Section Two</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Home#testimonies') ?>">Testimonials Section</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>About Content</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo site_url('About') ?>">Banner Section</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-one') ?>">Section One</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-two') ?>">Section Two</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-three') ?>">Section Three</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-four') ?>">Section Four</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('About#section-partner') ?>">Partners Section</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo site_url('ServiceContents') ?>">
                                <i class="fas fa-gears"></i>Services Content</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Pricing') ?>">
                                <i class="fas fa-credit-card"></i>Pricing Content</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('FAQs') ?>">
                                <i class="fas fa-question-circle"></i>FAQs</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Blog') ?>">
                                <i class="fas fa-pencil-square"></i>Blog</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Contact') ?>">
                                <i class="fas fa-mobile-phone"></i>Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap pull-right">

                            <div class="header-button">
                                <div class="account-wrap pull-right">
                                    <div class="account-item clearfix js-item-menu">

                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo assets_url('images/icon/icon.png') ?>" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">John doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo site_url('Logout') ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->