
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <style>
            /* @import url('https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Raleway&family=Rubik&display=swap'); */
      /* global classes */
      button, button:focus {
        outline: none !important;
        box-shadow: none !important;
      }
      /* Special Price Section Template */
      /* typography classes */
      /* .font-baloo {
        font-family: "Baloo Thambi 2", cursive;
      }
      .font-rale {
        font-family: "Raleway", cursive;
      }
      .font-rubik {
        font-family: "Rubik", cursive;
      } */

      html {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      .font-size-12 {
        font-size: 12px;
      }
      .font-size-14 {
        font-size: 14px;
      }
      .font-size-16 {
        font-size: 16px;
      }
      .font-size-20 {
        font-size: 20px;
      }
      /* Color Template */
      .color-primary {
        color: #003859;
      }
      .color-primary-bg {
        background: #003859;
      }
      .color-second {
        color: #00a5c4;
      }
      .color-second-bg {
        background: #00a5c4;
      }
      .color-yellow {
        color: #ffd289;
      }
      .color-yellow-bg {
        background: #ffd289;
      }
      /* top sale template */
      #top-sale .owl-carousel .item .product a {
        overflow: hidden;
      }
      #top-sale .owl-carousel .item .product img {
        transition: transform 0.5s ease;
      }
      #top-sale .owl-carousel .item .product img:hover {
        transform: scale(1.1);
      }
      #top-sale .owl-carousel .owl-nav button {
        position: absolute;
        top: 30%;
        outline: none;
      }
      #top-sale .owl-carousel .owl-nav button.owl-prev {
        left: 0;
      }
      #top-sale .owl-carousel .owl-nav button.owl-prev span, #top-sale .owl-carousel .owl-nav button.owl-next span {
        font-size: 35px;
        color: #003859;
        padding: 0 1rem;
      }
      #top-sale .owl-carousel .owl-nav button.owl-prev span {
        margin-left: -4rem;
      }
      #top-sale .owl-carousel .owl-nav button.owl-next {
        right: 0;
      }
      #top-sale .owl-carousel .owl-nav button.owl-next span {
        margin-right: -4rem;
      }
      /* Special Price Section Template */
      #special-price .grid .grid-item {
        margin-right: 1.2rem;
        margin-top: 1rem;
      }
      
    </style>
</head>
<body>

    <!-- start #header -->
       
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">

            <!-- Shopping cart section  -->
                <section id="cart" class="py-3">
                    <div class="container">
                        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                        <!--  shopping cart items   -->
                            <div class="row">
                                <div class="col-md-9 ">
                                    
                                    <?php 
                                        $items = $data['items'];
                                        if (count($items) == 0) {
                                            ?><span class='text-muted'>Giỏ hàng trống!</span><?php
                                        }
                                        foreach($items as $item) { ?>
                                    <!-- cart item -->
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-3 ">
                                                <img src="<?=$item['thumbnail']?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6 ">
                                                <a href="http://localhost/WEB-212/product/smartphone/<?=$item['product_id']?>" style="text-decoration: none; color: black"><h5 class="font-baloo font-size-20"><?=$item['title']?></h5></a>
                                                <small>by <?=$item['name']?></small>
                                                <!-- product rating -->
                                                <div class="d-flex">
                                                    <div class="rating text-warning font-size-12">
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>
                                                    
                                                </div>
                                                <!--  !product rating-->

                                                <!-- product qty -->
                                                    <div class="qty d-flex pt-2 row">
                                                        <div class="d-flex font-rale col-5" style="max-width: 150px">
                                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="<?=$item['num']?>" placeholder="1">
                                                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                        </div>
                                                        <a href="http://localhost/WEB-212/Cart/RemoveItem/<?=$item['id']?>" class="col-3 btn font-baloo text-danger px-3 border-right">Delete</a>
                                                    
                                                    </div>
                                                <!-- !product qty -->

                                            </div>

                                            <div class="col-sm-3 text-right">
                                                <div class="font-size-16 text-danger font-baloo">
                                                    <span class="product_price"><?=number_format($item['price']) ?> đ <br>× <?=$item['num']?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- !cart item -->
                                    <?php } ?>
                           
                                </div>

                                <?php if (count($items) != 0) { ?>
                                <!-- subtotal section-->
                                <div class="col-md-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                        <div class="border-top py-4">
                                            <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">152.00</span> </span> </h5>
                                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- !subtotal section-->
                                <?php } ?>
                            </div>
                        <!--  !shopping cart items   -->
                    </div>
                </section>
            <!-- !Shopping cart section  -->


        </main>
    <!-- !start #main-site -->

    <!-- start #footer -->

    <!-- !start #footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script>
      $(document).ready(function () {
          // product qty section
          let $qty_up = $(".qty .qty-up");
          let $qty_down = $(".qty .qty-down");
          // let $input = $(".qty .qty_input");

          // click on qty up button
          $qty_up.click(function (e) {
            let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
            if ($input.val() >= 1 && $input.val() <= 9) {
              $input.val(function (i, oldval) {
                return ++oldval;
              });
            }
          });

          // click on qty down button
          $qty_down.click(function (e) {
            let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
            if ($input.val() > 1 && $input.val() <= 10) {
              $input.val(function (i, oldval) {
                return --oldval;
              });
            }
          });


        });
    </script>
</body>
</html>
