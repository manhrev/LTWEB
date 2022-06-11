<?php

class CusContactModel extends DB {
    public function GetAll($status)
    {
        $resultArray = [];
        $query = "SELECT * FROM cus_contact WHERE   `status`='$status'";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function Add($data) {
		$fullname=$data['fullname'];
		$email =$data['email'];
		$phone =$data['phone'];
		$title=$data['title'];
		$content=$data['content'];
		
		$query = "INSERT INTO `cus_contact` (fullname, email, phone, title, content, status) VALUE ('$fullname', '$email', '$phone', '$title', '$content', 0)";
        $result = $this -> con -> query($query);
        if ($result===true)
            if (mysqli_affected_rows($this->con)!=0) return true;
            
        return $this->con->error ;
    }

	public function Update($id, $status){
		$query = "UPDATE `cus_contact` SET `status` ='$status' WHERE `id`='$id' ";
        $result = $this -> con -> query($query);
        if ($result===true)
            if (mysqli_affected_rows($this->con)!=0) return true;
            
        return $this->con->error ;
	}

    public function Remove($id){
		$query = "DELETE FROM `cus_contact`  WHERE `id`='$id' ";
        $result = $this -> con -> query($query);
        if ($result===true)
            if (mysqli_affected_rows($this->con)!=0) return true;
            
        return $this->con->error ;
	}
}