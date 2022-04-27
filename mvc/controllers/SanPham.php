<?php

class SanPham extends Controller{
    const PER_PAGE = 6;

    function Default() {
        $this->TatCaSanPham();
    }
    
    function BoLoc($filter, $page = 1) {
        

        $model= $this->model('SanPhamModel');
        $allSP=$model->BoLoc($filter);

        if (count($allSP) == 0) {
            header("Location: ".BASE_URL.'Error');
        }
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
            'view' => 2,
            'pageTitle' => $filter=='moi-nhat'?'Sản phẩm mới nhất':'Sản phẩm bán chạy',
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
            'perPage' => self::PER_PAGE,
            'url' => BASE_URL.'san-pham/tat-ca-san-pham/',
            'categories' => $categories
        ]);
    }

    function TatCaSanPham($page = 1) {
        
        $model= $this->model('SanPhamModel');
        $allSP=$model->TatCaSanPham();

        if (count($allSP) == 0) {
            header("Location: ".BASE_URL.'Error');
        }
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
            'view' => 2,
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
        
        if (!isset($arr[0])) {
            header("Location: ".BASE_URL.'Error');
        }

        $categories = $model->GetCategory();
        //ban chay
        $SPbanchay = $model->BanChayNhat();
        $SPbanchay = array_slice($SPbanchay, 0, 3);
        
        //sp lien quan
        $dmmodel = $this->model('DanhMucModel');
        $SPlienquan = $dmmodel->GetSPDanhMuc($arr[1][0]['url']);
        $SPlienquan = array_slice($SPlienquan, 0, 3);
        
        //all tags (max 12) //get random 11 tags
        $tags = $model->GetAllTag();
        // $tags = array_rand($tags, min(11, count($tags)));
        


        $this->view('product-detail', [
            'view' => 2,
            'SP' => $arr,
            'categories' => $categories,
            'tags' => $tags,
            'banchay' => $SPbanchay,
            'lienquan' => $SPlienquan
        ]);
    }
}
?>
