<?php

class SanPhamModel extends DB {
    public function getAllSP()
    {
        $query = "select url, name, images, price  from product";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}