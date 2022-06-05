<?php
require_once './mvc/helper/authorization.php';
class Account extends Controller
{

    function Default()
    {
        if (!isLoggedIn()) {
            header("Location: " . BASE_URL);
            exit();
        }

        $model = $this->model('SanPhamModel');
        $categories = $model->GetCategory();

        $userModel = $this->model('UserModel');
        $userdata = $userModel->GetUser($_SESSION['username']);

        $this->view('user-acount', [
            'view' => 0,
            'categories' => $categories,
            'userdata' => $userdata
        ]);
    }

    function EditProfile()
    {
        $model = $this->model('SanPhamModel');
        $categories = $model->GetCategory();

        $userModel = $this->model('UserModel');
        $userdata = $userModel->GetUser($_SESSION['username']);

        if (isset($_POST['username'])) {

            $updateRs = $userModel->UpdateUser($_POST['username'], $_POST['name'], $_POST['phone_number'], $_POST['address']);
            // print_r($_POST) ;
            if ($updateRs === true) {
                $userdata = $userModel->GetUser($_SESSION['username']);
                $this->view('user-acount', [
                    'view' => 0,
                    'categories' => $categories,
                    'userdata' => $userdata,
                    'message' => 'Cập nhật thành công!'
                ]);
            } else {
                // print_r($_POST) ;
                // print_r($updateRs);
                $this->view('edit-profile', [
                    'view' => 0,
                    'categories' => $categories,
                    'userdata' => $userdata,
                    'message' => 'Lưu không thành công! Lỗi: ' . (string)$updateRs
                ]);
            }
        } elseif (isset($_POST['password'])) {
            $updateRs = $userModel->UpdatePass($_SESSION['username'], $_POST['password'], $_POST['new_password']);
            if ($updateRs === true){
                $message= 'Mật khẩu đã thay đổi!';
            }
            elseif ($updateRs===false) {
                $message= 'Mật khẩu cũ không đúng!';

            } else{
                $message= 'Lưu không thành công! Lỗi: ' . (string)$updateRs;
            }
            $this->view('edit-profile', [
                'view' => 0,
                'categories' => $categories,
                'userdata' => $userdata,
                'message' => $message
            ]);


        } else {
            // print_r($_POST) ;
            $this->view('edit-profile', [
                'view' => 0,
                'categories' => $categories,
                'userdata' => $userdata
            ]);
        }
    }
}
