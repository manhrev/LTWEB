<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Quản lí sản phẩm</title>
</head>

<body>
  <!-- header -->
  <?php require_once "./mvc/views/inc/ql-header.php" ?>

  <main class="container">
    <h3 class="mt-5">Các sản phẩm</h3>
    <!-- Modal button -->
    <div class="py-4 text-center">
      <a class="btn btn-success" href="<?=BASE_URL?>/quan-li/quan-li-san-pham/them-san-pham/">Thêm sản phẩm
        mới</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Số tt</th>
          <th scope="col">Tên</th>
          <th scope="col">Giá</th>
          <th scope="col">Danh mục</th>
          <th scope="col">Thao tác</th>

        </tr>
      </thead>
      <tbody>

        <?php foreach ($data['allSP'] as $key=>$sp) {?>
          <tr>
            <td><?=$key+1?></td>
            <td><?=ucfirst($sp['name'])?></td>
            <td><?=number_format($sp['price']).' đ'?></td>
            <td>
              <?php foreach ($sp['categories'] as $catkey=>$cate) {
                if ($catkey == count($sp['categories'])-1)
                  echo $cate['name'];
                else
                  echo $cate['name'].', ';
              }?>
                
             
            </td>
            <td>
              <a class="btn btn-primary" href="<?=BASE_URL?>quan-li/quan-li-san-pham/chi-tiet/<?=$sp['url']?>">Xem</a>
              <button type="button" class="btn btn-danger">Xóa</button>
            </td>

          </tr>
        <?php }?>
        

      </tbody>
    </table>
  </main>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>