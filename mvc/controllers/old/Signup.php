
<?php
class Signup extends Controller{

    function default(){
        if (isset($_SESSION['email'])){ 
            header("Location: http://localhost/WEB-212/Home");

        } else {
			// $this->data['content']='signup';
            // $this->view('frontend/layout',$this->data);
			$this->view('signup');
        }
    }

	function signup(){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];

		$model = $this-> model('UserTableModel');
		// if  ($model ->getUserInfo($email) == []){
	
			$result= $model->createUser($fullname, $email, $password,$phone);
			if ($result ==1){
				// $this->data['error']='Đăng kí thành công!';
				$_SESSION['email']=$email;
				$_SESSION['password']= $password;
				$_SESSION['notiMessage']="Đăng kí thành công!";
				// header("Location: http://localhost/WEB-212/Home");
				$this -> view('home',[]); 
				
			} elseif ($result == -1) {
				$this->data['error']='Email đã tồn tại!';
				$this->view('signup',$this->data);
			} else {
				#return 0
				$this->data['error']='Lỗi! Có lỗi xảy ra với Database: '.$result;
				$this->view('signup',$this->data);
			}
			

		// $this -> view('test', ["message"=>"$fullname, $email, $password"]);
		// $this -> view('test',[]); 
	}


    
}

?>