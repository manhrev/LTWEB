<?php

class Product extends Controller {

    const PRODUCTS_PER_PAGE = 10;

    function Default() {
        $products = $this->model("ProductModel");
        $data = $products->getAllProduct();
        if (is_null($data)) {
            echo "error";
            exit();
        } 

        $bestsell = $data;
        $goodprice = $data;
        $newproduct = $data;

        $this->view("product-index", [
            "bestsell" => $bestsell,
            "goodprice" => $goodprice,
            "newproduct" => $newproduct
        ]);
    }

    function Page($page = 1) {
        if (!is_numeric($page)) {
            header('Location: http://localhost/WEB-212/Product/page');
            exit();
        }
        $products = $this->model("ProductModel");
        
        $data = $products->getAllProduct();
        if (is_null($data)) {
            echo "error";
            exit();
        }
        
        $sliced_data = array_slice($data, ($page-1)*self::PRODUCTS_PER_PAGE, self::PRODUCTS_PER_PAGE);

        $number_of_pages = ceil(count($data)/self::PRODUCTS_PER_PAGE);

        
        if ($page<=0) {
            header('Location: http://localhost/WEB-212/Product/page');
            exit();
        } elseif ($page>$number_of_pages){
            header("Location: http://localhost/WEB-212/Product/page/$number_of_pages");
            exit();
        }

        $this->view("all-products", [
            "show-mini-nav" => 1,
            "title" => "Tất cả sản phẩm",
            "products" => $sliced_data,
            "current-page" => $page,
            "last-page" => $number_of_pages,
            "path" => "http://localhost/WEB-212/Product/Page/"
        ]);

    }
    
    function Search($search = NULL, $page = 1) {
        if (is_null($search)) {
            header('Location: http://localhost/WEB-212/Product/page');
            exit();
        }
        if (!is_numeric($page)) {
            header('Location: http://localhost/WEB-212/Product/page');
            exit();
        }

        $products = $this->model("ProductModel");
        
        $data = $products->searchProduct($search);
        if (is_null($data)) {
            $this->view("all-products", [
                "show-mini-nav" => 0,
                "title" => "Không có kết quả tìm kiếm cho '$search'",
                "products" => [],
                "current-page" => NULL,
                "last-page" => NULL,
                "path" => "http://localhost/WEB-212/Product/Search/$search/"
                
            ]);
            exit();
        }
        $sliced_data = array_slice($data, ($page-1)*self::PRODUCTS_PER_PAGE, self::PRODUCTS_PER_PAGE);

        $number_of_pages = ceil(count($data)/self::PRODUCTS_PER_PAGE);

        
        if ($page<=0) {
            header("Location: http://localhost/WEB-212/Product/Search/$search/");
            exit();
        } elseif ($page>$number_of_pages){
            header("Location: http://localhost/WEB-212/Product/Search/$search/$number_of_pages");
            exit();
        }
        $this->view("all-products", [
            "show-mini-nav" => 1,
            "title" => "Kết quả tìm kiếm cho '$search'",
            "products" => $sliced_data,
            "current-page" => $page,
            "last-page" => $number_of_pages,
            "path" => "http://localhost/WEB-212/Product/Search/$search/"
            
        ]);
    }

    function SmartPhone($id = 0) {
        $products = $this->model("ProductModel");

        $data = $products->getSmartPhone($id);
        //check if data exist
        if (is_null($data)) {
            header('Location: http://localhost/WEB-212/Product');
            exit();
        } else {
            $product_data = $data[0];
        }

        $this->view("product", [
            "product" => $product_data
        ]);
    }
}