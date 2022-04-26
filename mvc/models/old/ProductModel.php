<?php

class ProductModel extends DB {

    public function getAllProduct() {
        $query = "SELECT product.id, title, price, discount, thumbnail, description, category.name FROM product, category WHERE product.category_id = category.id";
        $result = $this->con->query($query);
        
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    
    public function searchProduct($search) {
        $query = "SELECT * FROM product WHERE title REGEXP '$search'";
        $result = $this->con->query($query);
        $resultArray = NULL;
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getSmartPhone($phone_id) {
        $query = "SELECT product.id, title, price, discount, thumbnail, description, category.name FROM product, category WHERE product.category_id = category.id and '$phone_id'=product.id";
        $result = $this->con->query($query);
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item; 
        }
        return $resultArray;
    }
    
}