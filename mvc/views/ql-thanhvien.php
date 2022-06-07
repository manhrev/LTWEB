<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Quản lí thành viên</title>
	<link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
	<link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>

<body>
	<?php require_once "./mvc/views/inc/ql-header.php" ?>
	<div class="container">
		<h3>Quản lý thành viên</h3>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">STT</th>
					<th scope="col">Username</th>
					<th scope="col">Tên</th>
					<th scope="col">Số điện thoại</th>
					<!-- <th scope="col">Địa chỉ</th> -->
					<!-- <th scope="col">Ngày tạo</th> -->
					<th scope="col">Trạng thái</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<!-- <?php print_r($data) ?> -->
				<?php foreach ($data['users'] as $user => $info) { ?>
					<tr>
						<th scope="row"><?= $user + 1 ?></th>
						<td><?= $info['username'] ?></td>
						<td><?= $info['name'] ?></td>
						<td><?= $info['phone_number'] ?></td>
						<!-- <td><?= $info['address'] ?></td> -->
						<!-- <td><?= $info['date_created'] ?></td> -->
						<td><?= $x = ($info['isblocked'] == 1) ?  'Blocked' :  'Normal'; ?></td>
						<td>
							<button class="btn btn-primary"
							onclick='prepareDetail(<?php echo  json_encode($info); ?>)'
							data-bs-toggle="modal" data-bs-target="#detailUser"
							>Chi tiết</button>
							<button id="<?= $info['username'] ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removeUser" data-val="<?= $info['username'] ?>" data-name="<?= $info['username'] ?>" onclick="
                        document.getElementById('url-sp').value = document.getElementById('<?= $info['username'] ?>').getAttribute('data-val');
                        document.getElementById('to-delete').innerHTML = document.getElementById('<?= $info['username'] ?>').getAttribute('data-name');
                        ">
								Xóa
							</button>
							<button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#editUser" data-val="<?= $info['username'] ?>" data-name="<?= $info['username'] ?>" onclick=<?= '"prepareInfo(\'' . $info['username'] . '\' , \'' . $info['name'] . '\', \' ' . $info['address'] . '\' ,\'' . $info['phone_number'] . '\')"' ?>>
								Sửa
							</button>
							<button class="btn btn-warning" id="<?= $info['username'] ?>" type="button" data-bs-toggle="modal" data-bs-target="#blockUser" data-val="<?= $info['username'] ?>" data-name="<?= $info['username'] ?>" onclick="
                        setTarget(<?= $x = ($info['isblocked'] == 0) ?  '\'block\'' :  '\'unlock\''; ?> , <?= '\'' . $info['username'] . '\'' ?> )
    
                        "><?= $x = ($info['isblocked'] == 1) ?  'Unlock' :  'Block'; ?></button>


						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<!-- Modal: Confirm Remove -->
	<div class="modal fade" id="removeUser" tabindex="-1" aria-labelledby="removeUserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="modal-content" method="post" action="#">
				<div class="modal-header">
					<h5 class="modal-title" id="removeUserLabel">Xóa user</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body col-10 mx-auto">
					<span>Bạn có chắc chắn muốn xóa thành viên "</span><span id='to-delete'></span><span>" khỏi dữ liệu hệ thống?</span>

					<input type="hidden" id="url-sp" name="username">
					<input type="hidden" name="action" value="remove">

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Confirm</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Modal: Confirm Block -->
	<div class="modal fade" id="blockUser" tabindex="-1" aria-labelledby="blockUserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="modal-content" method="post" action="#">
				<div class="modal-header">
					<h5 class="modal-title" id="blockUserLabel">Cấm user</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body col-10 mx-auto">
					<span>Bạn có chắc chắn muốn </span><span id='targetAction'></span><span> thành viên này?</span>

					<input type="hidden" id="blockusername" name="username">
					<input type="hidden" id="act" name="action">

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Confirm</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>

	<!-- Modal: Edit User -->
	<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="modal-content" method="post" action="#">
				<div class="modal-header">
					<h5 class="modal-title" id="editUserLabel">Edit user info</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body col-11 mx-auto">
					<!-- <span>Bạn có chắc chắn cập nhật những thông tin này?</span> -->

					<input type="hidden" name="action" value="edit">
					<!-- Form Group (username)-->
					<div class="row gx-3 mb-3">
						<!-- Form Group (Name)-->
						<div class="col-md-6">
							<label class="small mb-1">Họ và Tên</label>
							<input class="form-control" id='inputName' name='name' type="text" required>
						</div>
						<div class="mb-3">
							<!-- <label class="small mb-1">Username</label> -->
							<input class="form-control" id='inputUsername' name='username' type="hidden">
						</div>
						<!-- Form Row-->


					</div>
					<!-- Form Row        -->
					<div class="row mb-3">
						<!-- Form Group (location)-->
						<div class="col-md-6">
							<label class="small mb-1">Địa chỉ</label>
							<input class="form-control" id='inputAddress' name='address' type="text" required>
						</div>
					</div>

					<!-- Form Row-->
					<div class="row mb-3">
						<!-- Form Group (phone number)-->
						<div class="col-md-6">
							<label class="small mb-1">Số điện thoại</label>
							<input class="form-control" id='inputPhone' name='phone_number' type="tel" required>
						</div>

					</div>
					<!-- Save changes button-->
					<!-- <div class="row justify-content-center">
							<button class="btn btn-primary" type="submit">Lưu thông tin</button>
						</div> -->


				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Confirm</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>




	<!-- Modal: Detail  -->
	<div class="modal fade" id="detailUser" tabindex="-1" aria-labelledby="detailUserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="detailUserLabel">Detail user info</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body col-11 mx-auto">

						<div class="col-md-11">
							<label class="fw-bold mb-1">Họ và Tên:</label>
							<span  id='detailName' name='name'></span>
						</div>
						<div class="col-md-11">
							<label class="fw-bold mb-1">Username: </label>
							<span  id='detailUsername' name='username' ></span>
						</div>


						<div class="col-md-11">
							<label class="fw-bold mb-1">Địa chỉ: </label>
							<span  id='detailAddress' name='address'  ></span>
						</div>


						<div class="col-md-11">
							<label class="fw-bold mb-1">Số điện thoại: </label>
							<span  id='detailPhone' name='phone_number' ></span>
						</div>

						<div class="col-md-11">
							<label class="fw-bold mb-1">Ngày đăng kí: </label>
							<span  id='detailCreateDay' ></span>
						</div>

						<div class="col-md-11">
							<label class="fw-bold mb-1">Trạng thái user: </label>
							<span  id='detailBlock' ></span>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
	function setTarget(action, username) {
		userinput = document.getElementById('blockusername');
		ele = document.getElementById('targetAction');
		act = document.getElementById('act');
		if (action == 'block') {
			ele.innerHTML = 'Block';
			act.value = 'block';

		} else {
			ele.innerHTML = 'UnLock';
			act.value = 'unlock';
		}
		userinput.value = username;
	}

	function prepareInfo(username, name, address, phone) {
		document.getElementById('inputUsername').value = username;
		document.getElementById('inputName').value = name;
		document.getElementById('inputAddress').value = address;
		document.getElementById('inputPhone').value = phone;
	}

	function prepareDetail(data) {
		// console.log(data);
		document.getElementById('detailUsername').innerHTML = data.username;
		document.getElementById('detailName').innerHTML = data.name;
		document.getElementById('detailAddress').innerHTML = data.address;
		document.getElementById('detailPhone').innerHTML = data.phone_number;
		document.getElementById('detailCreateDay').innerHTML = data.date_created;
		document.getElementById('detailBlock').innerHTML = (data.isblocked==1) ? "Đang bị cấm" : "Bình thường";
	}
</script>


</html>