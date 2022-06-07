<?php

class ReviewModel extends DB {
    public function GetReviews($url)
    {
        $resultArray = [];
        $query = "SELECT * FROM reviews WHERE url='$url'";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function AddReview($url,$username, $rating, $comment){
        $query="INSERT INTO `reviews` (`url`, `username`, `rate`, `comment`) VALUES ('$url', '$username', '$rating', '$comment')";
        $result = $this -> con -> query($query);
        if ($result===true)
            if (mysqli_affected_rows($this->con)!=0) return true;
            
        return (strpos($result,'Duplicate')== 0) ? 'Duplicate' : $this->con->error ;
        
    }

}