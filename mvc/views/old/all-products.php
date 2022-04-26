<?php
  $products = $data['products'];
  $current_page = $data['current-page'];
  $last_page = $data['last-page'];
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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <style>

      button, button:focus {
        outline: none !important;
        box-shadow: none !important;
      }

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
 
        .nav-bt-group {
          margin-top: 30px;
          display: flex;
          justify-content: center;
          margin-bottom: 50px;
        }
        .nav-bt-group {
          width: max-content;
        }
        .nav-bt {
          display: inline-block;
          border: 1px rgb(45, 175, 226) solid;
          padding: 0 5px;
          text-decoration: none;
          border-radius: 5px;
        }
        .nav-bt:hover {
          background-color: rgb(188, 255, 255);
          text-decoration: none;
        }

        .top-search {
          display: flex;
        }
        .top-search>div {
          display: flex;
          flex: 1;
        }
        .top-search>div:nth-of-type(2) {
          justify-content: center;
        }
        .search-box {
          border-radius: 10px 0 0 10px;
          border: 1px solid rgb(194, 194, 194);
          padding-left: 10px;
          width: 400px;
        }
        .search-box:focus {
          outline: 1px solid rgb(194, 194, 194);
        }
        .search-button {
          display: flex;
          border: 1px solid rgb(194, 194, 194);
          border-left: 0;
          border-radius: 0 10px 10px 0;
          padding: 0 10px;
          text-decoration: none;
          text-justify: center;
          align-items: center;
        }
        .search-button:hover{
          text-decoration: none;
        }
        @media only screen and (min-width: 0px) {  
          .item {
            width: 100%;
          }
        }

        @media only screen and (min-width: 370px) {
          .item {
            width: 140px;
          }
        }

        @media only screen and (min-width: 480px) {     
          .item {
            width: 200px;
          }
          .thumbnail {
            height: 180px; 
            padding: 8px; 
            margin: 0 auto; 
            display: block
          }
          .thumbnail-cont {
            width: 200px; 
            height: 333px
          }
        }
        
        @media only screen and (max-width: 400px) {
          .top-search {
            flex-direction: column;
          }
          .top-search>div:nth-of-type(2) {
            justify-content: left;
          }
        }

        @media only screen and (max-width: 800px) {
          .search-box {
            width: 100%;
          } 
        }
    </style>
</head>
<body>

    <!-- start #header -->
       
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">


        <!-- Search box-->
          <!-- <section class="pt-5">
            <div class="container">
              <h4 class="font-rubik font-size-20">Tìm kiếm sản phẩm</h4>
              <input class="search-box">
            </div>
          </section> -->
        <!-- !Search box-->

        <!-- All products -->
          <section id="special-price">
            <div class="container pt-5">
              <div class="top-search">
                <div><h4 class="font-rubik font-size-20"><?=$data['title']?></h4></div>
                <div><input id="search" class="search-box" placeholder="Tìm kiếm sản phẩm"><a class="search-button"><span>Tìm</span></a></div>
              </div>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <!-- <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Redmi</button> -->
              </div>

              <div class="grid">

                <?php foreach ($products as $item) { ?>
                  <div class="grid-item Apple border">
                    <div class="item py-2 thumbnail-cont">
                      <div class="product font-rale">
                        <a href="http://localhost/WEB-212/product/smartphone/<?=$item['id']?>"><img src="<?=$item['thumbnail']?>" alt="product1" class="img-fluid thumbnail"></a>
                        <div class="text-center">
                          <h6><?=$item['title']?></h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span><?=number_format($item['price'])?> đ</span>
                          </div>
                          <a href="http://localhost/WEB-212/product/smartphone/<?=$item['id']?>" class="btn btn-warning font-size-12">Xem chi tiết</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                
                
              </div>
            </div>
          </section>
        <!-- !All products -->
        
        <!--Nav buttons-->
        <?php if ($data['show-mini-nav']) { ?>
        <div class="container nav-bt-group">
          <div>
            <a href="<?=$data['path']?>1" class="nav-bt">&lt;&lt;</a>
            <a href="<?=$data['path']?><?=$current_page-1?>" class="nav-bt">&lt;</a>
            <!-- <a href="#" class="nav-bt">1</a> -->
            <a href="#" class="nav-bt"><?=$current_page?></a>
            <!-- <a href="#" class="nav-bt">3</a> -->
            <a href="<?=$data['path']?><?=$current_page+1?>" class="nav-bt">></a>
            <a href="<?=$data['path']?><?=$last_page?>" class="nav-bt">>></a>
          </div>
        </div>
        <?php } ?>
        <!--!Nav buttons-->


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
          // isotope filter
          var $grid = $(".grid").isotope({
              itemSelector : '.grid-item',
              layoutMode : 'fitRows'
          });
          
          $("#search").change(function() {
            $(".search-button").attr("href","http://localhost/WEB-212/Product/Search/"+$("#search").val());
          console.log("http://localhost/WEB-212/Product/Search/"+$("#search").val())
          })
          
      });
    </script>
  
</body>
</html>