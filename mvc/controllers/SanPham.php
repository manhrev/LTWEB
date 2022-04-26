<?php

class SanPham extends Controller{

    
    function BoLoc($filter, $page = 1) {
        echo 'boloc';
    }

    function TatCaSanPham($page = 1) {
        echo "tat ca sp";
    }

    function GetSanPham($ten) {
        echo 'San pham'.$ten;
    }
}

?>
