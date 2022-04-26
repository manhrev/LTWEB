<?php

class UserTableModel extends DB
{
    function getUserInfo($email)
    {
        // $query = 'Select `email`, `password` from `user` where `email`='.$email;
        $query = "SELECT * FROM user WHERE (email='$email')";
        $result = $this->con->query($query);

        if (mysqli_num_rows($result) == 0) {
            return [];
        } else {
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }

    function createUser($name, $email, $password, $phone)
    {
        #role id =1 --> customer
        // $create_time = date('Y-m-d H:i:s');
        $sql = "SELECT email FROM user WHERE email='$email'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO user(fullname,email,password,phone_number, role_id ) VALUES('$name','$email','$password','$phone','1')";
            $this->con->query($sql);
            if (mysqli_affected_rows($this->con) == 1) {
                return 1;
            } else {
                // return 0;
                return $this->con->error;
            }
        } else {
            return -1;
        }
    }
}
