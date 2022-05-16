<?php
require_once './mvc/helper/authorization.php';
class Login extends Controller{

    function Default(){
        if (isLoggedIn()) {
            header("Location: ".BASE_URL);
            exit();
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
            
                if (validateLoginInfo($username, $password)) {
                    //login info ok
                    if ($username == 'Chiendau' && $password == '413314') {
                        //only admin
                        setUser($username, 1);
                        echo
                        "<script>
                            alert('".'Đăng nhập thành công!'."');
                            window.location.href='".BASE_URL."';
                        </script>"; 
                    } else {
                        echo
                        "<script>
                            alert('".'Tên người dùng hoặc mật khẩu không đúng!'."');
                            window.location.href='".BASE_URL."login';
                        </script>"; 
                    }
                    
                } else {
                    echo 
                    "<script>
                        alert('".'Tên đăng nhập hoặc mật khẩu không hợp lệ, vui lòng thử lại!'."');
                        window.location.href='".BASE_URL."login';
                    </script>"; 
                }
            } else {
                echo 
                "<script>
                    alert('".'Đã xảy ra lỗi, vui lòng thử lại!'."');
                    window.location.href='".BASE_URL."login';
                </script>"; 
            }
        } else {
            $model = $this->model('SanPhamModel');
            $categories = $model->GetCategory();
            $this->view('user-login', [
                'view' => 0,
                'categories' => $categories,
            ]);
        }
    }

}

?>
