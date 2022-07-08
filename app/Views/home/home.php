<?php $session = session() ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wisata Depok || Homepage</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>/assets/home/images/favicon.png">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/vendor/slick.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/vendor/base.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/home/css/style.css">
    <?= $this->renderSection('style') ?>

</head>

<body class="theme-color-2">
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Start Header -->
        <header class="header axil-header  header-dark header-sticky ">
            <div class="header-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="mainmenu-wrapper">
                            <nav class="mainmenu-nav">
                                <!-- Start Mainmanu Nav -->
                                <ul class="mainmenu">
                                    <li><a href="<?=base_url();?>">Home</a></li>
                                </ul>
                                <!-- End Mainmanu Nav -->
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                        <div class="header-search text-end d-flex align-items-center">
                            <form class="header-search-form d-sm-block d-none">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                            <div class="mobile-search-wrapper d-sm-none d-block">
                                <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                                <form class="header-search-form">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                            <ul class="metabar-block">
                                <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>
                                <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                                <?php if($session->get('id') != null){?>
                                  <li>
                                     <a href="<?= base_url();?>/auth/logout"><i class="fas fa-sign-out-alt"></i></a>
                                  </li>
                                  <?php }else{?>
                                  <li class="icon">
                                     <a href="<?= base_url();?>/auth/login"><i class="fas fa-sign-in-alt"></i></a>
                                  </li>
                                  <?php }?>
                            </ul>
                            <!-- Start Hamburger Menu  -->
                            <div class="hamburger-menu d-block d-xl-none">
                                <div class="hamburger-inner">
                                    <div class="icon"><i class="fal fa-bars"></i></div>
                                </div>
                            </div>
                            <!-- End Hamburger Menu  -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->

        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area"> 
            <ul>
                <li><a href="<?=base_url();?>">Home</a></li>
            </ul>
        </div>
        <!-- End Mobile Menu Area  -->

        <?= $this->renderSection('content') ?>

                <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-footer-style-1 footer-variation-three bg-color-black">
            <!-- Start Footer Top Area  -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="logo">
<!--                                 <a href="index.html">
                                    <img class="light-logo" src="<?=base_url();?>/assets/home/images/logo/logo-white2.png" alt="Logo Images">
                                </a> -->
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <!-- Start Post List  -->
                            <div class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Post List  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top Area  -->

            <!-- Start Copyright Area  -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="copyright-right text-start text-lg-end mt_md--20 mt_sm--20">
                                <p class="b3">All Rights Reserved © 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a id="backto-top"></a>

    </div>
    <?= $this->renderSection('script') ?>
    <script src="<?=base_url();?>/assets/home/js/vendor/modernizr.min.js"></script>
    <script src="<?=base_url();?>/assets/home/js/vendor/jquery.js"></script>
    <script src="<?=base_url();?>/assets/home/js/vendor/bootstrap.min.js"></script>
    <script src="<?=base_url();?>/assets/home/js/vendor/slick.min.js"></script>
    <script src="<?=base_url();?>/assets/home/js/vendor/tweenmax.min.js"></script>
    <script src="<?=base_url();?>/assets/home/js/vendor/js.cookie.js"></script>
    <script src="<?=base_url();?>/assets/home/js/vendor/jquery.style.switcher.js"></script>


    <!-- Main JS -->
    <script src="<?=base_url();?>/assets/home/js/main.js"></script>

</body>
</html>