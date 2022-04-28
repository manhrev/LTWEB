<?php

class Login extends Controller{

    function Default(){
        $model= $this->model('SanPhamModel');
        $categories = $model->GetCategory();
        $this->view('user-login', [
            'view' => 0,
            'categories' => $categories,
        ]);
    }
    
}

?>
