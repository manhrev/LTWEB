<?php

class SanPhamModel extends DB {
    //Get all products
    public function TatCaSanPham()
    {
        $query = "select url, name, images, price, description from product";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    //Get product via url
    public function GetSanPham($url)
    {
        $query  = " select * from product where '$url'= product.url";
        $result = $this ->con -> query($query);
        
        $resultArray[]= mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $resultArray;
    }
    public function BoLoc($filter)
    {
        switch ($filter)
        {
            case 'ban-chay-nhat':
                $query = "select  url, name, images, price, description, view_count  from product";
                $result = $this -> con -> query($query);
        
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                    $resultArray[] = $item;
                }
                array_multisort( array_column($resultArray, "view_count"), SORT_DESC, $resultArray);
                break;
            case 'moi-nhat':
                $query = "select  url, name, images, price, description, date_created  from product";
                $result = $this -> con -> query($query);
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                    $resultArray[] = $item;
                }
                function sortFunction( $a, $b ) {
                    return strtotime($b["date_created"]) - strtotime($a["date_created"]);
                }
                usort($resultArray, "sortFunction");
                break;
        }
        return $resultArray;
    }
}