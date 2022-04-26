<?php

class Cart extends Controller{
    public $userId = 0;

    function Default(){
        $orders = $this->model("OrderModel");
        $cart = $orders->getOrder($this->userId);
        if ($cart) {
            $cartDetail = $orders->getOrderDetail($cart['id']);
            if ($cartDetail) {
                $this->view("cart", [
                    "items" => $cartDetail,
                    
                ]);
                return;
            }
        }
        $this->view("cart", [
            "items" => [],

        ]);
    }

    function RemoveItem($orderDetail_id) {
        $orders = $this->model("OrderModel");
        $orders->RemoveOrderDetail($orderDetail_id);
        header("Location: http://localhost/WEB-212/cart");
    }

    function AddItem($productId, $num) {
        $orders = $this->model("OrderModel");
        $cart = $orders->getOrder($this->userId);

        #if not existing pending order
        if (!$cart) {
            $orders->createOrder($this->userId);
            $cart = $orders->getOrder($this->userId);
        }
        #if exist
        else {

        }
        $orders->insertToOrder($cart['id'], $productId, $num);
        header("Location: http://localhost/WEB-212/cart");
    }
}
?>