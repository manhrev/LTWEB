<?php

class GioHang extends Controller{

    function Default(){
    
        $model= $this->model('SanPhamModel');
        $categories = $model->GetCategory();
        $this->view('product-cart', [
            'view' => 0,
            'categories' => $categories,
        ]);

    }

    function XoaSanPham($url) {
        if(isset($_SESSION['cart'])) {
            unset($_SESSION['cart'][$url]);
        }
        header("Location: ".BASE_URL.'gio-hang');
    }
    
}

?>
