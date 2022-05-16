<?php

class UserModel extends DB {
    //Finding product via tag
    public function Login($username, $password)
    {
        $query = " SELECT username, password FROM user where username = '$username'";
        $result = $this -> con -> query($query);
        $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($item['password']==$password)
        {
            return 1;
        }
        return 0;

    }
}