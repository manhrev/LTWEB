<?php

class TimKiem extends Controller{

    const PER_PAGE = 6;

    function Search($tag, $page =1) {
        $model= $this->model('SanPhamModel');
        $timkiemmodel = $this->model('TimKiemModel');

        //$search : url, name, images, price, description (Các sản phẩm có từ khóa là $tag)
        $allSP =$timkiemmodel->Search($tag);
        

        if (count($allSP) == 0) {
            // header("Location: ".BASE_URL.'Error');
            $tagss = $model->GetAllTag();
            $rand = array_rand($tagss, min(11, count($tagss)));
            foreach ($rand as $index) {
                $tags[] = $tagss[$index];
            }
            $categories = $model->GetCategory();
            $this->view('search-fail', [
                'view' => 2,
                'pageTitle' => 'Không có kết quả tìm kiếm cho'.' "'.$tag.'"!',
                'categories' => $categories,
                'tags' => $tags
            ]);
        }
        // print_r($allSP);
        //test
        // $allSP = array_merge($allSP, $allSP);
        
        $sliced_data = array_slice($allSP, ($page-1)*self::PER_PAGE, self::PER_PAGE);

        $number_of_pages = ceil(count($allSP)/self::PER_PAGE);
        
        if ($page<=0 || $page>$number_of_pages) {
            header("Location: ".BASE_URL."Error");
        }

        //all tags (max 12) //get random 11 tags
        $tagss = $model->GetAllTag();
        $rand = array_rand($tagss, min(11, count($tagss)));
        foreach ($rand as $index) {
            $tags[] = $tagss[$index];
        }

        $categories = $model->GetCategory();
        $this->view('product-grid', [
            'view' => 2,
            'pageTitle' => 'Kết quả tìm kiếm cho'.' "'.$tag.'"',
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
            'perPage' => self::PER_PAGE,
            'url' => BASE_URL.'tim-kiem/'.$tag.'/',
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
    
}

?>
