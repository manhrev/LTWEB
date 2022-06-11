<?php

class LienHe extends Controller{

    function Default(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            // print_r($_POST);
            $model= $this->model('CusContactModel');
            $result =$model->Add($_POST);
            if ($result === True ){
                echo "
                <script>
                    alert('Cảm ơn bạn đã liên lạc, chúng tôi sẽ phản hồi sớm nhất có thể!');
                    location.replace('" .BASE_URL ."lien-he');
                </script>
                ";
            } else {
                echo $result;
            }

        }
        else {
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
    
}

?>
