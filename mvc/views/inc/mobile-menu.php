<?php require_once './mvc/helper/authorization.php';?>
<!-- menu mobie left -->
<!-- <div class="mobile-top-menu d-md-none">
    <button type="button" class="close" aria-label="Close">
        <i class="zmdi zmdi-close"></i>
    </button>
    <div class="tiva-verticalmenu block" data-count_showmore="17">
        <div class="box-content block-content">
            <div class="verticalmenu" role="navigation">
                <ul class="menu level1">
                    <li class="item  parent">
                        <a href="#" class="hasicon" title="SIDE TABLE">
                            <img src="<?= STATIC_URL ?>img/home/table-lamp.png" alt="img">SIDE TABLE</a>
                        <span class="arrow collapsed" data-toggle="collapse" data-target="#SIDE-TABLE" aria-expanded="false" role="status">
                            <i class="zmdi zmdi-minus"></i>
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                        <div class="subCategory collapse" id="SIDE-TABLE" aria-expanded="true" role="status">
                            <ul>
                                <li class="item">
                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                </li>
                                <li class="item  parent-submenu parent">
                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                    <span class="arrow collapsed" data-toggle="collapse" data-target="#sub-Category" aria-expanded="false" role="status">
                                        <i class="zmdi zmdi-minus"></i>
                                        <i class="zmdi zmdi-plus"></i>
                                    </span>
                                    <div class="subCategory collapse" id="sub-Category" aria-expanded="true" role="status">
                                        <ul>
                                            <li class="item">
                                                <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                            </li>
                                            <li class="item">
                                                <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                            </li>
                                            <li class="item">
                                                <a href="#" title="Voluptate">Voluptate</a>
                                            </li>
                                            <li class="item">
                                                <a href="#" title="Tongue Est">Tongue Est</a>
                                            </li>
                                            <li class="item">
                                                <a href="#" title="Venison Andouille">Venison Andouille</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item">
                                    <a href="#" title="Voluptate">Voluptate</a>
                                </li>
                                <li class="item">
                                    <a href="#" title="Tongue Est">Tongue Est</a>
                                </li>
                                <li class="item">
                                    <a href="#" title="Venison Andouille">Venison Andouille</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="item  parent group">
                        <a href="#" class="hasicon" title="FI">
                            <img src="<?= STATIC_URL ?>img/home/fireplace.png" alt="img">FIREPLACE
                        </a>
                        <span class="arrow collapsed" data-toggle="collapse" data-target="#fi" aria-expanded="false" role="status">
                            <i class="zmdi zmdi-minus"></i>
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                        <div class="subCategory collapse" id="fi" aria-expanded="true" role="status">
                            <div class="item">
                                <div class="menu-content">
                                    <div class="tags d-flex d-xs-flex-inherit">
                                        <div class="title">
                                            <b>DINNING ROOM</b>
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">Toshiba</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Samsung</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">LG</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sharp</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Electrolux</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Hitachi</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Panasonic</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Mitsubishi Electric</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Daikin</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Haier</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tags d-flex d-xs-flex-inherit">
                                        <div class="title">
                                            <b>BATHROOM</b>
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">Toshiba</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Samsung</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">LG</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sharp</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Electrolux</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Hitachi</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Panasonic</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Mitsubishi Electric</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Daikin</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Haier Media</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Gee</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Digimart</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Vitivaa</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sanaky</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sunshine</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tags d-flex d-xs-flex-inherit">
                                        <div class="title">
                                            <b>LIVING ROOM</b>
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">Media</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Gee</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Digimart</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Vitivaa</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sanaky</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sunshine</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Toshiba</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Samsung</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">LG</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sharp</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Electrolux</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Hitachi</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Panasonic</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Mitsubishi Electric</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Daikin</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Haier</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tags d-flex d-xs-flex-inherit">
                                        <div class="title">
                                            <b>BEDROOM</b>
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">LG</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sharp</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Electrolux</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Hitachi</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Panasonic</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Mitsubishi Electric</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Daikin</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Haier</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tags d-flex d-xs-flex-inherit">
                                        <div class="title">
                                            <b>KITCHEN</b>
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">LG</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sharp</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Electrolux</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Hitachi</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Panasonic</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Mitsubishi Electric</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Daikin</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Haier</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tags d-flex d-xs-flex-inherit">
                                        <div class="title">
                                            <b>Blender</b>
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#">LG</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Sharp</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Electrolux</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Hitachi</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Panasonic</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Mitsubishi Electric</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Daikin</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Haier</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item group-category-img parent group">
                        <a href="#" class="hasicon" title="TABLE LAMP">
                            <img src="<?= STATIC_URL ?>img/home/table-lamp.png" alt="img">TABLE LAMP</a>
                        <span class="arrow collapsed" data-toggle="collapse" data-target="#table-lamp" aria-expanded="false" role="status">
                            <i class="zmdi zmdi-minus"></i>
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                        <div class="subCategory collapse" id="table-lamp" aria-expanded="true" role="status">
                            <div class="item">
                                <div class="menu-content">
                                    <div class="col-xs-12">
                                        <span class="menu-title">Coventry dining</span>
                                        <ul>
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="#">Activewear</a>
                                            </li>
                                            <li>
                                                <a href="#">ASOS Basic Tops</a>
                                            </li>
                                            <li>
                                                <a href="#">Bags &amp; Purses</a>
                                            </li>
                                            <li>
                                                <a href="#">Beauty</a>
                                            </li>
                                            <li>
                                                <a href="#">Coats &amp; Jackets</a>
                                            </li>
                                            <li>
                                                <a href="#">Curve &amp; Plus Size</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12">
                                        <span class="menu-title">Amara stools</span>
                                        <ul>
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="#">Activewear</a>
                                            </li>
                                            <li>
                                                <a href="#">ASOS Basic Tops</a>
                                            </li>
                                            <li>
                                                <a href="#">Bags &amp; Purses</a>
                                            </li>
                                            <li>
                                                <a href="#">Beauty</a>
                                            </li>
                                            <li>
                                                <a href="#">Coats &amp; Jackets</a>
                                            </li>
                                            <li>
                                                <a href="#">Curve &amp; Plus Size</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12">
                                        <span class="menu-title">Kingston dining</span>
                                        <ul>
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="#">Activewear</a>
                                            </li>
                                            <li>
                                                <a href="#">ASOS Basic Tops</a>
                                            </li>
                                            <li>
                                                <a href="#">Bags &amp; Purses</a>
                                            </li>
                                            <li>
                                                <a href="#">Beauty</a>
                                            </li>
                                            <li>
                                                <a href="#">Coats &amp; Jackets</a>
                                            </li>
                                            <li>
                                                <a href="#">Curve &amp; Plus Size</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12">
                                        <span class="menu-title">Ellinger dining</span>
                                        <ul>
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="#">Activewear</a>
                                            </li>
                                            <li>
                                                <a href="#">ASOS Basic Tops</a>
                                            </li>
                                            <li>
                                                <a href="#">Bags &amp; Purses</a>
                                            </li>
                                            <li>
                                                <a href="#">Beauty</a>
                                            </li>
                                            <li>
                                                <a href="#">Coats &amp; Jackets</a>
                                            </li>
                                            <li>
                                                <a href="#">Curve &amp; Plus Size</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="OTTOMAN">
                            <img src="<?= STATIC_URL ?>img/home/ottoman.png" alt="img">OTTOMAN
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="ARMCHAIR">
                            <img src="<?= STATIC_URL ?>img/home/armchair.png" alt="img">ARMCHAIR
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="CUSHION">
                            <img src="<?= STATIC_URL ?>img/home/cushion.png" alt="img">CUSHION
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="COFFEE TABLE">
                            <img src="<?= STATIC_URL ?>img/home/coffee_table.png" alt="img">COFFEE TABLE</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="SHELF">
                            <img src="<?= STATIC_URL ?>img/home/shelf.png" alt="img">SHELF
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="SOFA">
                            <img src="<?= STATIC_URL ?>img/home/sofa.png" alt="img">SOFA
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="DRESSING TABLE">
                            <img src="<?= STATIC_URL ?>img/home/dressing.png" alt="img">DRESSING TABLE</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                            <img src="<?= STATIC_URL ?>img/home/windown.png" alt="img">WINDOWN CURTAIN</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="CHANDELIER">
                            <img src="<?= STATIC_URL ?>img/home/chandelier.png" alt="img">CHANDELIER
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="CEILING FAN">
                            <img src="<?= STATIC_URL ?>img/home/ceiling_fan.png" alt="img">CEILING FAN</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="WARDROBE">
                            <img src="<?= STATIC_URL ?>img/home/wardrobe.png" alt="img">WARDROBE
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="FLOOR LAMP">
                            <img src="<?= STATIC_URL ?>img/home/floor_lamp.png" alt="img">FLOOR LAMP</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="VASE-FLOWER ">
                            <img src="<?= STATIC_URL ?>img/home/vase-flower.png" alt="img">VASE-FLOWER
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="BED">
                            <img src="<?= STATIC_URL ?>img/home/bed.png" alt="img">BED
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="BED GIRL">
                            <img src="<?= STATIC_URL ?>img/home/bed.png" alt="img">BED GIRL</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="BED BOY">
                            <img src="<?= STATIC_URL ?>img/home/bed.png" alt="img">BED BOY</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div> -->

