<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adicionar Exercicio/Alimento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/cssadd/util.css">
	<link rel="stylesheet" type="text/css" href="css/cssadd/main.css">
	<script src="jquery.js"></script>
<!--===============================================================================================-->
</head>
<body>

<div class="bg-contact3" style="background-image: url('img/bg-01.jpg');">
<div class="container-contact3">
	<div class="wrap-contact3">
		<form  class="contact3-form validate-form" method="POST" action="SalvarBD/SaveExerc.php" enctype="multipart/form-data">
			<span class="contact3-form-title" id="1" >
				Cadastrar Exercicios
			</span>
			
			<div class="wrap-input3 validate-input"id="div1">
				<input class="input3" type="text" name="NomeExerc" placeholder="Nome Exercício" required>
				<span class="focus-input3"></span>
			</div>
			<div class="wrap-input3 validate-input"id="div2">
				<input class="input3" type="text" name="Quantidade" placeholder="Quantidade" required>
				<span class="focus-input3"></span>
			</div>
			<div class="wrap-input3 validate-input"id="div2">
				<input class="input3" type="text" name="youtube" 
				placeholder="Insira o link de demonstração do exercício" required>
				<span class="focus-input3"></span>
			</div>
			<div class="wrap-input3 validate-input"id="div3">
				<div>						
					<select class="selection-2" name="MuscAlvo" required aria-required="true">
						<option disabled selected hidden value="">Musculo Alvo</option>
						<option value="Frontal">Frontal</option>
						<option value="Dorsal">Dorsal</option>
						<option value="Pernas">Pernas</option>
						<option value="Abdomen">Abdômem</option>
					</select>
				</div>
				<span class="focus-input3"></span>
			</div>
			
			<div class="container-contact3-form-btn" id="div8">
				<button class="contact3-form-btn">
					Adicionar
				</button>
				<br>
			</div>
		</form>

			<div class="container-contact3-form-btn  " id="div9">
				<a href="ADM_AlterarExerc.php">
    		 	<button class="contact3-form-btn">
					 Exercícios cadastrados
				</button>
				</a>
			</div>

	</div>
</div>
</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
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
	<script src="js/main3.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
