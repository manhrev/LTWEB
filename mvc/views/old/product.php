<?php
$product = $data['product'];
?>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

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

        <!--   product  -->
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-center">
                            <div class="w-100">
                              <img src="<?=$product['thumbnail']?>" alt="product" class="img-fluid" style="width: 80%; display: block; margin: 0 auto">
                              <div class="row pt-4 font-size-16 font-baloo w-100">
                                  <div class="col px-1">
                                      <a href="http://localhost/WEB-212/Cart/AddItem/<?=$product['id']?>/1" class="btn btn-danger form-control product-num">Mua ngay</a>
                                  </div>
                                  <div class="col px-1">
                                      <a href="http://localhost/WEB-212/Cart/AddItem/<?=$product['id']?>/1" class="btn btn-warning form-control product-num">Add to cart</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20"><?=$product['title']?></h5>
                            <small>by <?=$product['name']?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rale font-size-14">20,534 đánh giá | 1000+ thắc mắc được giải đáp</a>
                            </div>
                            <hr class="m-0">

                            <!---    product price       -->
                                <table class="my-3">
                                    <!-- <tr class="font-rale font-size-14">
                                        <td>M.R.P:</td>
                                        <td><strike>$162.00</strike></td>
                                    </tr> -->
                                    <tr class="font-rale font-size-14">
                                        <td>Giá:&nbsp;</td>
                                        <td class="font-size-20 text-danger"><span> <?=number_format($product['price'])?> đ</span><small class="text-dark font-size-12">&nbsp;&nbsp;Đã bao gồm thuế</small></td>
                                    </tr>
                                    <!-- <tr class="font-rale font-size-14">
                                        <td>You Save:</td>
                                        <td><span class="font-size-16 text-danger">$152.00</span></td>
                                    </tr> -->
                                </table>
                            <!---    !product price       -->

                             <!--    #policy -->
                                <div id="policy">
                                    <div class="d-flex">
                                        <div class="return text-center mx-4">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">Đổi trả trong <br> 10 ngày</a>
                                        </div>
                                        <div class="return text-center mx-4">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">Miễn phí <br>vận chuyển</a>
                                        </div>
                                        <div class="return text-center mx-4">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">Bảo hành <br>2 năm</a>
                                        </div>
                                    </div>
                                </div>
                              <!--    !policy -->
                                <hr>

                            <!-- order-details -->
                                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                    <small>Dự kiến nhận hàng vào : Mar 29  - Apr 1</small>
                                    <!-- <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small> -->
                                </div>
                             <!-- !order-details -->

                             <div class="row">
                                 <div class="col-6">
                                        <!-- color -->
                                            <div class="color my-3">
                                              <div class="d-flex justify-content-between">
                                                <h6 class="font-baloo">Màu:</h6>
                                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                              </div>
                                            </div>
                                        <!-- !color -->
                                 </div>
                                 <div class="col-6">
                                   <!-- product qty section -->  
                                     <div class="qty d-flex">
                                         <h6 class="font-baloo">Qty</h6>
                                         <div class="px-4 d-flex font-rale">
                                             <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                             <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                             <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                         </div>
                                     </div>
                                    <!-- !product qty section -->  
                                 </div>
                             </div>

                            <!-- size -->
                                <div class="size my-3">
                                    <h6 class="font-baloo">Bộ nhớ :</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">4GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">6GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">8GB RAM</button>
                                        </div>
                                    </div>
                                </div>
                            <!-- !size -->


                        </div>

                        <div class="col-12">
                            <h6 class="font-rubik">Chi tiết về sản phẩm</h6>
                            <hr>
                            <p class="font-rale font-size-14"><?=$product['description']?></p>
                            
                        </div>
                    </div>
                </div>
            </section>
        <!--   !product  -->


          <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Bình luận</h4>
              <hr>
              <!-- owl carousel -->
                
              <!-- !owl carousel -->
            </div>
          </section>
        <!-- !Top Sale -->

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
      $(document).ready(function(){

      // banner owl carousel
      $("#banner-area .owl-carousel").owlCarousel({
          dots: true,
          items: 1
      });

      // top sale owl carousel
      $("#top-sale .owl-carousel").owlCarousel({
          loop: true,
          nav: true,
          dots: false,
          responsive : {
              0: {
                  items: 1
              },
              600: {
                  items: 3
              },
              1000 : {
                  items: 5
              }
          }
      });

      // isotope filter
      var $grid = $(".grid").isotope({
          itemSelector : '.grid-item',
          layoutMode : 'fitRows'
      });

      // filter items on button click
      $(".button-group").on("click", "button", function(){
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue});
      })


      // new phones owl carousel
      $("#new-phones .owl-carousel").owlCarousel({
          loop: true,
          nav: false,
          dots: true,
          responsive : {
              0: {
                  items: 1
              },
              600: {
                  items: 3
              },
              1000 : {
                  items: 5
              }
          }
      });

      // blogs owl carousel
      $("#blogs .owl-carousel").owlCarousel({
          loop: true,
          nav: false,
          dots: true,
          responsive : {
              0: {
                  items: 1
              },
              600: {
                  items: 3
              }
          }
      })

      $('.product-num').attr("href", $('.product-num').attr('href').slice(0, -1) + $('.qty_input').val())
      // product qty section
      let $qty_up = $(".qty .qty-up");
      let $qty_down = $(".qty .qty-down");
      // let $input = $(".qty .qty_input");

      // click on qty up button
      $qty_up.click(function(e){
          let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
          if($input.val() >= 1 && $input.val() <= 8){
              $input.val(function(i, oldval){
                  let num =  1 + parseInt(oldval)
                  $('.product-num').attr("href", $('.product-num').attr('href').slice(0, -1) + num )
                  return ++oldval;
              });
          }
      });

        // click on qty down button
        $qty_down.click(function(e){
          let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
          if($input.val() > 1 && $input.val() <= 9){
              $input.val(function(i, oldval){
                  let num = - 1 + parseInt(oldval)
                  $('.product-num').attr("href", $('.product-num').attr('href').slice(0, -1) + num )
                  return --oldval;
              });
          }
      });


      });
    </script>
</body>
</html>