<?php

class SanPham extends Controller{
    const PER_PAGE = 6;
    
    function BoLoc($filter, $page = 1) {
        $model= $this->model('SanPhamModel');
        $arr =$model->BoLoc($filter);
        print_r($arr);
    }

    function TatCaSanPham($page = 1) {
        
        $model= $this->model('SanPhamModel');
        $allSP=$model->TatCaSanPham();
        // print_r($allSP);
        //test
        // $allSP = array_merge($allSP, $allSP);
        
        $sliced_data = array_slice($allSP, ($page-1)*self::PER_PAGE, self::PER_PAGE);

        $number_of_pages = ceil(count($allSP)/self::PER_PAGE);
        
        if ($page<=0 || $page>$number_of_pages) {
            header("Location: ".BASE_URL."Error");
        }
        $categories = $model->GetCategory();
        $this->view('product-grid', [
            'pageTitle' => 'Tất cả sản phẩm',
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
            'perPage' => self::PER_PAGE,
            'url' => BASE_URL.'san-pham/tat-ca-san-pham/',
            'categories' => $categories
        ]);
    }

    function GetSanPham($url) {
        $model= $this->model('SanPhamModel');
        $arr = $model->GetSanPham($url);
        $categories = $model->GetCategory();
        
        
        $this->view('product-detail', [
            'SP' => $arr,
            'categories' => $categories
        ]);
    }
}
?>
