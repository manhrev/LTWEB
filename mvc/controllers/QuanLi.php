<?php

class QuanLi extends Controller{
    


    function Default(){
        $model= $this->model('QuanLiModel');


        //TẤT CẢ CÁC HÀM ĐỀU TRẢ VỀ STRING THÔNG BÁO ĐÃ THỰC HIỆN YÊU CẦU HAY BỊ LỖI. VÍ DỤ: Thêm sản phẩm thành công !!, Sản phẩm đã tồn tại,....

        //----------------------------//
        
        //ThemCategory($Name,$ImageLink) (Tên, link ảnh của danh mục)

        //SuaCategory($CurrentUrl , $Name, $ImageLink) (URL  danh mục cần sửa, Tên mới, Link ảnh mới)

        //XoaCategory($CurrentUrl) (URL danh mục cần xóa)

        //----------------------------//

        //ThemSP($Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys) (Tên, Giá, link nhiều ảnh, mô tả, view, MẢNG CHỨA URL CÁC DANH MỤC CHỨA SẢN PHẨM)

        //SuaSP('giuong-pallet', 'giường pallet xịn', 11220000, 'https://i.imgur.com/j3b9h8y.jpg, https://i.imgur.com/k3VhXAr.jpg', 'sahdjsahdjhasjdhsajhdjash', 'giường, pallet, giường pallet', 0, array('giuong','vach-tv')); //(URL sản phẩm cần sửa, Tên, Giá, link nhiều ảnh, mô tả, view, MẢNG CHỨA URL CÁC DANH MỤC CHỨA SẢN PHẨM)

        // XoaSP($CurrentUrl) (URL sản phẩm cần xóa.)

    }

    
}

?>