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
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo assets_url('css/font-face.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?php echo assets_url('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo assets_url('images/icon/logo.png') ?>" alt="">
                            </a>
                        </div>
                        <div class="login-form">
							<div><?php echo isset($message) ? $message : NULL ?></div>
                            <form action="<?php echo site_url('Login') ?>" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                            </form>
                           <!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo assets_url('vendor/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo assets_url('vendor/bootstrap-4.1/popper.min.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo assets_url('vendor/slick/slick.min.js') ?>">
    </script>
    <script src="<?php echo assets_url('vendor/wow/wow.min.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/animsition/animsition.min.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
    </script>
    <script src="<?php echo assets_url('vendor/counter-up/jquery.waypoints.min.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/counter-up/jquery.counterup.min.js') ?>">
    </script>
    <script src="<?php echo assets_url('vendor/circle-progress/circle-progress.min.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/chartjs/Chart.bundle.min.js') ?>"></script>
    <script src="<?php echo assets_url('vendor/select2/select2.min.js') ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo assets_url('js/main.js') ?>"></script>

</body>

</html>