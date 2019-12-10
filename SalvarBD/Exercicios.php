<?php
session_start();
include "../includes/conexao.php";
include "../includes/IMC.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
} 
$id_usuario=$_SESSION['id'];
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');

$takeexer_dia = sprintf("SELECT exer_dia FROM formcorp WHERE id_usuario=$id");
  $takeexer_diad = mysqli_query( $conexao,$takeexer_dia) or die(mysqli_error());
  $takeexer_dial = mysqli_fetch_assoc($takeexer_diad);
   $takeexer_diat = mysqli_num_rows($takeexer_diad);

   $dia= $takeexer_dial['exer_dia'];

  $takedia = sprintf("SELECT dia FROM dias_exercicios WHERE id=$id");
    $takediad = mysqli_query( $conexao,$takedia) or die(mysqli_error());
    $takedial = mysqli_fetch_assoc($takediad);
    $takediat = mysqli_num_rows($takediad);

   

  $limit=$takediat*$dia;

//seleciona exercicios aleatorios para pessoas com o peso ideal
   $query = sprintf("SELECT ID FROM exercicios ORDER BY RAND() LIMIT $limit");
    $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
    $id_exercicio = mysqli_fetch_assoc($dados);
 
//seleciona a data para ver no banco se ja tem exercicios para esse usuario e o ID para substituir caso ja tenha exercicios
 $query1 = sprintf("SELECT ID, Datas FROM lista_exercicios WHERE id_usuario=$id_usuario");
 $dados1 = mysqli_query( $conexao,$query1) or die(mysqli_error());
 $IdDatas = mysqli_fetch_assoc($dados1);
 $id=$IdDatas['ID'];



//insere no banco caso o usuario n tenha exercicios ainda
  if (is_null($IdDatas['Datas'])) { 
    do {
    $id_exercicios= $id_exercicio['ID'];
$query2 = mysqli_query($conexao, "INSERT INTO lista_exercicios (id_usuario, id_exercicio, Datas) 
VALUES('$id_usuario', '$id_exercicios','$data')");
 
        }while($id_exercicio = mysqli_fetch_assoc($dados));   
      mysqli_free_result($dados); 

        header("location:../Perfil.php");
    
}else {
  // da update no banco caso o usuario tenha exercicios  já
$AttExerc = mysqli_query($conexao, "DELETE FROM lista_exercicios WHERE id_usuario='$id_usuario'");

do {
  $id_exercicios= $id_exercicio['ID'];
$query2 = mysqli_query($conexao, "INSERT INTO lista_exercicios (id_usuario, id_exercicio, Datas) 
VALUES('$id_usuario', '$id_exercicios','$data')");

      }while($id_exercicio = mysqli_fetch_assoc($dados));   
    mysqli_free_result($dados); 
    	
}


   header("location:../Perfil.php");
?>