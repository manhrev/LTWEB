<?php

class TrangChu extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');

        //category : url, name, image
        //sanphamnoibat: url, name, images, price, description, view_count
        $sanphamnoibat = $model->BanChayNhat();
        
        // category lay max6 cái
        // san pham noi bat min4 max 8
        $sanphamnoibat = array_slice($sanphamnoibat, 0, 8);
        $categories = $model->GetCategory();
        
        //get random 6 categories for homepage banner
        $rand = array_rand($categories, 6);
        foreach ($rand as $index) $categories6[] = $categories[$index];
        
        // lay danh muc thi cong
        $qlModel = $this->model('QuanLiModel');
        $DMthicong = $qlModel->GetAnhThiCong();
        
        $this->view('home', [
            'DMthicong' => $DMthicong,
            'view' => 0,
            "SPnoibat" => $sanphamnoibat,
            'categories' => $categories,
            'categoriesBanner' => $categories6
        ]);

    }
    
}

?>
