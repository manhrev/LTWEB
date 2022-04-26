<?php

class OrderModel extends DB {

    public function getOrder($userId) {
        $query = "SELECT id, total_money FROM orders WHERE user_id = '$userId' AND status = 0 
                    ORDER BY order_date DESC";
        $result = $this->con->query($query);
        
        $resultArray = [];
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        if (count($resultArray) == 0) 
            return false;

        return $resultArray[0];
    }

    public function getOrderDetail($orderId) {
        $query = "SELECT order_detail.id, product_id, title, thumbnail, price, name, num, total_money 
            from order_detail, product, category  
            WHERE order_id = '$orderId' AND product_id = product.id AND category.id = product.category_id";
        $result = $this->con->query($query);
        $resultArray = [];
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        if (count($resultArray) == 0) 
            return false;
        return $resultArray;
    }

    public function removeOrderDetail($orderDetail_id) {
        $query = "DELETE FROM order_detail WHERE id = '$orderDetail_id'";
        $this->con->query($query);
    }

    public function createOrder($userId) {
        $query = "INSERT INTO orders (user_id, order_date, status, total_money) 
            VALUES ('$userId', CURRENT_TIMESTAMP(), 0, 0)";
        $this->con->query($query);
    }

    public function updateOrder($orderId, $status, $totalMoney) {

    }

    public function insertToOrder($orderId, $productId, $num) {
        $query = "SELECT product_id, num FROM order_detail WHERE order_id = '$orderId' AND product_id = '$productId'";
        $result = $this->con->query($query);
        $resultArray = [];
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        if (count($resultArray) == 0) {
            $query1 = "INSERT INTO order_detail (order_id, product_id, num)
            VALUES ('$orderId', '$productId', '$num')";
            $this->con->query($query1);
        } else {
            $num1 = $resultArray[0]['num'] + $num;
            $query1 = "UPDATE order_detail SET num = '$num1' WHERE order_id='$orderId' AND product_id='$productId'";
            $this->con->query($query1);
        }

        
    }
}