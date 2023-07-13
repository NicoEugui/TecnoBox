<!DOCTYPE html>
<html lang="en">

<head>
	<title>Inicio de sesión - TecnoBox</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="application-name" content="Gestion de recursos informaticos de instituciones educativas." />
	<meta name="keywords" content="Tecnobox, UTU, Prestamos, Uruguay, Gestion de recursos informaticos, Proyecto UTU, Mercedes, BackEndSolutions" />
    <meta name="author" content="BackEndSolutions">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/icono.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/font-awesome-5/css/fontawesome-all.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mains.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<!--===============================================================================================-->
</head>

<body>
	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-pic js-tilt animated rollIn" data-tilt>
					<img src="images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form animated zoomInDown" method="POST">
					<span class="login100-form-title animated bounceInDown">
						Inicio de sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate="Ingrese Usuario">
						<input class="input100" type="text" name="usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese contraseña">
						<input class="input100" type="password" name="contraseña" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Iniciar Sesión
						</button>
					</div>
					<?php
					session_start();
					if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
						$_SESSION['username'] = $_POST['usuario'];
						$_SESSION['password'] = $_POST['contraseña'];
						header("Location: ./dashboard.php");
					}
					?>
					<div class="text-center p-t-12">
						<!-- <span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a> -->
					</div>
				</form>
				<!-- COPYRIGHT -->
				<footer class="page-footer font-small">
					<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Obra publicada con <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Reconocimiento Compartir igual 4.0</a>.
				</footer>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/mainlogin.js"></script>

</body>

</html>