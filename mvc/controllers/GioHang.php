<?php
require_once './mvc/helper/authorization.php';
class GioHang extends Controller
{

    function Default()
    {

        $model = $this->model('SanPhamModel');
        $categories = $model->GetCategory();
        $this->view('product-cart', [
            'view' => 0,
            'categories' => $categories,
        ]);
    }

    function XoaSanPham($url)
    {
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart'][$url]);
        }
        header("Location: " . BASE_URL . 'gio-hang');
    }

    function DatHang()
    {
        if (!isLoggedIn()) {
            header("Location: " . BASE_URL . 'gio-hang');
            exit();
        }
        $userModel = $this->model('UserModel');
        $userdata = $userModel->GetUser($_SESSION['username']);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($userdata['isblocked'] != 1) {

                if (count($_POST) > 3 && isset($_SESSION['cart']) && isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['phone'])) {
                    $qlModel = $this->model('QuanLiModel');
                    $name = $_POST['fullname'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];

                    for ($i = 0; $i < (count($_POST) - 3)/2; $i++) {
                        $order[] = [$_POST['sp-' . $i],$_POST['sl-'.$i]];
                    }
                    unset($_SESSION['cart']);
                    $message = $qlModel->ThemOrder($name, $phone, $address, $order);
                    echo "<script>
                alert('" . $message . "');
                window.location.href='" . BASE_URL . "';
                </script>";
                // print_r($_POST);
                // echo '\n';
                // print_r($order);
                } else {
                    echo 'Có lỗi!!';
                }
            } else {
                echo "<script>
            alert('Đặt hàng không thành công! Bạn đang bị cấm!');
            window.location.href='" . BASE_URL . "';
            </script>";
            }
        } else {
            // $userModel = $this->model('UserModel');
            // $userdata = $userModel->GetUser($_SESSION['username']);
            $model = $this->model('SanPhamModel');
            $categories = $model->GetCategory();
            $this->view('product-checkout', [
                'view' => 0,
                'categories' => $categories,
                'userdata' => $userdata
            ]);
        }
    }
}
