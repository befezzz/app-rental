<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>FairyCamp - Camp Rental Outdoor</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= base_url() ?>/assets/assets_shop/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/assets_shop/css/style1.css" rel="stylesheet">



    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url() ?>assets/assets_shop/img/compass.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Batang,Jawa Tengah
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +62 858 1084 5495
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> setiap hari 08.00 - 19.00
                    </div>
                    <!--== Single HeaderTop End ==-->


                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index2.html" class="logo">
                            <img src="<?= base_url() ?>assets/assets_shop/img/logoo.png" alt="JSOFT" style="width: 220px; height: 60px;"></a>
                        <!-- <h5 class=" text-danger">Fairy Camp</h5> -->


                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class=""><a href="<?= base_url('customer/dashboard') ?>">Beranda</a></li>
                                <li><a href="<?= base_url('customer/data_barang') ?>">Barang</a></li>
                                <li><a href="<?= base_url('customer/transaksi') ?>">Transaksi</a></li>

                                <?php if ($this->session->userdata('nama')) { ?>
                                    <li style="display: none;"><a href="<?= base_url('register') ?>">Register</a></li>
                                <?php } else { ?>
                                    <li><a href="<?= base_url('register') ?>">Register</a></li>
                                <?php } ?>

                                <?php if ($this->session->userdata('nama')) { ?>
                                    <li><a href="<?= base_url('auth/logout') ?>">Welcome <?= $this->session->userdata('nama') ?>
                                            <span> | Logout</span></a></li>
                                <?php } else { ?>
                                    <li><a href="<?= base_url('auth') ?>">Login</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->