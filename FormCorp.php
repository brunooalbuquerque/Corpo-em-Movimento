
<!DOCTYPE html>
<html lang="en">
<head>	<link rel="icon" type="image/png" href="img/LogoIcon.ico"/>

	<title>Formulario Corporal - Corpo em Movimento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/radio.css">

<?php
  error_reporting(0);
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
} 
?>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form"  name="corporal" method="post" action="SalvarBD/SaveCorp.php" id="form" >
				<span class="contact100-form-title">
                    Formulário Corporal <br>
                   <?=$_SESSION['user'];?>
				</span>

				<label class="label-input100" for="first-name">Qual sua altura e peso? *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="altura" maxlength="4" pattern=".{4,4}" required title="Exemplo: x.xx" id="altura" placeholder="Altura" onKeyUp="maskIt(this,event,'##.#',true)" dir="rtl" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="peso" id="peso" maxlength="5" pattern=".{4,5}" required title="Exemplo: xx.x" placeholder="Peso" onKeyUp="maskIt(this,event,'####.#',true)" required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="first-name">Quais dias deseja fazer Exercicios? *</label>





				<label class="label-input100" >Qual sua Idade? *</label>
				<div class="wrap-input100 validate-input" >
					<input  id="Idade" class="input100" type="number" onKeyPress="if(this.value.length==3) return false;" name="idade" id="idade"  placeholder="Digite sua Idade" required>
					<span class="focus-input100"></span>
				</div>

				<div class="select">
						<select name="genero" required>
							<option selected disabled value="">Gênero</option>
							<option value="masculino">Masculino</option>
							<option value="feminino">Feminino</option>
						</select>
						<div class="select_arrow">
						</div>
					</div>
					
				

				<!-- <label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div> -->

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Concluir
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/corre.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Endereço
						</span>

						<span class="txt2">
							Ed.Laranjeira 4º andar, Av.20 de Janeiro 560, Jundiaí, SP, Brasil
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Fale conosco
						</span>

						<span class="txt3">
							+55 (11) 801236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Suporte
						</span>

						<span class="txt3">
							CorpoEmMovimento@hotmail.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
	<style>input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}</style>
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

<script type="text/javascript">

function maskIt(w,e,m,r,a){
// Cancela se o evento for Backspace
if (!e) var e = window.event
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
// Variáveis da função
var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
var mask = (!r) ? m : m.reverse();
var pre  = (a ) ? a.pre : "";
var pos  = (a ) ? a.pos : "";
var ret  = "";
if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;
// Loop na máscara para aplicar os caracteres
for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
if(mask.charAt(x)!='#'){
ret += mask.charAt(x); x++; } 
else {
ret += txt.charAt(y); y++; x++; } }
// Retorno da função
ret = (!r) ? ret : ret.reverse()	
w.value = pre+ret+pos; }
// Novo método para o objeto 'String'
String.prototype.reverse = function(){
return this.split('').reverse().join(''); };
</script>

</body>
</html>
