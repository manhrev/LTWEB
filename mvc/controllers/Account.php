<?php
require_once './mvc/helper/authorization.php';
class Account extends Controller{

    function Default()
    {
        $model = $this->model('SanPhamModel');
        $categories = $model->GetCategory();
        $this->view('user-acount', [
            'view' => 0,
            'categories' => $categories,
        ]);
    }
    

}

?>
