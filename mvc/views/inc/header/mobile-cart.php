<div class="dropdown-content">
    <div class="cart-content">
        <table>
            <tbody>
                <?php 
                    if (isset($_SESSION['cart'])) {
                        $cart = array_slice($_SESSION['cart'], 0, 4);
                        foreach ($cart as $url => $sp) {
                ?>
                <tr>
                    
                    <td class="product-image">
                        <a href="<?=BASE_URL.'san-pham/'.$url?>">
                            <img src="<?=$sp['image']?>" alt="<?=ucfirst($sp['name'])?>">
                        </a>
                    </td>
                    <td>
                        <div class="product-name">
                            <a href="<?=BASE_URL.'san-pham/'.$url?>"><?=ucfirst($sp['name'])?></a>
                        </div>
                        <div>
                            <span class="product-price"><?=$sp['price']!=0?number_format($sp['price']).' đ':"Liên hệ"?></span>
                        </div>
                    </td>
                    <!-- <td class="action">
                        <a class="remove" href="#">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td> -->
                </tr>
                <?php      
                        }
                    }
                ?>
                
                <?php if (isset($_SESSION['cart'])) { if (count($_SESSION['cart']) >4) {?>
                <tr>
                    <td>
                    <span class="product-price">...</span>
                </td>
                </tr>
                <?php }}?>

                <tr>
                    <!-- mobile cart -->
                    <td colspan="3" class="d-flex justify-content-center">
                        <div class="cart-button">
                            <a href="<?=BASE_URL.'gio-hang'?>" title="View Cart">Xem giỏ hàng</a>
                            <!-- <a href="product-checkout.html" title="Checkout">Thanh toán</a> -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>