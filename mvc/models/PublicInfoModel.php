<?php

class PublicInfoModel extends DB {
    public function GetInfo()
    {
		$query = "SELECT * FROM contract_info";
        $result = $this -> con -> query($query);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    public function Update($data) {
        $query = "UPDATE `contract_info` SET `email`= '$data[email]' , `address`='$data[address]' , `hotline`='$data[hotline]', `aboutus`='$data[aboutus]', `wedo`='$data[wedo]' WHERE `email`='$data[oldemail]'";
        $result = $this -> con -> query($query);
        if ($result===true)
            if (mysqli_affected_rows($this->con)!=0) return true;
            
        return $this->con->error ;
    }
}