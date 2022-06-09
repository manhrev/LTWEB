<!doctype html>
<html lang="vi">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
  <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Quản lí</title>
</head>

<body>
  <?php require_once "./mvc/views/inc/ql-header.php" ?>


  <main class="container">
    <h2 class="mt-5">Trang quản lí</h2>

    <div class="row mb-2">
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý tài nguyên</h5>
            <p class="card-text">Cho phép Xem/Sửa các tài nguyên hệ thống: Ảnh</p>
            <a href="<?= BASE_URL ?>quan-li/quan-li-anh" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý đơn hàng</h5>
            <p class="card-text">Cho phép Xem, Xoá một Đơn hàng trong hệ thống</p>
            <a href="<?= BASE_URL ?>quan-li/quan-li-don-hang" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý danh mục</h5>
            <p class="card-text">Cho phép Thêm, Xem, Sửa, Xoá một Danh mục trong hệ thống</p>
            <a href="<?= BASE_URL ?>quan-li/quan-li-danh-muc" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý sản phẩm</h5>
            <p class="card-text">Cho phép Thêm, Xem, Sửa, Xoá, Xem đánh giá một sản phẩm trong hệ thống</p>
            <a href="<?= BASE_URL ?>quan-li/quan-li-san-pham" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý thành viên</h5>
            <p class="card-text">Cho phép Xem, sửa, xoá , block một thành viên trong hệ thống</p>
            <a href="<?= BASE_URL ?>quan-li/quan-ly-thanh-vien" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý Liên hệ của KH</h5>
            <p class="card-text">Cho phép Xem liên hệ của KH qua form</p>
            <a href="<?= BASE_URL ?>quan-li/quan-ly-lien-he-KH" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>

    </div>

    <div class="row mb-2">
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Quản lý trang liên hệ</h5>
            <p class="card-text">Cho phép Thêm, Xem, Sửa các thông tin liên hệ của trang web</p>
            <a href="<?= BASE_URL ?>quan-li/quan-li-tt-lien-he" class="btn btn-primary"> >>>></a>
          </div>
        </div>
      </div>

</div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>