<!-- menu mobie right -->
<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none" style="width: 100vw">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Menu</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content">
            <nav>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="megamenu" class="clearfix">
                    <ul class="menu level1">
                        <li class="item home-page has-sub">
                            
                            <a href="<?=BASE_URL?>" title="Home">
                                <i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a>

                        </li>
                        <li class="item group has-sub">
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#page" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a href="<?=BASE_URL?>san-pham/tat-ca-san-pham" title="Page">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>Sản phẩm</a>
                            <div class="subCategory collapse" id="page" aria-expanded="true" role="status">
                                <ul class="group-page">
                                    <li class="item container group">
                                        <div>
                                            <ul>
                                                <li class="item col-md-4 ">
                                                    <span class="menu-title">Danh mục sản phẩm</span>
                                                    <div class="menu-content">
                                                        <ul class="col">
                                                            <li>
                                                                <a href="<?=BASE_URL?>san-pham/tat-ca-san-pham">Tất cả sản phẩm</a>
                                                            </li>

                                                            <?php foreach ($data['categories'] as $cate) {?>
                                                                <li>
                                                                    <a href="<?=BASE_URL.'danh-muc/'.$cate['url']?>"><?=ucfirst($cate['name'])?></a>
                                                                </li>
                                                            <?php }?>
                                                        
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item col-md-4 html">
                                                    <span class="menu-title">Bộ lọc</span>
                                                    <div class="menu-content">
                                                        <ul>
                                                            <li>
                                                                <a href="<?=BASE_URL?>san-pham/bo-loc/moi-nhat">Sản phẩm mới nhất</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?=BASE_URL?>san-pham/bo-loc/ban-chay-nhat">Sản phẩm bán chạy</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Sản phẩm giảm giá</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item has-sub">
                
                            <a href="#" title="Blog">
                                <i class="fa fa-address-book" aria-hidden="true"></i>Blog</a>
                        </li>
                        <li class="item has-sub">
                            <a href="<?=BASE_URL?>lien-he" title="Contact us">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Liên hệ</a>
                        </li>
                        <li class="item has-sub">
                            Người dùng
                        </li>
                        <?php if (!isLoggedIn()) { ?>
                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>login" title="Đăng nhập">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a>
                            </li>
                        <?php } if (isAdmin()) {?>

                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>quan-li" title="Quản lí">
                                    <i class="fa fa-bars " aria-hidden="true"></i>Quản lí</a>
                            </li>
                        <?php } if (isLoggedIn()) { ?>
                            <li class="item has-sub">
                                <a href="<?=BASE_URL?>logout" title="Đăng xuât">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i>Đăng xuất</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>