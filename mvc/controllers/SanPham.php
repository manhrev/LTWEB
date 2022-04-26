<?php

class SanPham extends Controller{
    const PER_PAGE = 6;
    
    function BoLoc($filter, $page = 1) {

    }

    function TatCaSanPham($page = 1) {
        
        $model= $this->model('SanPhamModel');
        $allSP=$model->TatCaSanPham();
        
        $sliced_data = array_slice($allSP, ($page-1)*self::PER_PAGE, self::PER_PAGE);

        $number_of_pages = ceil(count($allSP)/self::PER_PAGE);

        if ($page<=0 || $page>$number_of_pages) {
            header("Location: ".BASE_URL."Error");
        }

        $this->view('product-grid', [
            'pageTitle' => 'Tất cả sản phẩm',
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
        ]);
    }

    function GetSanPham($ten) {
        $this->view('product-detail', []);
    }
}

?>
