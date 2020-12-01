<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>NestNation - Appointment booking sites: companies that require appoint booking for the service</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo assets_url('images/favicon.ico') ?>" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/bootstrap.min.css') ?>" />

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/mega-menu/mega_menu.css') ?>" />

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/font-awesome.min.css') ?>" />

    <!-- Themify icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/themify-icons.css') ?>" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/owl-carousel/owl.carousel.css') ?>" />

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('revolution/css/settings.css') ?>" />

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/style.css') ?>" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo assets_url('css/responsive.css') ?>" />
</head>

<body>

    <header id="header" class="default">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="topbar-left text-center text-md-left">
                            <?php if (!empty($socials)) : ?>
                                <ul class="list-inline">
                                    <?php if (!empty($socials->facebook)) : ?>
                                        <li>
                                            <a href="<?php echo $socials->facebook ?>"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($socials->twitter)) : ?>
                                        <li>
                                            <a href="<?php echo $socials->twitter ?>"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($socials->instagram)) : ?>
                                        <li>
                                            <a href="<?php echo $socials->instagram ?>"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($socials->linked_in)) : ?>
                                        <li>
                                            <a href="<?php echo $socials->linked_in ?>"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="topbar-right text-center text-md-right">
                            <ul class="list-inline">
                                <li><a href="<?php echo site_url('Book') ?>" style="text-decoration: underline">Register / Book Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=================================
    mega menu -->

        <div class="menu">
            <!-- menu start -->
            <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="<?php echo site_url() ?>"><img id="logo_img" src="<?php echo assets_url('images/logo-dark.png') ?>" alt="logo"> </a>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <ul class="menu-links">
                                    <li><a href="<?php echo site_url('AboutUs') ?>">About</a></li>
                                    <li><a href="<?php echo site_url('Services') ?>">Services</a></li>
                                    <li><a href="<?php echo site_url('Pricing') ?>">Pricing</a></li>
                                    <li><a href="javascript:void(0)"> Resources <i class="fa fa-angle-down fa-indicator"></i> </a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel">
                                            <li><a href="<?php echo site_url('FAQs') ?>">FAQs</a></li>
                                            <li><a href="<?php echo site_url('Blog') ?>">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('ContactUs') ?>">Contact us</a></li>

                                    <li>
                                        <div class="search-button">
                                            <a class="search-trigger" href="#search"> <span></span></a>
                                        </div>
                                    </li>

                                    <li class="side-menu-main">
                                        <div class="side-menu">
                                            <div class="mobile-nav-button">
                                                <div class="mobile-nav-button-line"></div>
                                                <div class="mobile-nav-button-line"></div>
                                                <div class="mobile-nav-button-line"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
    </header>
    <!--=================================
search and side menu content -->

    <div class="search-overlay"></div>
    <!-- <div class="menu-overlay"></div> -->
    <div id="search" class="search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <input type="search" placeholder="Type and hit enter...">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="side-content" id="scrollbar">
        <div class="side-content-info">
            <div class="menu-toggle-hamburger menu-close"><span class="ti-close"> </span></div>
            <div class="side-logo">
                <img class="img-fluid mb-3" src="images/logo-dark.png" alt="">
                <p>Culpa molestias mollitia natus labore perspiciatis ipsa lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit aut explicabo mollitia, sed, eos, magni quos laborum dolores ab distinctio voluptates quae ipsam.</p>
                <hr class="mt-2 mb-3" />
            </div>
            <div class="contact-address">
                <div class="address-title mb-3">
                    <h4 class="mb-1">Office 01</h4>
                    <p>mollitia omnis fuga, nihil suscipit lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit quos.</p>
                </div>
                <div class="contact-box mb-2">
                    <div class="contact-icon">
                        <i class="ti-direction-alt text-blue"></i>
                    </div>
                    <div class="contact-info">
                        <div class="text-left">
                            <h6>Chevvy View Estate</h6>
                            <span>Lagos, Nigeria</span>
                        </div>
                    </div>
                </div>
                <div class="contact-box mb-2">
                    <div class="contact-icon">
                        <i class="ti-headphone-alt text-blue"></i>
                    </div>
                    <div class="contact-info">
                        <div class="text-left">
                            <h6>07036980011</h6>
                            <span>Mon-Fri 8:30am-6:30pm</span>
                        </div>
                    </div>
                </div>
                <div class="contact-box mb-2">
                    <div class="contact-icon">
                        <i class="ti-email text-blue"></i>
                    </div>
                    <div class="contact-info">
                        <div class="text-left">
                            <h6>info@site.com</h6>
                            <span>24 X 7 online support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->