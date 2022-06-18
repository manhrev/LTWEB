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
    <title>Giỏ hàng - BKU Burger</title>

    <meta name="keywords" content="BKU Burger">
    <meta name="description" content="BKU Burger - giỏ hàng">

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
    <?php require_once "./mvc/views/inc/fb-messenger.php" ?>

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
                                <a href="<?= BASE_URL ?>">
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
                                                // print_r($cart);
                                                if (isset($_SESSION['cart'])) {
                                                    $rowid = 0;
                                                    foreach ($cart as $url => $sp) {
                                                        $rowid++;
                                                ?>
                                                        <li class="cart-item">
                                                            <div class="product-line-grid row justify-content-between">
                                                                <!--  product left content: image-->
                                                                <div class="product-line-grid-left col-md-2">
                                                                    <span class="product-image media-middle">
                                                                        <a href="<?= BASE_URL . 'san-pham/' . $url ?>">
                                                                            <img class="img-fluid" src="<?= $sp['image'] ?>" alt="<?= ucfirst($sp['name']) ?>">
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="product-line-grid-body col-md-6">
                                                                    <div class="product-line-info">
                                                                        <a class="label" href="<?= BASE_URL . 'san-pham/' . $url ?>" data-id_customization="0"><?= ucfirst($sp['name']) ?></a>
                                                                    </div>
                                                                    <div class="product-line-info product-price">
                                                                        <span class="value">Đơn giá: <?= $sp['price'] != 0 ? number_format($sp['price']) . ' đ' : "Liên hệ" ?></span>
                                                                    </div>

                                                                </div>
                                                                <!-- <?php print_r($_SESSION);  ?> -->
                                                                <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                                                    <div class="row">

                                                                        <div class="col-md-5 col qty">
                                                                            <div class="label">Số lượng:</div>

                                                                            <div class="quantity">

                                                                                <!-- <span type="text" name="qty"  class="input-group form-control">1</span> -->
                                                                                <input value="<?= $sp['price'] ?>" hidden>
                                                                                <input id='qtyid' class='input-group form-control' style="width:70px;" type="number" min='1' max='20' name='qty' value="<?= $sp['qty'] ?>" onchange="qtyChange('<?= $rowid ?>')">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col price">
                                                                            <div class="label">Tổng:</div>
                                                                            <div class="product-price total" id='a'>
                                                                                
                                                                                <?= $sp['price'] != 0 ? $sp['price'] * $sp['qty']  : "Liên hệ" ?>
                                                                                
                                                                            </div><div>đ</div>
                                                                        </div>
                                                                        <div class="col-md-2 col text-xs-right align-self-end">
                                                                            <div class="cart-line-product-actions ">
                                                                                <a class="remove-from-cart" rel="nofollow" href="<?= BASE_URL . 'gio-hang/xoa-san-pham/' . $url ?>" data-link-action="delete-from-cart" data-id-product="1">
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
                                    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
                                    ?>
                                        <h5>Giỏ hàng trống</h5>
                                    <?php
                                    } else {
                                    ?>
                                        <?php if (isLoggedIn()) { ?>
                                            <a href="<?= BASE_URL ?>gio-hang/dat-hang" class="continue btn btn-primary pull-xs-right">
                                                Đặt hàng
                                            </a>
                                        <?php } else { ?>
                                            <span>Vui lòng đăng nhập để đặt hàng! <br>
                                                <a href="<?= BASE_URL ?>login" class="continue btn btn-primary pull-xs-right mt-2">
                                                    Đến trang đăng nhập
                                                </a>
                                        <?php
                                        }
                                    }
                                        ?>


                               

                               

                                </div>
                                <div class="cart-summary col-md-3  col-xs-12">
                                    <div class="my-5 ml-2"></div>
                                        <div class="cart-summary-line" id="cart-subtotal-products">
                                            <div class="title-page">
                                                Tổng giá tiền:
                                </div>
                                            <h2 id='tongtien' class="d-inline">200.00</h2><h2 class="d-inline">đ</h2>
                                        </div>

                                    </div>

                              
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./mvc/views/inc/footer.php" ?>

    <?php require_once "./mvc/views/inc/mobile-menu.php" ?>


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
    <script>
        tongtien();
        if (document.querySelectorAll('#qtyid')[rowid - 1].value=='') {
            document.querySelectorAll('#qtyid')[rowid - 1].value==1;
        }
        function validateQty(quantity, rowid){
            if (quantity<1 || quantity >20){
                alert('Số lượng chỉ cho phép từ 1-20 trên mỗi sản phẩm!');
                document.querySelectorAll('#qtyid')[rowid - 1].value =1;
            }
        }
        function qtyChange(rowid) {
            quantity = document.querySelectorAll('#qtyid')[rowid - 1].value
            validateQty(quantity,rowid)
            quantity = document.querySelectorAll('#qtyid')[rowid - 1].value
            dongia = document.querySelectorAll('.cart-container .quantity')[rowid - 1].firstElementChild.value
            document.querySelectorAll('.product-price.total')[rowid - 1].innerHTML = dongia * quantity;// + '\nđ';
            tongtien();
        }

        function tongtien(){
            sum=0;
            values = document.querySelectorAll('.product-price.total')
            for (x=0; x< values.length; x++){
                console.log(values[x].innerHTML)
                sum+= parseInt(values[x].innerHTML) 
            }
            document.getElementById('tongtien').innerHTML=sum;
        }
    </script>
</body>


<!-- product-cart07:12-->

</html>