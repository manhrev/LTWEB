<!doctype html>
<html lang="vi">

<style>
    .grey-bg {  
    background-color: #F5F7FA;
  }

    .demo {
        font-family: 'Noto Sans', sans-serif;
    }

    .panel {
        background: linear-gradient(to right, #2980b9, #2c3e50);
        padding: 0;
        border-radius: 10px;
        border: none;
        box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.05), 0 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .panel .panel-heading {
        padding: 20px 15px;
        border-radius: 10px 10px 0 0;
        margin: 0;
    }

    .panel .panel-heading .title {
        color: #fff;
        font-size: 28px;
        font-weight: 500;
        text-transform: capitalize;
        line-height: 40px;
        margin: 0;
    }

    .panel .panel-heading .btn {
        color: rgba(255, 255, 255, 0.5);
        background: transparent;
        font-size: 16px;
        text-transform: capitalize;
        border: 2px solid #fff;
        border-radius: 50px;
        transition: all 0.3s ease 0s;
    }

    .panel .panel-heading .btn:hover {
        color: #fff;
        text-shadow: 3px 3px rgba(255, 255, 255, 0.2);
    }

    .panel .panel-heading .form-control {
        color: #fff;
        background-color: transparent;
        width: 35%;
        height: 40px;
        border: 2px solid #fff;
        border-radius: 20px;
        display: inline-block;
        transition: all 0.3s ease 0s;
    }

    .panel .panel-heading .form-control:focus {
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: none;
        outline: none;
    }

    .panel .panel-heading .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-size: 15px;
        font-weight: 500;
    }

    .panel .panel-body {
        padding: 0;
    }

    .panel .panel-body .table thead tr th {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.2);
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        padding: 12px;
        border: none;
    }

    .panel .panel-body .table tbody tr td {
        color: #fff;
        font-size: 15px;
        padding: 10px 12px;
        vertical-align: middle;
        border: none;
    }

    .panel .panel-body .table tbody tr:nth-child(even) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .panel .panel-body .table tbody .action-list {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .panel .panel-body .table tbody .action-list li {
        display: inline-block;
        margin: 0 5px;
    }

    .panel .panel-body .table tbody .action-list li a {
        color: #fff;
        font-size: 15px;
        position: relative;
        z-index: 1;
        transition: all 0.3s ease 0s;
    }

    .panel .panel-body .table tbody .action-list li a:hover {
        text-shadow: 3px 3px 0 rgba(255, 255, 255, 0.3);
    }

    .panel .panel-body .table tbody .action-list li a:before,
    .panel .panel-body .table tbody .action-list li a:after {
        content: attr(data-tip);
        color: #fff;
        background-color: #111;
        font-size: 12px;
        padding: 5px 7px;
        border-radius: 4px;
        text-transform: capitalize;
        display: none;
        transform: translateX(-50%);
        position: absolute;
        left: 50%;
        top: -32px;
        transition: all 0.3s ease 0s;
    }

    .panel .panel-body .table tbody .action-list li a:after {
        content: '';
        height: 15px;
        width: 15px;
        padding: 0;
        border-radius: 0;
        transform: translateX(-50%) rotate(45deg);
        top: -18px;
        z-index: -1;
    }

    .panel .panel-body .table tbody .action-list li a:hover:before,
    .panel .panel-body .table tbody .action-list li a:hover:after {
        display: block;
    }

    .panel .panel-footer {
        color: #fff;
        background-color: transparent;
        padding: 15px;
        border: none;
    }

    .panel .panel-footer .col {
        line-height: 35px;
    }

    .pagination {
        margin: 0;
    }

    .pagination li a {
        color: #fff;
        background-color: transparent;
        border: 2px solid transparent;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        line-height: 31px;
        width: 35px;
        height: 35px;
        padding: 0;
        margin: 0 3px;
        border-radius: 50px;
        transition: all 0.3s ease 0s;
    }

    .pagination li a:hover {
        color: #fff;
        background-color: transparent;
        border-color: rgba(255, 255, 255, 0.2);
    }

    .pagination li a:focus,
    .pagination li.active a,
    .pagination li.active a:hover {
        color: #fff;
        background-color: transparent;
        border-color: #fff;
    }

    .pagination li:first-child a,
    .pagination li:last-child a {
        border-radius: 50%;
    }

    @media only screen and (max-width:767px) {
        .panel .panel-heading .title {
            text-align: center;
            margin: 0 0 10px;
        }

        .panel .panel-heading .btn_group {
            text-align: center;
        }
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quản lí danh mục</title>
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>

<body>
    <?php require_once "./mvc/views/inc/ql-header.php" ?>

    <main class="grey-bg container-fluid">
        <br/>
    <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Danh mục <span>món ăn</span></h4>
                            </div>
                            <a class="btn btn-success" href="<?= BASE_URL ?>/quan-li/quan-li-san-pham/them-san-pham/">Thêm danh mục
                                mới</a>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Số tt</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Thao tác</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['allDM'] as $key => $cate) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= ucfirst($cate['name']) ?></td>
                        <td>
                            <?php $images = explode(',', $cate['image']);
                            foreach ($images as $image) {
                            ?>
                                <div style="display: block; margin-left: 20px">
                                    <a href="<?= $image ?>" style='display: block'>
                                        <img src="<?= $image ?>" alt="thumbn" style='display: block; width:200px'>
                                    </a>
                                </div>
                            <?php } ?>
                        </td>
                        <td>
                        <button 
                            id="<?= $cate['url'] . $key ?>" 
                            type="button" 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editModal"
                             data-val="<?= $cate['url'] ?>" 
                             data-name="<?= $cate['name'] ?>" 
                             data-img="<?= $cate['image'] ?>"
                             onclick="
                                document.getElementById('url-sua').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-val');
                                document.getElementById('name-sua').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-name');
                                document.getElementById('image-sua').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-img');
                                ">
                                Sửa
                            </button>
                            <button id="<?= $cate['url'] . $key ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addUserModal" data-val="<?= $cate['url'] ?>" data-name="<?= $cate['name'] ?>" onclick="
                                document.getElementById('url-sp').value = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-val');
                                document.getElementById('to-delete').innerHTML = document.getElementById('<?= $cate['url'] . $key ?>').getAttribute('data-name');
                                ">
                                Xóa
                            </button>
                        </td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>

                    </div>
                  
                </div>
            </div>
        
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" method="post" action="#">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Xóa danh mục</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body col-10 mx-auto">
                        <span>Bạn có chắc chắn muốn xóa danh mục "</span><span id='to-delete'></span><span>"?</span>

                        <input type="hidden" id="url-sp" name="url">
                        <input type="hidden" id="act" name="action" value="remove">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">OK</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </main>


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="<?=BASE_URL?>quan-li/quan-li-danh-muc/">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Thêm danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body col-10 mx-auto">

                    <!-- Form field -->
                    <div class="form-group py-2">
                        <label for="name">Tên</label>
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Điền tên danh mục">
                    </div>
                    <div class="form-group py-2">
                        <label for="image">Ảnh</label>
                        <input required type="text" class="form-control" id="image" name="image" placeholder="Điền link ảnh">
                    </div>
                    <input type="hidden" name="action" value="add">
                    <p>Lưu ý: Chỉ thêm duy nhất 1 ảnh</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">OK</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Sua danh muc -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="<?=BASE_URL?>quan-li/quan-li-danh-muc/">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Sửa danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body col-10 mx-auto">

                    <!-- Form field -->
                    <div class="form-group py-2">
                        <label for="name">Tên</label>
                        <input required type="text" class="form-control" id="name-sua" name="name" placeholder="Điền tên danh mục" value="">
                    </div>
                    <div class="form-group py-2">
                        <label for="image">Ảnh</label>
                        <input required type="text" class="form-control" id="image-sua" name="image" placeholder="Điền link ảnh" value="">
                    </div>
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" id='url-sua' name="url" value="">
                    <p>Lưu ý: Chỉ thêm duy nhất 1 ảnh</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">OK</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>