<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($link, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($link, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>facultad</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
    />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css" />
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css" />
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css" />
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css" />
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css" />
    <link rel="stylesheet" href="assets/css/gradient-navbar.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
    />
    <link rel="stylesheet" href="assets/css/News-Cards.css" />
  </head>

  <body>
    <div class="container-fluid">
      <div class="row mh-100vh">
        <div
          class="col-lg-6 d-flex align-items-end"
          id="bg-block"
          style="
            background: url('assets/img/pexels-mathias-pr-reding-4385707.jpg')
              center center / cover;
          "
        >
          <p class="ml-auto small text-dark mb-2">
            <em>Photo by&nbsp;</em
            ><a
              class="text-dark"
              href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText"
              target="_blank"
              ><em>Aldain Austria</em></a
            ><br />
          </p>
        </div>
        <div
          class="
            col-10 col-sm-8 col-md-6 col-lg-6
            offset-1 offset-sm-2 offset-md-3 offset-lg-0
            align-self-center
            d-lg-flex
            align-items-lg-center align-self-lg-stretch
            bg-white
            p-5
            rounded rounded-lg-0
            my-5 my-lg-0
          "
          id="login-block"
        >
          <div class="m-auto w-lg-75 w-xl-50">
            <h2 class="text-info font-weight-light mb-5">
              <i class="fa fa-diamond"></i>&nbsp;Crear Cuenta
            </h2>
            <form action="" method="POST" class="login-email">
              <div class="form-group">
                <label class="text-secondary">Usuario</label
                ><input
                  class="form-control"
                  type="text"
                  name="username" value="<?php echo $username; ?>" required
                />
           
              </div>
              <div class="form-group">
                <label class="text-secondary">Email</label
                ><input class="form-control" type="email" name="email" value="<?php echo $email; ?>" required />
             
              </div>
              <div class="form-group ">
                <label class="text-secondary">Contraseña</label
                ><input class="form-control" type="password" name="password" value="<?php echo $_POST['password']; ?>" required/>
               
              </div>
              <div class="form-group ">
                <label class="text-secondary">Confirmar Contraseña</label
                ><input class="form-control" type="password"name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required/>
              
              </div>
              
              <input type="submit"class="btn btn-info mt-2  name="submit"  value="Ingresar">
           
            </form>
            <p class="mt-3 mb-0">
              <a class="text-info small" href="#">Ovidateste la contraseña ?</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
  </body>
</html>
