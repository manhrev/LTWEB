<?php

class SanPham extends Controller{

    
    function BoLoc($filter, $page = 1) {
        echo 'boloc';
    }

    function TatCaSanPham($page = 1) {
     $this->view('product-grid', []);
    }

    function GetSanPham($ten) {
        $this->view('product-detail', []);
    }
}

?>
