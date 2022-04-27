<?php

class DanhMuc extends Controller{
    function GetSPDanhMuc($tenDanhMuc, $page = 1) {
        $model= $this->model('DanhMucModel');
        $arr =$model->GetSPDanhMuc($tenDanhMuc);
        //$arr:url,name, images, price, description (Các sản phẩm trong danh mục)
        print_r($arr); 
    }
    
}

?>
