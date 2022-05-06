<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- product-cart07:06-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Giỏ hàng - Nội thất Gia Vương</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
    <!-- Google Fonts -->
    <?php require_once "./mvc/views/inc/font_inc/font.php" ?>

    <!-- libs CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slick-slider/css/slick.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slick-slider/css/slick-theme.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">
</head>

<body class="product-cart checkout-cart blog">
    
    <!-- contact pop -->
    <?php require_once "./mvc/views/inc/phone.php" ?>
    <?php require_once "./mvc/views/inc/fb-messenger.php"?>

    <?php require_once "./mvc/views/inc/header.php" ?>

    <!-- main content -->
    <div class="main-content" id="cart">
        <!-- main -->
        <div id="wrapper-site">
            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="<?=BASE_URL?>">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Giỏ hàng</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <section id="main">
                            <div class="cart-grid row">
                                <div class="col-md-9 col-xs-12 check-info">
                                    <h1 class="title-page">Giỏ hàng</h1>
                                    <div class="cart-container">
                                        <div class="cart-overview js-cart">
                                            <ul class="cart-items">
                                            <?php 
                                                if (isset($_SESSION['cart'])) {
                        
                                                    foreach ($cart as $url => $sp) {
                                            ?>
<li class="cart-item">
    <div class="product-line-grid row justify-content-between">
        <!--  product left content: image-->
        <div class="product-line-grid-left col-md-2">
            <span class="product-image media-middle">
                <a href="<?=BASE_URL.'san-pham/'.$url?>">
                    <img class="img-fluid" src="<?=$sp['image']?>" alt="<?=ucfirst($sp['name'])?>">
                </a>
            </span>
        </div>
        <div class="product-line-grid-body col-md-6">
            <div class="product-line-info">
                <a class="label" href="<?=BASE_URL.'san-pham/'.$url?>" data-id_customization="0"><?=ucfirst($sp['name'])?></a>
            </div>
            <div class="product-line-info product-price">
                <span class="value">Đơn giá: <?=$sp['price']!=0?number_format($sp['price']).' đ':"Liên hệ"?></span>
            </div>
            <!-- <div class="product-line-info">
                <span class="label-atrr">Size:</span>
                <span class="value">S</span>
            </div>
            <div class="product-line-info">
                <span class="label-atrr">Color:</span>
                <span class="value">Blue</span>
            </div> -->
        </div>
        <div class="product-line-grid-right text-center product-line-actions col-md-4">
            <div class="row">
                <div class="col-md-5 col qty">
                    <div class="label">Số lượng:</div>
                    <div class="quantity">
                        <input type="text" name="qty" value="1" class="input-group form-control">

                        <span class="input-group-btn-vertical">
                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                +
                            </button>
                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                -
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-md-5 col price">
                    <div class="label">Tổng:</div>
                    <div class="product-price total">
                        <?=$sp['price']!=0?number_format($sp['price']).' đ':"Liên hệ"?>
                    </div>
                </div>
                <div class="col-md-2 col text-xs-right align-self-end">
                    <div class="cart-line-product-actions ">
                        <a class="remove-from-cart" rel="nofollow" href="<?=BASE_URL.'gio-hang/xoa-san-pham/'.$url?>" data-link-action="delete-from-cart" data-id-product="1">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
                                            <?php      
                                                    }
                                                }
                                            ?>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <?php 
                                        if (!isset($_SESSION['cart']) || count($_SESSION['cart'])==0) {   
                                    ?>
                                    <h5>Giỏ hàng trống</h5>
                                    <?php 
                                        } else {   
                                    ?>
                                    <a href="<?=BASE_URL?>gio-hang/dat-hang" class="continue btn btn-primary pull-xs-right">
                                        Đặt hàng
                                    </a>
                                    <?php 
                                        }   
                                    ?>

                                </div>
                                <!-- <div class="cart-grid-right col-xs-12 col-lg-3">
                                    <div class="cart-summary">
                                        <div class="cart-detailed-totals">
                                            <div class="cart-summary-products">
                                                <div class="summary-label">There are 3 item in your cart</div>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-products">
                                                <span class="label js-subtotal">
                                                    Total products:
                                                </span>
                                                <span class="value">£200.00</span>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-shipping">
                                                <span class="label">
                                                    Total Shipping:
                                                </span>
                                                <span class="value">Free</span>
                                                <div>
                                                    <small class="value"></small>
                                                </div>
                                            </div>
                                            <div class="cart-summary-line cart-total">
                                                <span class="label">Total:</span>
                                                <span class="value">£200.00 (tax incl.)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="img/product/check1.png" alt="Security policy (edit with Customer reassurance module)">
                                                    <span>Security policy (edit with Customer reassurance module)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="img/product/check2.png" alt="Delivery policy (edit with Customer reassurance module)">
                                                    <span>Delivery policy (edit with Customer reassurance module)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="img/product/check3.png" alt="Return policy (edit with Customer reassurance module)">
                                                    <span>Return policy (edit with Customer reassurance module)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./mvc/views/inc/footer.php" ?>

	<?php require_once "./mvc/views/inc/mobile-menu.php" ?>

    <!-- Page Loader -->
        <!-- <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div> -->

    <!-- Vendor JS -->
    <script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/tmpl.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/draggable-0.1.js"></script>
    <script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.slider.js"></script>
    <script src="<?= STATIC_URL ?>libs/slick-slider/js/slick.min.js"></script>

    <!-- Template JS -->
    <script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- product-cart07:12-->
</html>