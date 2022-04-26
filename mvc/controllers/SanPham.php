<?php

class SanPham extends Controller{

    
    function BoLoc($filter, $page = 1) {
        $model= $this->model('SanPhamModel');
        $arr =$model->BoLoc($filter);
        print_r($arr);
    }

    function TatCaSanPham($page = 1) {
        $model= $this->model('SanPhamModel');
        $a=$model->TatCaSanPham();
        print_r($a);
     //$this->view('product-grid', []);
    }

    function GetSanPham($url) {
        $model= $this->model('SanPhamModel');
        $arr =$model->GetSanPham($url);
        print_r($arr);
        //$this->view('product-detail', []);
    }
}
?>
