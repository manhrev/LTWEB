<!DOCTYPE html>
<html>

<head>
	<title>Website bán điện thoại</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="stylesheet" href="http://localhost/WEB-212/public/style.css" type="text/css"> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script>
		function alertUser(msg) {
			alert(msg);
		}
	</script>

	<!-- </head> -->

	<!-- font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>

<body <?php
		if (isset($_SESSION['notiMessage'])) {
			echo 'onload="alertUser(\'' . $_SESSION["notiMessage"] . '\')"';
		}

		if (isset($_SESSION['notiMessage']))
			unset($_SESSION['notiMessage']);
		?>>

	<?php
	//include header
	// require_once("./frontend/modules/header");
	require_once('../WEB-212/mvc/views/modules/header.php');
	// require_once("./modules/header.php")

	?>

	<!--CONTENT-->

  <br>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="d-none d-md-block col-md-7 col-lg-6 col-xl-5">
        <img src="../../WEB-212/public/assets/others/mobile-shop.png" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-5 col-lg-6 col-xl-4 offset-xl-1">
        <form accept-charset="UTF-8" action="./Login/login" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-3">
              <i class="fab fa-google"></i>
            </button>

          </div>
          <hr class="text-primary">
          <div class="text-center my-3">
            <p class="fw-bold mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-3">
            <input type="email" id="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="email"  required/>
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg"
              placeholder="Enter password"  name="password" required/>
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
		  <?php  if(isset($data['error'])):?>
								<div class="row">
									<?php echo "<p  style='color:red; font-weight:bold;'>".$data['error']."</p>"; ?>
								</div>
							<?php  endif;?>

            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</section>

	<!--CONTENT-->


	<?php
	//include footer
	require_once('../WEB-212/mvc/views/modules/footer.php');
	?>

</body>

</html>
