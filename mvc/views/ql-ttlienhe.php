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


	<main class="container mb-3">
		<h2 class="mt-2">Quản lý thông tin liên hệ trên website:</h2>

		<div class="row">
			<form action="#" method="post">
				<div class="row">
					<div class="mb-3 col-5 d-block">
						<label for="" class="form-label">Email liên hệ:</label>
						<input type="text" class="form-control" name="email" value="<?= $data['email'] ?>">
					</div>
					<input type="text" name='oldemail' value="<?= $data['email'] ?>" hidden>

					<div class="mb-3 col-5 d-block">
						<label for="" class="form-label">Hotline:</label>
						<input type="text" class="form-control" name="hotline" value="<?= $data['hotline'] ?>">

					</div>
				</div>

				<div class="mb-3">
					<label for="" class="form-label">Địa chỉ:</label>
					<input type="text" class="form-control" name="address" value="<?= $data['address'] ?>">

				</div>

				<div class="mb-3">
					<label for="" class="form-label">Về chúng tôi:</label>
					<textarea class="form-control" name="aboutus"  rows="5"><?= $data['aboutus'] ?></textarea>
				</div>

				<div class="mb-3">
					<label for="" class="form-label">Nhiệm vụ:</label>
					<textarea class="form-control" name="wedo" rows="5"><?= $data['wedo'] ?></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>

	</main>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>