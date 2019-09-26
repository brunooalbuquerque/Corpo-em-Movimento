<?php
include "../includes/conexao.php";
$id_exerc =intval($_GET['codigo']);;
	
			$nome= $_POST ["NomeExerc"];
			$idade= $_POST ["Quantidade"];
			$peso= $_POST ["MuscAlvo"];
            $link= $_POST ["youtube"];
            
			
	$result_usuario = "UPDATE exercicios SET Nome = '$nome' WHERE id = '$id_exerc'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	
	$result_usuario1 = "UPDATE exercicios SET Quantidade = '$idade' WHERE id = '$id_exerc'";
	$resultado_usuario1 = mysqli_query($conexao, $result_usuario1);
	
	$result_usuario2 = "UPDATE exercicios SET MuscAlvo = '$peso' WHERE id = '$id_exerc'";
	$resultado_usuario2 = mysqli_query($conexao, $result_usuario2);
	
	$result_usuario4 = "UPDATE exercicios SET Link= '$link' WHERE id = '$id_exerc'";
	$resultado_usuario4 = mysqli_query($conexao, $result_usuario4);

	header("location:../ADM_AlterarExerc.php");


?>