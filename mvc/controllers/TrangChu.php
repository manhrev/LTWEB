<?php

class TrangChu extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');
        //category : url, name, image
        $category =$model->GetCategory();
        //sanphamnoibat: url, name, images, price, description, view_count
        $sanphamnoibat = $model->BanChayNhat();
        $this->view('home', []);

    }
    
}

?>
