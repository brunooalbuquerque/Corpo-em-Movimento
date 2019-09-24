<?php
include "../includes/conexao.php";
session_start();
$id = $_SESSION['id'];
$quantia=$_POST["quantia"];
 $id_todos_exerc=$_POST["id_todos_exerc"];
if(!empty($_POST["quantia"]) and is_array($_POST["quantia"])) {
    $quantia2 = implode(',',$_POST["quantia"]);
}
$quantia3 = explode(',' , $quantia2);
$id_todos_exercexplodida = explode(',' , $id_todos_exerc);

$exerc_dia = sprintf("SELECT id_exercicio FROM lista_exercicios WHERE id_usuario=$id");
$exerc_diad = mysqli_query( $conexao,$exerc_dia) or die(mysqli_error());
$exerc_dial = mysqli_fetch_assoc($exerc_diad);
$exerc_diat = mysqli_num_rows($exerc_diad);

  $query_exerc = sprintf("SELECT id_exerc FROM historico_qtd WHERE id_user=$id");
  $query_exercd = mysqli_query( $conexao,$query_exerc) or die(mysqli_error());
  $query_exercl = mysqli_fetch_assoc($query_exercd);
  $query_exerct = mysqli_num_rows($query_exercd);
 
  foreach ($id_todos_exercexplodida as  $teste) {
  
  $query_exerc2 = sprintf("SELECT id_exerc FROM historico_qtd WHERE id_user=$id AND id_exerc=$teste");
  $query_exercd2 = mysqli_query( $conexao,$query_exerc2) or die(mysqli_error());
  $query_exercl2 = mysqli_fetch_assoc($query_exercd2);
  $query_exerct2 = mysqli_num_rows($query_exercd2);
 if ($query_exerct2>0) {
  $AttExerc = mysqli_query($conexao, "DELETE FROM historico_qtd WHERE id_user='$id' AND id_exerc=$teste");
    }
}

  foreach ($quantia3 as  $value) {
    $id_exerc = $exerc_dial['id_exercicio'];
      $salvarQTD = mysqli_query($conexao, "INSERT INTO historico_qtd (id_user, id_exerc, quantia_ex  
      ) VALUES('$id', '$id_exerc', '$value')");
     $exerc_dial = mysqli_fetch_assoc($exerc_diad);
   }
   
  header("location:../Perfil.php");
?>