<?php

class QuanLi extends Controller{
    

    //render trang quan li, lua chon ql sp, ql danh muc...
    function Default(){
        $model= $this->model('QuanLiModel');
        echo "trang quan li chinh";

        //TẤT CẢ CÁC HÀM ĐỀU TRẢ VỀ STRING THÔNG BÁO ĐÃ THỰC HIỆN YÊU CẦU HAY BỊ LỖI. VÍ DỤ: Thêm sản phẩm thành công !!, Sản phẩm đã tồn tại,....

        //----------------------------//
        
        //ThemCategory($Name,$ImageLink) (Tên, link ảnh của danh mục)

        //SuaCategory($CurrentUrl , $Name, $ImageLink) (URL  danh mục cần sửa, Tên mới, Link ảnh mới)

        //XoaCategory($CurrentUrl) (URL danh mục cần xóa)

        //----------------------------//

        //ThemSP($Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys) (Tên, Giá, link nhiều ảnh, mô tả, view, MẢNG CHỨA URL CÁC DANH MỤC CHỨA SẢN PHẨM)

        // SuaSP($CurrentUrl, $Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys) (URL sản phẩm cần sửa, Tên, Giá, link nhiều ảnh, mô tả, view, MẢNG CHỨA URL CÁC DANH MỤC CHỨA SẢN PHẨM)

        // XoaSP($CurrentUrl) (URL sản phẩm cần xóa.)

    }
     // san pham
    function QuanLiSanPham() {
        $spModel = $this->model('SanPhamModel');
        $allSP = $spModel->TatCaSanPhamDM();
        $this->view('ql-sanpham', [
            'allSP' => $allSP
        ]);
    }

    function ThemSanPham() {
        echo 'them san pham';
    }

    function ChiTietSanPham($url) {
        $spModel = $this->model('SanPhamModel');
        $SP = $spModel->GetSanPham($url);
        $this->view('sanpham-chitiet', [
            'sanpham' => $SP,
        ]);
    }

    function ChinhSuaSanPham($url=null) {
        if ($url) {
            $spModel = $this->model('SanPhamModel');
            $SP = $spModel->GetSanPham($url);

            //get categories (khac categories cua san pham hien tai)
            $categories = $spModel->GetCategory(false);
            $categories = array_diff_key($categories, $SP[1]);
    
            $this->view('sanpham-chinhsua', [
                'sanpham' => $SP,
                'diff-categories' => $categories
            ]);
        }
        else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $i = 0;
                $count = count($_POST);
                //categories
                $categories = [];
                foreach ($_POST as $key=>$post) {
                    echo($key).'<br>';
                    if ($i>4 && $i<$count-1) {
                        $categories[] = $post;
                    }
                    $i ++;
                }
                //khac
                $name = $_POST['name'];
                $price = $_POST['price'];
                $view_count = $_POST['view_count'];
                $images = $_POST['images'];
                $description = $_POST['description'];
                $tags = $_POST['tags'];
                $current_url = $_POST['url'];

                $model = $this->model('QuanLiModel');
                echo $model->SuaSP($current_url, $name, $price, $images, $description, $tags, $view_count, $categories);
               
                
            } else {
                header('Location: '.BASE_URL.'quan-li/quan-li-san-pham');
            }
        }
    }

    function XoaSanPham() {

    }

    // danh muc
    function QuanLiDanhMuc() {
        echo 'quan li dm';
    }

    function ThemDanhMuc() {
        echo 'them dm';
    }

    function XoaDanhMuc() {
        echo 'xoa dm';
    }

    function ChinhSuaDanhMuc() {
        echo 'sua dm';
    }
    
}

?>