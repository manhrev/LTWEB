<!-- <?php print_r($data); ?> -->
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
		<h3>Những review của sản phẩm: <?= $data[0] ?></h3>
		<a class="btn btn-warning" type="button"  href=<?= "'http://localhost/UEH_burger/san-pham/$data[0] '" ?>>
								Xem trực tiếp
</a>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">STT</th>
					<th scope="col">Username</th>
					<th scope="col">Rating</th>
					<th scope="col">Comment</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				
				<?php 
				if (count($data[1])>=1){
				foreach ($data[1] as $i => $info) { ?>
					<tr>
						<th scope="row"><?= $i + 1 ?></th>
						<td><?= $info['username'] ?></td>
						<td><?= $info['rate'] ?></td>
						<td><?= $info['comment'] ?></td>
						<td>

							<button id="<?= $info['username'] ?>" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removeReview" data-val="<?= $info['username'] ?>" data-name="<?= $info['username'] ?>" onclick="
                        document.getElementById('url-sp').value = document.getElementById('<?= $info['username'] ?>').getAttribute('data-val');
                        ">
								Xóa đánh giá này
							</button>


						</td>
					</tr>
				<?php } } 
		
				?>

			</tbody>
			
		</table>
		<?=(count($data[1])>=1)? '' :'<h4> Chưa có đánh giá </h4>'; ?>
	</div>
	<!-- Modal: Confirm Remove -->
	<div class="modal fade" id="removeReview" tabindex="-1" aria-labelledby="removeReviewLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form class="modal-content" method="post" action="#">
				<div class="modal-header">
					<h5 class="modal-title" id="removeReviewLabel">Xóa đánh giá</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body col-10 mx-auto">
					<span>Bạn có chắc chắn muốn xóa đánh giá này khỏi dữ liệu hệ thống?</span>

					<input type="hidden" id="url-sp" name="username">
					<input type="hidden" name="url" value="<?=$data[0]?>">
					<input type="hidden" name="action" value="removeReview">

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Confirm</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>



</html>