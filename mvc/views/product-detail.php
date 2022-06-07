<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


<!-- product-detail06:46-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title><?= ucfirst($data['SP'][0]['name']) ?> - UEH Burger</title>
    <meta property="og:url" content="<?= BASE_URL ?>">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta property="og:site_name" content="UEH Burger">

    <meta name="keywords" content="<?= $data['SP'][0]['tag'] ?>,UEH Burger">
    <meta name="description" content="<?= $data['SP'][0]['description'] ?>">

    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <?php require_once "./mvc/views/inc/font_inc/font.php" ?>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">
</head>

<body id="product-detail">

    <!-- contact pop -->
    <?php require_once "./mvc/views/inc/phone.php" ?>
    <?php require_once "./mvc/views/inc/fb-messenger.php" ?>

    <!-- header -->
    <?php require_once "./mvc/views/inc/header.php" ?>
    <!-- !header -->

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <?php foreach ($data['path'] as $path) { ?>
                                            <li>
                                                <a href="<?= $path['url'] ?>">
                                                    <span><?= $path['name'] ?></span>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4 order-2 order-sm-1">

                                        <!-- category -->
                                        <?php require_once "./mvc/views/inc/main/categories.php" ?>

                                        <!-- best seller -->
                                        <?php require_once "./mvc/views/inc/main/bestseller.php" ?>

                                        <!-- product tag -->
                                        <?php require_once "./mvc/views/inc/main/tags.php" ?>
                                    </div>

                                    <?php $sp = $data['SP'][0] ?>
                                    <div class="col-sm-8 col-lg-9 col-md-9 order-1 order-sm-2">
                                        <div class="main-product-detail">
                                            <h2 style="text-transform: uppercase"><?= $sp['name'] ?></h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <?php
                                                                $images = $images = explode(',', $sp['images']);
                                                                foreach ($images as $key => $image) {
                                                                ?>
                                                                    <div id="item<?= $key + 1 ?>" class="tab-pane fade <?= $key == 0 ? "active in show" : '' ?>">
                                                                        <img src="<?= $image ?>" alt="img">
                                                                    </div>
                                                                <?php } ?>

                                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                    <i class="fa fa-expand"></i>
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">

                                                                <?php foreach ($images as $key => $image) { ?>
                                                                    <li class="<?= $key == 0 ? 'active' : '' ?> col">
                                                                        <a href="#item<?= $key + 1 ?>" data-toggle="tab" <?php if ($key == 0) { ?>aria-expanded="true" class="active show" <?php } ?>>
                                                                            <img src="<?= $image ?>" alt="img">
                                                                        </a>
                                                                    </li>
                                                                <?php } ?>


                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <div class="modal-body">
                                                                                <div class="product-detail">
                                                                                    <div>
                                                                                        <div class="images-container">
                                                                                            <div class="js-qv-mask mask tab-content">

                                                                                                <?php foreach ($images as $key => $image) { ?>
                                                                                                    <div id="modal-item<?= $key + 1 ?>" class="tab-pane fade <?= $key == 0 ? 'active in show' : '' ?>">
                                                                                                        <img src="<?= $image ?>" alt="img">
                                                                                                    </div>
                                                                                                <?php } ?>

                                                                                            </div>
                                                                                            <ul class="product-tab nav nav-tabs">

                                                                                                <?php foreach ($images as $key => $image) { ?>
                                                                                                    <li class="<?= $key == 0 ? 'active' : '' ?>">
                                                                                                        <a href="#modal-item<?= $key + 1 ?>" data-toggle="tab" class="<?= $key == 0 ? 'active show' : '' ?>">
                                                                                                            <img src="<?= $image ?>" alt="img">
                                                                                                        </a>
                                                                                                    </li>
                                                                                                <?php } ?>


                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        <div class="price-del">
                                                            <span style="font-size: 20px">Giá: </span>
                                                            <span class="price"><?= $sp['price'] != 0 ? number_format($sp['price']) . 'đ' : 'Liên hệ' ?></span>
                                                            <span class="float-right">
                                                                <span class="availb">Tình trạng: </span>
                                                                <span class="check">
                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>CÒN HÀNG</span>
                                                            </span>
                                                        </div>
                                                        <p class="description">Sản phẩm được miễn phí vận chuyển</p>
                                                        <!-- <div class="option has-border d-lg-flex size-color">
                                                            <div class="size">
                                                                <span class="size">size :</span>
                                                                <select>
                                                                    <option value="">Choose your size</option>
                                                                    <option value="">M</option>
                                                                    <option value="">l</option>
                                                                    <option value="">xl</option>
                                                                </select>
                                                            </div>
                                                            <div class="colors">
                                                                <b class="title">Color : </b>
                                                                <span class="blue"></span>
                                                                <span class="yellow"></span>
                                                                <span class="pink"></span>
                                                                <span class="green"></span>
                                                                <span class="brown"></span>
                                                                <span class="red"></span>
                                                            </div>
                                                        </div> -->
                                                        <div class="has-border cart-area">
                                                            <div class="product-quantity">
                                                                <div class="qty">
                                                                    <div class="input-group">
                                                                        <div class="quantity">
                                                                            <span class="control-label">QTY : </span>
                                                                            <span type="text" name="qty" id="quantity_wanted" class="input-group form-control">1</span>

                                                                            <!-- <span class="input-group-btn-vertical">
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                    +
                                                                                </button>
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                    -
                                                                                </button>
                                                                            </span> -->
                                                                        </div>
                                                                        <span class="add">
                                                                            <div style="display: flex; align-items: stretch">
                                                                                <div style="display: flex; align-items: center">
                                                                                    <form method="post" action="<?= BASE_URL ?>san-pham/<?= $sp['url'] ?>">
                                                                                        <input type="hidden" name='url' value='<?= $sp['url'] ?>'>
                                                                                        <input type="hidden" name='name' value='<?= $sp['name'] ?>'>
                                                                                        <input type="hidden" name='price' value='<?= $sp['price'] ?>'>
                                                                                        <input type="hidden" name='image' value='<?= $images[0] ?>'>
                                                                                        <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                            <span>Thêm vào giỏ hàng</span>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                                <!-- <div style="display: flex; align-items: center">
                                                                                    <a class="addToWishlist" href="#">
                                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </div> -->
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="product-minimal-quantity">
                                                            </p>
                                                        </div>
                                                        <div class="d-flex2 has-border">
                                                            <div class="btn-group">
                                                                <a>
                                                                    <i class="zmdi zmdi-share"></i>
                                                                    <span>Chia sẻ</span>
                                                                </a>
                                                                <a class="email">
                                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                    <span>Gửi tặng bạn bè</span>
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="rating-comment has-border d-flex">
                                                            <div class="review-description d-flex">
                                                            <div>ĐÁNH GIÁ:</div>
                                                            
                                                                <div class="rating">
                                                                
                                                                    <div class="star-content">
                                                                    <?php   
                                                                    // if ($data['avgreview']==-1){ 
                                                                    //     echo "Chưa có đánh giá nào";
                                                                    // } else {
                                                                    for ($x=1; $x<=$data['avgreview']; $x++){
                                                                                echo "<span class='star1'></span>";
                                                                            };
                                                                            if ($data['avgreview'] <5){
                                                                                for ($x=1; $x<= 5- $data['avgreview']; $x++)
                                                                                echo "<span class='star'></span>";
                                                                            }
                                                                        // }
                                                                            ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="read after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-commenting-o color" aria-hidden="true"></i>
                                                                    <span>Xem bình </span>
                                                                </a>
                                                            </div>
                                                            <div class="apen after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-pencil color" aria-hidden="true"></i>
                                                                    <span>WRITE A REVIEW</span>
                                                                </a>
                                                            </div> -->
                                                        </div>
                                                        <div class="content">

                                                            <p>Danh mục :
                                                                <span class="content2">
                                                                    <?php
                                                                    $cates = $data['SP'][1];
                                                                    foreach ($cates as $key => $cate) { ?>
                                                                        <a href="<?= BASE_URL . "danh-muc/" . $cate['url'] ?>"><?= $cate['name'] ?></a><?= $key != (count($cates) - 1) ? ',' : '' ?>
                                                                    <?php } ?>

                                                                </span>
                                                            </p>
                                                            <p>Tags :
                                                                <span class="content2">
                                                                    <?php
                                                                    $tags = explode(',', $sp['tag']);
                                                                    foreach ($tags as $index => $tag) {
                                                                    ?>
                                                                        <a href="<?= BASE_URL . "tim-kiem/" . $tag ?>"><?= $tag ?></a><?= $index != count($tags) - 1 ? ',' : '' ?>
                                                                    <?php } ?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review">
                                                <!-- <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description" class="active show">Mô tả sản phẩm</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tag">Product Tags</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#review">Reviews (2)</a>
                                                    </li>
                                                </ul> -->

                                                <div class="title-tab-content ">
                                                    <div class="justify-content-start">
                                                        <h2>Mô tả sản phẩm</h2>
                                                    </div>
                                                </div>

                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <?php $descriptionList = explode(PHP_EOL, $sp['description']) ?>

                                                        <?php foreach ($descriptionList as $paragraph) { ?>
                                                            <p>
                                                                <?= $paragraph ?>
                                                            </p>
                                                        <?php } ?>


                                                    </div>
                                                </div>

                                                <div class="title-tab-content ">
                                                    <div class="justify-content-start">
                                                        <h2>Reviews</h2>
                                                        <?php 
                                                        // print_r($data['reviews'])
                                                        $reviews=$data['reviews'];
                                                        ?>
                                                    </div>
                                                </div>

                                                <div id="review" >
                                                
                                                    <div class="spr-form" >
                                                        <div class="user-comment">
                                                        <?php
                                                        if (count($reviews)==0) echo '<h4>Sản phẩm hiện chưa có review nào.</h4>';
                                                         foreach ($reviews as $i => $info) { ?>
                                                            <!-- <?= print_r($info); ?> -->
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span class="spr-review-header-byline">
                                                                        <strong><?= $info['username'] ?></strong> -
                                                                        <span><?= $info['create_day'] ?></span>
                                                                    </span>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <!-- <span class="star1"></span>
                                                                            <span class="star1"></span>
                                                                            <span class="star1"></span>
                                                                            <span class="star1"></span>
                                                                            <span class="star"></span> -->
                                                                            <?php    for ($x=1; $x<=$info['rate']; $x++){
                                                                                echo "<span class='star1'></span>";
                                                                            };
                                                                            if ($info['rate'] <5){
                                                                                for ($x=1; $x<= 5- $info['rate']; $x++)
                                                                                echo "<span class='star'></span>";
                                                                            }

                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body"> <?= $info['comment'] ?></p>
                                                                </div>
                                                            </div>
                                                        <?php } ?>



                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <?php if (!isset($_SESSION['username'])) echo '<h4>Vui lòng đăng nhập để review sản phẩm.</h4>' ?>
                                                    <form method="post" action="#" class="new-review-form" <?php if (!isset($_SESSION['username'])) echo 'hidden' ?>>
                                                        <input type="hidden" name="review[rating]" value="3">
                                                        <input type="hidden" name="product_id">
                                                        <h3 class="spr-form-title">Write a review</h3>
                                                        <p>Review của bạn sẽ được hiển thị công khai kèm theo username</p>
                                                        <fieldset>
                                                            <div class="spr-form-review-rating">
                                                                <label class="spr-form-label">Your Rating</label>
                                                                <fieldset class="ratings">
                                                                    <input type="radio" id="star5" name="rating" value="5" checked="checked"/>
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                </fieldset>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="spr-form-contact">
                                                            <div class="spr-form-contact-name">
                                                                <!-- <input class="spr-form-input spr-form-input-text form-control" value="<?php $_SESSION['username']?>" type='hidden' name='username'> -->
                                                            </div>
                                                            <input name='act' value='summitReview' type="hidden">
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="spr-form-review-body">
                                                                <div class="spr-form-input">
                                                                    <textarea class="spr-form-input-textarea" rows="5" placeholder="Write your comments here" name='comment' required></textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="submit">
                                                            <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Submit Review">
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <?php require_once "./mvc/views/inc/main/related.php" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <!-- footer -->
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

    <!-- Template JS -->
    <script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- product-detail07:06-->

</html>