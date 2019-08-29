<?php
include "../includes/conexao.php";
$uso_codigo =intval($_GET['codigo']);;

$idExercAlimento=substr_replace($uso_codigo, '', -1);
$AlimentoExerc=substr($uso_codigo, -1);

if ($AlimentoExerc==1) {
	
			$nome= $_POST ["NomeExerc"];
			$idade= $_POST ["Quantidade"];
			$peso= $_POST ["MuscAlvo"];
            $faixa= $_POST ["ExercAcad"];
            
			
	$result_usuario = "UPDATE exercicios SET Nome = '$nome' WHERE id = '$idExercAlimento'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	
	$result_usuario1 = "UPDATE exercicios SET Quantidade = '$idade' WHERE id = '$idExercAlimento'";
	$resultado_usuario1 = mysqli_query($conexao, $result_usuario1);
	
	$result_usuario2 = "UPDATE exercicios SET MuscAlvo = '$peso' WHERE id = '$idExercAlimento'";
	$resultado_usuario2 = mysqli_query($conexao, $result_usuario2);
	
	$result_usuario4 = "UPDATE exercicios SET ExercAcad = '$faixa' WHERE id = '$idExercAlimento'";
	$resultado_usuario4 = mysqli_query($conexao, $result_usuario4);

	header("location:../ADM_AlterarExerc.php");
}
if ($AlimentoExerc==2) {
	$nome= $_POST ["NomeAlimento"];
			$idade= $_POST ["QuantidadeAlimento"];
			$peso= $_POST ["GanharPeso"];
      
            
			
	$result_usuario = "UPDATE alimentos SET NomeAlimento = '$nome' WHERE ID = '$idExercAlimento'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	
	$result_usuario1 = "UPDATE alimentos SET Quantidade = '$idade' WHERE ID = '$idExercAlimento'";
	$resultado_usuario1 = mysqli_query($conexao, $result_usuario1);
	
	$result_usuario2 = "UPDATE alimentos SET GanharPeso = '$peso' WHERE ID = '$idExercAlimento'";
	$resultado_usuario2 = mysqli_query($conexao, $result_usuario2);
	
	header("location:../ADM_AlterarAlimento.php");
}
?>