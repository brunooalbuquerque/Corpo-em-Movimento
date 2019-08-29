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
 $uso_codigo = intval($_GET['codigo']);
 $idExercAlimento=substr_replace($uso_codigo, '', -1);
 $AlimentoExerc=substr($uso_codigo, -1);
     $query = sprintf("SELECT id, Nome, Quantidade, MuscAlvo, ExercAcad FROM exercicios WHERE id = '$idExercAlimento'");
	


// cria a instrução SQL que vai selecionar os dados

$query2 = sprintf("SELECT id, Nome, Quantidade, MuscAlvo, ExercAcad FROM exercicios WHERE id = '$idExercAlimento'");

// executa a query
$dados2 = mysqli_query( $conexao,$query2) or die(mysqli_error());
// transforma os dados em um array
$linha2 = mysqli_fetch_assoc($dados2);
// calcula quantos dados retornaram

mysqli_select_db($conexao, $dbname);
// cria a instrução SQL que vai selecionar os dados


// executa a query
$dados = mysqli_query( $conexao,$query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);



$query3 = sprintf("SELECT ID, NomeAlimento, Quantidade, GanharPeso FROM alimentos WHERE ID = '$idExercAlimento'");

// executa a query
$dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
// transforma os dados em um array
$linha3 = mysqli_fetch_assoc($dados3);
// calcula quantos dados retornaram
$query4 = sprintf("SELECT ID, NomeAlimento, Quantidade, GanharPeso FROM alimentos WHERE ID = '$idExercAlimento'");

// executa a query
$dados4 = mysqli_query( $conexao,$query4) or die(mysqli_error());
// transforma os dados em um array
$linha4 = mysqli_fetch_assoc($dados4);
// calcula quantos dados retornaram
?>
	<div class="bg-contact3" style="background-image: url('img/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form  class="contact3-form validate-form" method="POST" action="SalvarBD/ADM_alteracao.php?codigo=<?=intval($_GET['codigo']);?>" enctype="multipart/form-data">
					<span class="contact3-form-title">
					<?php
if ($AlimentoExerc==1) {
	?>
	Alterar Exercicios
					</span>
					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" onclick="$('#div1,#div2,#div3,#div4,#div8,#div9,#1').show();$('#div5,#div6,#div7,#div10,#div11,#2').hide()" checked="checked">
							<label class="label-radio3" for="radio1">
								Exercicios
							</label>
						</div>

					</div>

					<div class="wrap-input3 validate-input"id="div1">
						<input class="input3" type="text" name="NomeExerc" value="<?=$linha2['Nome']?>" placeholder="Nome Exercício" required>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input"id="div2">
						<input class="input3" type="text" name="Quantidade" value="<?=$linha2['Quantidade']?>" placeholder="Quantidade" required>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 validate-input"id="div3">
						<div>						
							<select class="selection-2" name="MuscAlvo" required aria-required="true">
								<option disabled selected hidden value="">Musculo Alvo</option>
								<option value="Frontal"<?php echo $linha['MuscAlvo']=='Frontal'?'selected':'';?>>Frontal</option>
								<option value="Dorsal"<?php echo $linha['MuscAlvo']=='Dorsal'?'selected':'';?>>Dorsal</option>
                                <option value="Pernas"<?php echo $linha['MuscAlvo']=='Pernas'?'selected':'';?>>Pernas</option>
                                <option value="Abdomen"<?php echo $linha['MuscAlvo']=='Abdomen'?'selected':'';?>>Abdômem</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-contact3-form-radio"id="div4">
							<div class="control-group">
									
									<label class="control control-checkbox">
										Esse Exercício é para Academia?
										<input type="hidden" name="ExercAcad" value="Nao"/>
											<input type="checkbox" name="ExercAcad" value="Sim" <?php echo $linha['ExercAcad']=='Sim'?'checked':'';?>/>
											
										<div class="control_indicator"></div>
									</label>
								</div>
							</div>
					
							<div class="container-contact3-form-btn" id="div8">
						<button class="contact3-form-btn">
							Alterar
						</button>
						<br>
					
					</div>
					<div class="container-contact3-form-btn  " id="div9">
				<a href="ADM_AlterarExerc.php">
     <button class="contact3-form-btn">Exercícios cadastrados</button>
</a>
</div>
							</form>
	<?php
}
if ($AlimentoExerc==2) {
	?>	
Alterar Alimentos
					</span>
					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi"  checked="checked">
							<label class="label-radio3" for="radio1">
								Alimentos
							</label>
						</div>

					</div>
<!-- parte dois -->
<form  class="contact3-form validate-form" method="POST" action="SalvarBD/ADM_alteracao.php?codigo=<?=intval($_GET['codigo']);?>" enctype="multipart/form-data">
						
					<div class="wrap-input3 " id="div5"  >
						<input class="input3" type="text" name="NomeAlimento" value="<?=$linha3['NomeAlimento']?>" placeholder="Nome Alimento" required>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-input3 " id="div6" >
						<input class="input3" type="text" name="QuantidadeAlimento" value="<?=$linha3['Quantidade']?>"placeholder="Quantidade" required>
						<span class="focus-input3"></span>
					</div>
					<div class="wrap-contact3-form-radio  " id="div7" >
							<div class="control-group">
									
									<label class="control control-checkbox" >
										Esse Alimento é para ganhar peso?
										<input type="hidden" name="GanharPeso" value="Nao"/>
											<input type="checkbox" name="GanharPeso" value="Sim"<?php echo $linha3['GanharPeso']=='Sim'?'checked':'';?>/>
										
										<div class="control_indicator"></div>
									</label>
								</div>
</div>
					
					<div class="container-contact3-form-btn"  id="div10" >
						<button class="contact3-form-btn">
							Alterar
						</button>
						<br>
					
					</div>
					<div class="container-contact3-form-btn  " id="div11">
<a href="ADM_AlterarAlimento.php">
     <button class="contact3-form-btn">Alimentos cadastrados</button>
</a>
</div>
				</form>





	<?php
}
?>
				
				
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
