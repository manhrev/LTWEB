<?php

class LienHe extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');
        $info = $this -> model('PublicInfoModel')->GetInfo();
        $categories = $model->GetCategory();
        $this->view('about-us', [
            'view' => 3,
            'categories' => $categories,
            'info' => $info
        ]);
    }
    
}

?>
