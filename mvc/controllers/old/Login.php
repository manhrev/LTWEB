
<?php
class Login extends Controller{
    function __construct() {
        // $this->data['content']='login';
    }

    function default(){

        if (isset($_SESSION['email'])){ 
            // $this->view("test", ['message'=>'đã đăng nhập']);
            header("Location: http://localhost/WEB-212/Home");

        } else {
            // $this->data['content']='login';
            // $this->view('frontend/layout',$this->data);
            $this->view('login');
        }
        
       
    }
    function isValidUser($email, $pass){
            // truy vấn email từ database
       $userQueryResult = $this->model('UserTableModel');
       $userInfo = $userQueryResult->getUserInfo($email);
       if ($userInfo==[]){
           
           return false;
       }
       else {
          
           if ($email == $userInfo['email'] && $pass == $userInfo['password'])
           return true;
           return false;
       }
    }

    function login(){
        // $this->view("test", ['message'=> "User đã nhập vào email=".$_POST['email'].' và pass='.$_POST['password']]);
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if (strlen($email)>1){
            if ($this->isValidUser($email, $pass)){
            $_SESSION['email']= $email;
            $_SESSION['password']= $pass;
            
        $_SESSION['notiMessage']="Đăng nhập thành công!";
          header("Location: http://localhost/WEB-212/Home");

        } else {
   
        $this->data['error']='Email hoặc mật khẩu không chính xác!';
        $this->view('login',$this->data);
        header("Location: http://localhost/WEB-212/Login");
        }
        } 
        else {

                $this->data['error']='Email hoặc mật khẩu không chính xác!';
                $this->data['view']='login';
                $this->view('frontend/layout',$this->data);
        }
    }

    function logout(){
        if (isset($_SESSION['email'])){
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            $_SESSION['notiMessage']="Đã đăng xuất!";

            header("Location: http://localhost/WEB-212/Home");
           
        }
    }
}

?>