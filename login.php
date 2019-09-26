<!DOCTYPE html>
<html lang="en">

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>

<script type="text/javascript">
function alertcontanexiste() { 
  Swal.fire({
  type: 'error',
  text: 'E-mail ou senha inválido!',
  showConfirmButton: false,
  showCloseButton: true,
  timer: 2000
})
}
</script>

<head>
	<title>Login - Corpo em Movimento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_settings/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_settings/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_settings/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_settings/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form name="cadastro" method="post" action="SalvarBD/SaveLogin.php" id="form" class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
					Login
					</span>
			<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
		<input id="first-name" class="input100" type="email" name="email" id="email" placeholder="E-mail" required>
	
			<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
	<input class="input100" type="password"  type="password"  name="senha" id="senha" placeholder="Senha" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-150">
						<span class="txt1">
							Não possui conta?
						</span>

						<a href="sign_in.php" class="txt2">
							Clique Aqui
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('Login_settings/images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
<?php
error_reporting(0);
if(intval($_GET['codigo']) == 1){
  echo "<script>alertcontanexiste();</script>";
}
?>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>