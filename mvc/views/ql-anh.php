<!DOCTYPE html>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lí ảnh</title>
    <link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
    <link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>

<body>
    <?php require_once "./mvc/views/inc/ql-header.php" ?>

    <main class="grey-bg container-fluid">
        <br/>
        <!-- Modal button -->
        <h3 class="mt-3">Upload ảnh</h3>
        <form action="<?= BASE_URL ?>quan-li/quan-li-anh" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Chọn ảnh để upload:</label>
                <input required style="width: 300px" type="file" class="form-control" name="fileToUpload" id="fileToUpload" placeholder="Chọn ảnh">

            </div>

            <button type="submit" class="btn btn-primary mt-3">Tải ảnh lên</button>
        </form>
        <br/>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Tất cả <span>ảnh</span></h4>
                            </div>
                            
                    </div>
                    <div class="panel-body table-responsive">
                    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Link</th>
     
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['images'] as $key=>$image) { ?>
                <tr>
                    <th scope="row"><?=$image['id']?></th>
                    <td>
                        <a href='<?=$image['link']?>'>
                            <img style="height: 200px" src='<?=$image['link']?>' alt='thumbnail'>
                        </a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
                    </div>
                  
                </div>
            </div>
        </div>


    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="post" action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Xóa đơn hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body col-10 mx-auto">
                    <span>Bạn có chắc chắn muốn xóa đơn hàng "</span><span id='to-delete'></span><span>"?</span>

                    <input type="hidden" id="url-sp" name="id">
                    <input type="hidden" id="act" name="action" value="remove">

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