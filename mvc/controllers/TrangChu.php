<?php

class TrangChu extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');

        //category : url, name, image
        $category =$model->GetCategory();
        //sanphamnoibat: url, name, images, price, description, view_count
        $sanphamnoibat = $model->BanChayNhat();
        
        // category lay max6 cái
        // san pham noi bat min4 max 8
        $sanphamnoibat = array_slice($sanphamnoibat, 0, 8);
        $categories = $model->GetCategory();

        $this->view('home', [
            'view' => 0,
            "categories" => $category,
            "SPnoibat" => $sanphamnoibat,
            'categories' => $categories,
        ]);

    }
    
}

?>
