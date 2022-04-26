<?php
require_once "./mvc/config/config.php";
class App{
    protected $controller="TrangChu";
    protected $action="Default";
    protected $params=[];

    function __construct(){
  
        $arr = $this->UrlProcess();
        if (!isset($arr[0])) {
            $arr[0] = $this->controller;
        }

        $arr = $this->Check($arr);
        
        // Controller
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

    function Check($arr) {
        $returnArr = array();
        //kiem tra controller
        switch ($arr[0]) {
            //home
            case 'trang-chu':
                array_push($returnArr, 'TrangChu');
                if (isset($arr[1])) return array('NotFound');
                break;
            //sp
            case 'san-pham':
                array_push($returnArr, 'SanPham');
                if (isset($arr[1])) {
                    switch ($arr[1]) {
                        //filter
                        case 'bo-loc':
                            array_push($returnArr, 'BoLoc');
                            if (count($arr) <= 2 || count($arr) > 4) {
                                return array('NotFound');
                            } 
                            else {
                                for ($i = 2; $i<count($arr); $i++) {
                                    array_push($returnArr, $arr[$i]);
                                }
                            }
                            break;
                        //all sp
                        case 'tat-ca-san-pham':
                            array_push($returnArr, 'TatCaSanPham');
                            if (count($arr) <= 1 || count($arr) > 3) {
                                return array('NotFound');
                            } 
                            else {
                                for ($i = 2; $i<count($arr); $i++) {
                                    array_push($returnArr, $arr[$i]);
                                }
                            }
                            break;
                        //lay san pham theo ten
                        default:
                            array_push($returnArr, 'GetSanPham');
                            array_push($returnArr, $arr[1]);
                            break;
                    }
                } else {
                    return array('NotFound');
                }
                break;
            case "danh-muc":
                array_push($returnArr, 'DanhMuc');
                array_push($returnArr, 'GetSPDanhMuc');
                if (count($arr) < 2 || count($arr) > 3) {
                    return array('NotFound');
                }
                else {
                    for ($i = 1; $i<count($arr); $i++) {
                        array_push($returnArr, $arr[$i]);
                    }
                }
                break;
            case 'tim-kiem':
                array_push($returnArr, 'TimKiem');
                array_push($returnArr, 'Search');
                if (count($arr) < 2 || count($arr) > 3) {
                    return array('NotFound');
                }
                else {
                    for ($i = 1; $i<count($arr); $i++) {
                        array_push($returnArr, $arr[$i]);
                    }
                }
                break;

            case 'lien-he':
                array_push($returnArr, 'LienHe');
                if (isset($arr[1])) return array('NotFound');
                break;
            case 'quan-li':
                $returnArr = $arr;
                $returnArr[0] = 'QuanLi';
        }
        return $returnArr;
    }

}
?>