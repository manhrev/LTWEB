
<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Quản lí liên lạc của KH</title>
	<link rel="icon" href="<?= STATIC_URL ?>img/home/logo-icon.png">
	<link rel="shortcut icon" href="<?= STATIC_URL ?>img/home/logo-icon.ico">
</head>

<body>
	<?php require_once "./mvc/views/inc/ql-header.php" ?>
	<div class="container">
		<h3>Yêu cầu từ khách hàng:</h3>
		<a class='btn btn-warning' onclick="switchView()" id='switchViewBtn'>Xem các yêu cầu đã xử lý</a>
		<table class="table" >
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Title</th>
					<th scope="col">Tên</th>
					<th scope="col">Phone</th>
					<th scope="col">Email</th>
					<th scope="col">Lời nhắn</th>
					<th scope="col">Hành động</th>
				</tr>
			</thead>
			<tbody id='table-body'>

				<?php
				if (count($data) >= 1) {
					foreach ($data as $row) { ?>
						<tr id='<?= $row['id'] ?>'>
							<th scope="row"><?= $row['id'] ?></th>
							<td><?= $row['title'] ?></td>
							<td><?= $row['fullname'] ?></td>
							<td><?= $row['phone'] ?></td>
							<td><?= $row['email'] ?></td>
							<td><?= $row['content'] ?></td>
							<td>
								<button class="btn btn-success" style="padding: 2px;" onclick="markAsDone('<?= $row['id'] ?> ','1')">
									Mark as done
								</button>
								<button class="btn btn-danger" style="padding: 2px;" onclick="removeHandler('<?= $row['id'] ?> ')">
									Xóa
								</button>
							</td>
						</tr>
				<?php }
				}

				?>

			</tbody>

		</table>
		<!-- <?= (count($data) >= 1) ? '' : '<h4> Chưa có liên hệ mới nào </h4>'; ?> -->
	</div>
				<div id='abc'></div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script>
		function removeHandler(id) {
			if (confirm('Are you sure?'))
				$.post('#', {
					'action': 'remove',
					'id': id
				}, function(data) {
					if (data == true) {
						$('#' + id).remove();
					} else {
						alert('Có lỗi: ' + data);
					}
				})
		}

		function markAsDone(id, status) {

			$.post('#', {
				'action': 'markDone',
				'id': id,
				'status': status
			}, function(data) {
				if (data == true) {
					$('#' + id).remove();
				} else {
					alert('Có lỗi: ' + data);
				}

			})
		}

		currentView = 'getCompleted';
		text = 'Xem các yêu cầu đã xử lý';

		function switchView() {
			
			text = (currentView == 'getNonCompleted') ? 'Xem các yêu cầu đã xử lý' : 'Xem các yêu cầu chưa xử lý';
			if (currentView=='getCompleted') {
			$.post('#', {
				'action': currentView
			}, function(data) {
				console.log(data);
				data= JSON.parse(data);
				console.log(data);
				// $('#abc').html(data);
				$('#switchViewBtn').html(text);
				$('#table-body').empty();
				console.log(data.length);
				for (i=0; i< data.length ; i++){
					console.log(data[i]);
					row ='<tr id="'+data[i].id+'"><td>'+data[i].id+'</td><td>'+data[i].title+'</td><td>'+data[i].fullname+'</td><td>'+data[i].phone+'</td><td>'+data[i].email+'</td><td>'+data[i].content+'</td> '
				row=row +`<td>
								<button class="btn btn-success" style="padding: 2px;" onclick="markAsDone('`+ data[i].id+ `','0')">
									Un-done
								</button>
								<button class="btn btn-danger" style="padding: 2px;" onclick="removeHandler('`+data[i].id+` ')">
									Xóa
								</button>
							</td></tr>`
					$('#table-body').append(row);
				}
				

			})

		} else {
			location.reload();
		}
		currentView = (currentView == 'getNonCompleted') ? 'getCompleted' : 'getNonCompleted';
		}
	</script>

</body>



</html>