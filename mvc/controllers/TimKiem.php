<?php

class TimKiem extends Controller{

    function Search($tag, $page =1) {
        $model= $this->model('TimKiemModel');
        //$search : url, name, images, price, description (Các sản phẩm có từ khóa là $tag)
        $search =$model->Search($tag);
        print_r($search);
    }
    
}

?>
