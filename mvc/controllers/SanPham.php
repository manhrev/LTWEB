<?php

class SanPham extends Controller{
    const PER_PAGE = 12;

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

        //all tags (max 12) //get random 11 tags
        $tagss = $model->GetAllTag();
        $rand = array_rand($tagss, min(11, count($tagss)));
        foreach ($rand as $index) {
            $tags[] = $tagss[$index];
        }
        $this->view('product-grid', [
            'view' => 2,
            'pageTitle' => $filter=='moi-nhat'?'Món ăn mới nhất':'Món ăn bán chạy',
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
            'perPage' => self::PER_PAGE,
            'url' => BASE_URL.'san-pham/bo-loc/'.$filter.'/',
            'categories' => $categories,
            'tags' => $tags,
            'path' => [
                0 => [
                    'name'=>'Sản phẩm',
                    'url' => BASE_URL.'san-pham'
                ],
                1 => [
                    'name'=> $filter=='moi-nhat'?'Món ăn mới nhất':'Món ăn bán chạy',
                    'url' => BASE_URL.'san-pham/bo-loc/'.$filter
                ]
            ]
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

        //all tags (max 12) //get random 11 tags
        $tagss = $model->GetAllTag();
        $rand = array_rand($tagss, min(11, count($tagss)));
        foreach ($rand as $index) {
            $tags[] = $tagss[$index];
        }

        $categories = $model->GetCategory();
        $this->view('product-grid', [
            'view' => 2,
            'pageTitle' => 'Tất cả món ăn',
            'numOfSP' => count($allSP),
            'allSP' => $sliced_data,
            'currentPage' => $page,
            'numOfPage' => $number_of_pages,
            'perPage' => self::PER_PAGE,
            'url' => BASE_URL.'san-pham/tat-ca-san-pham/',
            'categories' => $categories,
            'tags' => $tags,
            'path' => [
                0 => [
                    'name'=>'Sản phẩm',
                    'url' => BASE_URL.'san-pham'
                ],
                1 => [
                    'name'=> 'Tất cả món ăn',
                    'url' => BASE_URL.'san-pham/tat-ca-san-pham'
                ]
            ]
        ]);
    }

    function GetSanPham($url) {
        //handle add to cart
        // print_r($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['act'])){
                if ($_POST['act']=='summitReview'){
                    
                    // print_r($_SESSION['username']);
                    $result= $this->model('ReviewModel') -> AddReview($url, $_SESSION['username'],$_POST['rating'], $_POST['comment']);
                    if ($result===true){
                        header("Location: ".BASE_URL."san-pham/$url");
                    } elseif ($result=='Duplicate') {
                        echo "<script>
                        alert('Bạn đã review sản phẩm này rồi!');
                        window.location.href='" . BASE_URL . "/san-pham/$url';
                        </script>";
                       
                    }else {
                        echo 'Vui lòng thử lại! Đã có lỗi khi cập nhật DB! Error:'.$result;
                    }

                    } elseif ($_POST['act']=='updateReview') {
                        $result= $this->model('ReviewModel') -> UpdateReview($url, $_SESSION['username'],$_POST['rating'], $_POST['comment']);
                        if ($result===true){
                            header("Location: ".BASE_URL."san-pham/$url");
                        } 
                        else {
                        echo 'Vui lòng thử lại! Đã có lỗi khi cập nhật DB! Error:'.$result;
                    } }
                    elseif ($_POST['act']=='removeReview') {
                        $result= $this->model('ReviewModel') -> RemoveReview($url, $_SESSION['username']);
                        if ($result===true){
                            echo "<script>
                            alert('Đã xoá đánh giá!');
                            window.location.href='" . BASE_URL . "/san-pham/$url';
                            </script>";
                            header("Location: ".BASE_URL."san-pham/$url");
                        } 
                        else {
                        echo 'Vui lòng thử lại! Đã có lỗi khi cập nhật DB! Error:'.$result;
                    }
                    
                }
            } elseif (isset($_POST['url']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image'])) {
                // assert(isset($_POST['qty']),'qQty is not set');
                $key = $_POST['url'];
                $sp_to_cart = [
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'image' => $_POST['image'],
                    'qty' => $_POST['qty']
                ];
                if (isset($_SESSION['cart'])) {
                    // if (!array_key_exists($key, $_SESSION['cart']))
                    $_SESSION['cart'][$key] = $sp_to_cart;
                } else {
                    $_SESSION['cart'][$key] = $sp_to_cart;
                }
                header("Location: ".BASE_URL.'san-pham/'.$_POST['url']);
                // print_r($_POST);
            } else {
                header("Location: ".BASE_URL.'Error');
            }
        } 
        else {
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
            foreach ($SPlienquan as $key=>$arra) {
                if ($arra['name'] == $arr[0]['name'])
                    unset($SPlienquan[$key]);
            }
            
            //all tags (max 12) //get random 11 tags
            $tagss = $model->GetAllTag();
            $rand = array_rand($tagss, min(11, count($tagss)));
            foreach ($rand as $index) {
                $tags[] = $tagss[$index];
            }

            $reviews = $this -> model('ReviewModel') -> GetReviews($url);

            if (count($reviews)!=0){
                $avgreview=0;
                foreach ($reviews as $i => $info) {
                    $avgreview = $avgreview + $info['rate'];
                }
                $avgreview =round($avgreview/count($reviews) );
            }
            
            else $avgreview=0;

            $this->view('product-detail', [
                'view' => 2,
                'SP' => $arr,
                'categories' => $categories,
                'tags' => $tags,
                'banchay' => $SPbanchay,
                'lienquan' => $SPlienquan,
                'path' => [
                    0 => [
                        'name'=>'Sản phẩm',
                        'url' => BASE_URL.'san-pham'
                    ],
                    1 => [
                        'name'=> ucfirst($arr[0]['name']),
                        'url' => BASE_URL.'san-pham/'.$url
                    ]
                    ],
                'reviews' => $reviews,
                'avgreview' => $avgreview
            ]);
            
        }
    }

    
}
?>
