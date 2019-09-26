<?php
include "includes/conexao.php";
?>
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
<!--===============================================================================================-->
</head>
<body>
<?php		
 $id_exerc = intval($_GET['codigo']);

$query2 = sprintf("SELECT * FROM exercicios WHERE id = '$id_exerc'");

// executa a query
$dados2 = mysqli_query( $conexao,$query2) or die(mysqli_error());
// transforma os dados em um array
$linha2 = mysqli_fetch_assoc($dados2);
// calcula quantos dados retornaram

?>
<div class="bg-contact3" style="background-image: url('img/bg-01.jpg');">
<div class="container-contact3">
<div class="wrap-contact3">
<form  class="contact3-form validate-form" method="POST" action="SalvarBD/ADM_alteracao.php?codigo=<?=intval($_GET['codigo']);?>" enctype="multipart/form-data">
<span class="contact3-form-title">

Alterar Exercicio
</span>

<div class="wrap-input3 validate-input"id="div1">
<input class="input3" type="text" name="NomeExerc" value="<?=$linha2['Nome']?>" placeholder="Nome Exercício" required>
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input"id="div2">
<input class="input3" type="text" name="Quantidade" value="<?=$linha2['Quantidade']?>" placeholder="Quantidade" required>
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input"id="div2">
<input class="input3" type="text" name="youtube" value="<?=$linha2['Link']?>" placeholder="Link" required>
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input"id="div3">
<div>						
<select class="selection-2" name="MuscAlvo" required aria-required="true">
	<option disabled selected hidden value="">Musculo Alvo</option>
	<option value="Frontal"<?php echo $linha2['MuscAlvo']=='Frontal'?'selected':'';?>>Frontal</option>
	<option value="Dorsal"<?php echo $linha2['MuscAlvo']=='Dorsal'?'selected':'';?>>Dorsal</option>
	<option value="Pernas"<?php echo $linha2['MuscAlvo']=='Pernas'?'selected':'';?>>Pernas</option>
	<option value="Abdomen"<?php echo $linha2['MuscAlvo']=='Abdomen'?'selected':'';?>>Abdômem</option>
</select>
</div>
<span class="focus-input3"></span>
</div>
<div class="wrap-contact3-form-radio"id="div4">

</div>

<div class="container-contact3-form-btn" id="div8">
<button class="contact3-form-btn">
Alterar
</button>
<br>
					
					</div>
			</form>			
			<div class="container-contact3-form-btn  " id="div9">
				<a href="ADM_AlterarExerc.php">
     <button class="contact3-form-btn">Exercícios cadastrados</button>
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

</body>
</html>