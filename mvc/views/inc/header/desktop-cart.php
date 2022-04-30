<div class="dropdown-content">
    <div class="cart-content">
        <table>
            <tbody>
                <?php 
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $sp) {
                ?>
                    <tr>
                    <td class="product-image">
                        <a href="product-detail.html">
                            <img src="<?=$sp['image']?>" alt="Product">
                        </a>
                    </td>
                    <td>
                        <div class="product-name">
                            <a href="product-detail.html"><?=ucfirst($sp['name'])?></a>
                        </div>
                        <div>
                            <span class="product-price"><?=$sp['price']?></span>
                        </div>
                    </td>
                    <td class="action">
                        <a class="remove" href="#">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php      
                        }
                    }
                ?>
                
                <!-- <tr class="total">
                    <td colspan="2">Total:</td>
                    <td>£92.96</td>
                </tr> -->

                <tr>
                    <td colspan="3" class="d-flex justify-content-center">
                        <div class="cart-button">
                            <a href="product-cart.html" title="View Cart">Xem giỏ hàng</a>
                            <a href="product-checkout.html" title="Checkout">Thanh toán</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>