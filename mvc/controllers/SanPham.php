<?php

class SanPham extends Controller{

    
    function BoLoc($filter, $page = 1) {

    }

    function TatCaSanPham($page = 1) {
        $model= $this->model('SanPhamModel');
        $a=$model->TatCaSanPham();
        print_r($a);
     //$this->view('product-grid', []);
    }

    function GetSanPham($ten) {
        $this->view('product-detail', []);
    }
}

?>
