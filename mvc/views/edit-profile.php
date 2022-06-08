<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="vi"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="vi"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="vi">


<!-- user-acount11:10-->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Chỉnh sửa thông tin cá nhân</title>

	<meta name="keywords" content="Chỉnh sửa cá nhân">
	<meta name="description" content="Chỉnh sửa trang cá nhân">
	

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Fonts -->
	<?php require_once "./mvc/views/inc/font_inc/font.php" ?>

	<!-- libs CSS -->
	<link rel="stylesheet" href="<?= STATIC_URL ?>libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-awesome/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/nivo-slider.css"> -->
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/animate.css"> -->
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/nivo-slider/css/style.css"> -->
	<link rel="stylesheet" href="<?= STATIC_URL ?>libs/font-material/css/material-design-iconic-font.min.css">
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slider-range/css/jslider.css"> -->
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/owl-carousel/assets/owl.carousel.min.css"> -->
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slick-slider/css/slick.css"> -->
	<!-- <link rel="stylesheet" href="<?= STATIC_URL ?>libs/slick-slider/css/slick-theme.css"> -->

	<!-- Template CSS -->
	<link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= STATIC_URL ?>css/reponsive.css">
</head>

<body class="user-acount">
	<!-- header -->
	<?php require_once "./mvc/views/inc/header.php" ?>

	<!-- main content -->
	<div class="main-content">
		<div class="wrap-banner">

			<!-- breadcrumb -->
			<nav class="breadcrumb-bg">
				<div class="container no-index">
					<div class="breadcrumb">
						<ol>
							<li>
								<a href="<?= BASE_URL ?>">
									<span>Trang chủ</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Tài khoản của tôi</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Chỉnh sửa tài khoản</span>
								</a>
							</li>
						</ol>
					</div>
				</div>
			</nav>

			<div class="acount head-acount">
				<div class="container">
					<div id="main">
						<h1 class="title-page">Chỉnh sửa thông tin tài khoản</h1>
						<div class="container-xl px-4 mt-4">

							<hr class="mt-0 mb-4">
							<div class="row">
								<!-- <div class="col-xl-4">
									
									<div class="card mb-4 mb-xl-0 d-none">
										<div class="card-header">Ảnh đại diện</div>
										<div class="card-body text-center">
											
											<img class="img-account-profile rounded-circle mb-1" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
											
											<div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
											
											<button class="btn btn-primary" type="button">Upload new image</button>
										</div>
									</div>
								</div> -->
								<div class="col-xl-8">
									<!-- Account details card-->
									<div class="card mb-4">
										<div class="card-header">Thông tin tài khoản</div>
										<div class="card-body">
											<?php $udata = $data['userdata'] ?>
											<form action="<?= BASE_URL ?>tai-khoan/chinh-sua" method="POST">
												<!-- Form Group (username)-->
												<div class="row gx-3 mb-3">
													<!-- Form Group (Name)-->
													<div class="col-md-6">
														<label class="small mb-1">Họ và Tên</label>
														<input class="form-control" name='name' type="text" value="<?= $udata['name'] ?>" required>
													</div>
													<div class="mb-3">
														<label class="small mb-1">Username</label>
														<input class="form-control" name='username' type="text" value="<?= $udata['username'] ?>" readonly>
													</div>
													<!-- Form Row-->


												</div>
												<!-- Form Row        -->
												<div class="row mb-3">
													<!-- Form Group (location)-->
													<div class="col-md-6">
														<label class="small mb-1">Địa chỉ</label>
														<input class="form-control" name='address' type="text" value="<?= $udata['address'] ?>" required>
													</div>
												</div>

												<!-- Form Row-->
												<div class="row mb-3">
													<!-- Form Group (phone number)-->
													<div class="col-md-6">
														<label class="small mb-1">Số điện thoại</label>
														<input class="form-control" name='phone_number' type="tel" value="<?= $udata['phone_number'] ?>" required>
													</div>

												</div>
												<!-- Save changes button-->
												<div class="row justify-content-center">
													<button class="btn btn-primary" type="submit">Lưu thông tin</button>
												</div>
											</form>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="card mb-3">
										<div class="card-header">Mật khẩu</div>
										<div class="card-body "> </div>
										<form action="<?= BASE_URL ?>tai-khoan/chinh-sua" method="POST">
											<div class="row mb-3 justify-content-center">
												<div class="col-8 mb-3 align-self-center">
													<label class="small mb-1">Mật khẩu cũ</label>
													<input class="form-control" name='password' type="password" required>
												</div>
											</div>
											<!-- Form Row-->

											<!-- Form Row        -->
											<div class="row mb-3 justify-content-center">
												<!-- Form Group (location)-->
												<div class="col-8 ">
													<label class="small mb-1">Mật khẩu mới</label>
													<input class="form-control" name='new_password' type="password" required>
												</div>
											</div>
											<div class="row justify-content-center">
												<button class="btn btn-primary" type="submit">Lưu mật khẩu</button>
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>

						<!-- <button class="btn btn-primary" onclick="location.replace('<?= BASE_URL ?>tai-khoan/chinh-sua')">Chỉnh sửa tài khoản</button> -->


					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php require_once "./mvc/views/inc/footer.php" ?>

	<?php require_once "./mvc/views/inc/mobile-menu.php" ?>


	<?php if (isset($data['message'])) {
		echo "<script> alert('" . $data['message'] . "')</script>";
	} ?>
	<!-- Vendor JS -->
	<script src="<?= STATIC_URL ?>libs/jquery/jquery.min.js"></script>
	<script src="<?= STATIC_URL ?>libs/popper/popper.min.js"></script>
	<script src="<?= STATIC_URL ?>libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= STATIC_URL ?>libs/nivo-slider/js/jquery.nivo.slider.js"></script>
	<script src="<?= STATIC_URL ?>libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?= STATIC_URL ?>libs/slider-range/js/tmpl.js"></script>
	<script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.dependClass-0.1.js"></script>
	<script src="<?= STATIC_URL ?>libs/slider-range/js/draggable-0.1.js"></script>
	<script src="<?= STATIC_URL ?>libs/slider-range/js/jquery.slider.js"></script>
	<script src="<?= STATIC_URL ?>libs/slick-slider/js/slick.min.js"></script>

	<!-- Template JS -->
	<script src="<?= STATIC_URL ?>js/theme.js"></script>
</body>


<!-- user-acount11:10-->

</html>