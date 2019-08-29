<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "corpomovimento";
	
	//Criar a conexão
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conexao){
		die("Falha na conexao: " . mysqli_connect_error());
	}
	
	//error_reporting(0);
	//ini_set(“display_errors”, 0 );

?>