<?php
include "../includes/conexao.php";
session_start();
$id = $_SESSION['id'];
$quantia=$_POST["quantia"];

if(!empty($_POST["quantia"]) and is_array($_POST["quantia"])) {
    echo $quantia2 = implode(',',$_POST["quantia"]);
}
$quantia3 = explode(',' , $quantia2);

// $query2 = mysqli_query($conexao, "UPDATE historico_qtd 
//     SET quantia_ex='$quantia' 
//     WHERE id_user='$id' AND Id_exerc='$id'");	
  


$exerc_dia = sprintf("SELECT id_exercicio FROM lista_exercicios WHERE id_usuario=$id");
$exerc_diad = mysqli_query( $conexao,$exerc_dia) or die(mysqli_error());
$exerc_dial = mysqli_fetch_assoc($exerc_diad);
  $exerc_diat = mysqli_num_rows($exerc_diad);

foreach ($quantia3 as  $value) {
    $id_exerc = $exerc_dial['id_exercicio'];
    $salvarQTD = mysqli_query($conexao, "INSERT INTO historico_qtd (id_user, id_exerc, quantia_ex  
    ) VALUES('$id', '$id_exerc', '$value')");
    $exerc_dial = mysqli_fetch_assoc($exerc_diad);
    }

?>