<?php
session_start();
include "../includes/conexao.php";

		$idzao2 = intval($_GET['codigo']);			
			$nome= $_POST ['nome'];
			$email= $_POST ['email'];
            echo $_SESSION['user']= $nome;
            
			
	$result_usuario = "UPDATE usuarios SET nome = '$nome' WHERE id = '$idzao2'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	
	$result_usuario1 = "UPDATE usuarios SET email = '$email' WHERE id = '$idzao2'";
	$resultado_usuario1 = mysqli_query($conexao, $result_usuario1);
	
	header("location:../Perfil.php");
?>