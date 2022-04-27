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
        $query  = "select pd.url, pd.name, pd.price, pd.images, pd.description, pd.tag, pd.date_created, pd.view_count, ct.name as category_name from product as pd inner join category_details as ct_dt on pd.url=ct_dt.product_url inner join category as ct on ct_dt.category_url= ct.url where 'giuong-go-soi'= pd.url;";
        $result = $this ->con -> query($query);
        
        $resultArray[]= mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $resultArray;
    }
    // used for both BoLoc and SanPhamNoiBat
    public function BanChayNhat()
    {
        $query = "select  url, name, images, price, description, view_count  from product";
        $result = $this -> con -> query($query);

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }
        array_multisort( array_column($resultArray, "view_count"), SORT_DESC, $resultArray);
        return $resultArray;
    }
    // Get products with filter
    public function BoLoc($filter)
    {
        switch ($filter)
        {
            case 'ban-chay-nhat':
                $resultArray=$this -> BanChayNhat();
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
    public function GetCategory()
    {
        $query = "select * from category";
        $result = $this -> con -> query($query);
        
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}