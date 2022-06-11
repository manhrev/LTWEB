<?php

class UserModel extends DB
{
    public function Login($username, $password)
    //  Trả về 0: không tìm thấy user, 1: User là khách, 2: user là admin
    {
        $query = " SELECT username, password, role FROM user where username = '$username'";
        $result = $this->con->query($query);
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (!isset($item['password'])) return 0;
        if ($item['password'] == $password) {
            return $item['role'];
        }
        return 0;
    }
    public function Signup($username, $password, $name, $address, $phonenumber)
    {
        $query = " SELECT * FROM user WHERE username = '$username'";

        $result = $this->con->query($query);

        if (mysqli_num_rows($result) > 0) {
            return "Lỗi trùng tên người dùng (User name)";
        } else {
            $signupquery = "INSERT INTO `user` (`username`, `password`, `name`, `address`, `phone_number`,`role`) VALUES ('$username', '$password', '$name', '$address', '$phonenumber','2')";
            if ($this->con->query($signupquery) === TRUE) {
                return "Đăng kí thành công";
            } else {
                return "Lỗi đăng kí tài khoản!";
            }
        }
    }
    public function GetUser($username)
    {
        // $query = " SELECT username, name, address, phone_number, date_created, isblocked FROM user WHERE username = '$username'";
        $query = " SELECT * FROM user WHERE username = '$username'";
        $result = $this->con->query($query);
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $item;
    }

    public function GetAll(){
        $query = " SELECT username, name, address, phone_number, date_created, isblocked FROM user WHERE username <> 'admin'";
        $result = $this->con->query($query);
        // print_r($result);
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            $resultArray[]=$item;
        }
        
        return $resultArray;
    }

    public function UpdateUser($username, $name, $phone_number, $address)
    {
        $query = "UPDATE `user` SET `name`= '$name', `phone_number` ='$phone_number', `address`='$address' WHERE `username`='$username'";
        if ($this->con->query($query) === true) {
            return true;
        } else {
            return $this->con->error;
        };
    }

    public function UpdatePass($username, $password, $new_password)
    {
        $query = "SELECT username, password FROM user WHERE username = '$username'";
        $result = $this->con->query($query);
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) == 1) {
            if ($item['password'] == $password) {
                $query = "UPDATE `user` SET `password`= '$new_password' WHERE `username`='$username'";
                if ($this->con->query($query) === true) {
                    return true;
                } else {
                    return $this->con->error;
                };
            } else return false;
        } else return $this->con->error;
    }

    public function DeleteUser($username){
        $query = "DELETE FROM user WHERE username='$username'" ;
            
        if ($this->con->query($query ) === TRUE)
        {
            return "User đã bị xoá khỏi hệ thống!";
        }
        else
        {
            return "Đã phát sinh lỗi: ". (string) $this->con->error;
        }
    }

    public function BlockUser($username, $value){
        $query = "UPDATE `user` SET `isblocked`= '$value' WHERE `username`='$username'";
        if ($this->con->query($query) === true) {
            return $value==1 ? "User đã bị block!": "Đã mở khoá!";
        } else {
            return $this->con->error;
        };
    }
}
