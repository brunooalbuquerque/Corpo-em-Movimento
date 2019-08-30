<?php
include "../includes/conexao.php";
session_start();
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
	header("location:index.php");
}
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT  senha FROM usuarios WHERE nome = '".$_SESSION['user']."'");
// executa a query
$dados= mysqli_query( $conexao,$query) or die(mysqli_error());
$linha = mysqli_fetch_assoc($dados);
	//Criar a conexão

$senha=$_POST ["novasenha"];
$oldsenha=$_POST['oldsenha'];
$oldsenha = md5($oldsenha);
$senha = md5($senha);
if($oldsenha == $linha['senha']){
			if ($senha == $linha['senha']){
      //senha nova igual a antiga 
      header("location:../Senha.php?codigo=1");
			}
			else{		
	$result_usuario = "UPDATE usuarios SET senha = '$senha' WHERE nome = '".$_SESSION['user']."'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);	
	
   
  header("location:../Perfil.php?codigo=2");
			}
		}else{
      
      header("location:../Senha.php?codigo=3");
		}

		?>	
    
