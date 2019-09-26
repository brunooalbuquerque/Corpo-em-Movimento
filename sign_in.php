<!DOCTYPE html>
<html lang="en">

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>

<script type="text/javascript">

function contajaexiste() { 
  Swal.fire({
  type: 'error',
  text: 'E-mail já cadastrado!',
  showConfirmButton: false,
  showCloseButton: true,
  timer: 2200
})
}

</script>

<head>
	<title>Criar Conta - Corpo em Movimento</title>
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
    <form class="login100-form validate-form" name="cadastro" method="post"
     action="SalvarBD/SaveCad.php" id="form">

					<span class="login100-form-title p-b-24">
						Crie sua conta
					</span>
					<div class="wrap-input100" data-validate="Type user name">
        <input id="first-name" class="input100 text-center" type="text" name="nome2" id="nome2"
         placeholder="Nome" required>

		<span class="focus-input100"></span>
					</div>
                    &nbsp;
					<div class="wrap-input100" data-validate="E-mail">
            <input id="first-name" class="input100 text-center" type="email" name="email2" id="email2"
                        placeholder="Informe seu e-mail" required>
						<span class="focus-input100"></span>
                    </div>
                    &nbsp;
					<div class="wrap-input100" data-validate="Type password">
                        <input class="input100 text-center" type="password"
                         maxlength="20" minlength="7" name="senha2" id="senha2" placeholder="Senha" required>
						<span class="focus-input100"></span>
                    </div>
                    &nbsp;
        <center><label><br>
<input type="checkbox" id="termo" name="termo" name="termo"> &nbsp;&nbsp;Li e concordo com os <a href="TermosCondicoes.php" target="_blank">Termos e Condições.</a></label>
        <label><p class="input100 text-center"><span style="color:red" id="cheque">Concorde com os termos para se cadastrar</p></span></label>
        </center> 
                    <div class="container-login100-form-btn">&nbsp;
						<button ID="enviar" type="submit" class="login100-form-btn">
							Criar conta
						</button>
					</div>

					<div class="w-full text-center p-t-10 p-b-40">
						<span class="txt1">
							Já possui conta?
						</span>

						<a href="login.php" class="txt2">
							Clique aqui
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('img/sign_in_img.jpg');"></div>
			</div>
		</div>
	</div>
    
    <!-- AAAAAAAAAAAAAAAAAAA -->
    <?php
    error_reporting(0);
if(intval($_GET['codigo']) == 1){
  echo "<script>contajaexiste();</script>";
}
?>

<script>
var checker = document.getElementById('termo');
var sendbtn = document.getElementById('enviar');
var x = document.getElementById('cheque');
checker.onchange = function() {
  sendbtn.disabled = !this.checked;
  if(checker.checked == true){
    x.style.color = '#00FF00';
    }else{
    x.style.color = '#ff0000'; 
    }
}
</script>

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

<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>