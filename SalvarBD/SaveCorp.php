<?php
session_start();
include "../includes/conexao.php";

    $generoVal = $_POST["genero"];
    $exerc_dia = $_POST["quant"];
    $altura = $_POST["altura"];
    $peso= $_POST ["peso"];
    $idade= $_POST ["idade"];
    $id = $_SESSION['id'];

    $funcao = $_POST['funcao'];
    $dias = $_POST['dias'];  
    
    if(!empty($_POST["dias"]) and is_array($_POST["dias"])) {
            $semana = implode(',',$_POST["dias"]);
        }
        $semana1 = explode(',' , $semana);

    $imc = $peso /($altura * $altura);

    $query4 = mysqli_query($conexao, "SELECT COUNT(*) FROM formcorp WHERE id_usuario ='$id'");
    $num = mysqli_fetch_array($query4,MYSQLI_NUM)[0];

    if($num > 0){
      $query1 = mysqli_query($conexao, "UPDATE formcorp SET 
        altura='$altura',peso= '$peso' , idade= '$idade', genero='$generoVal',
         exer_dia =  $exerc_dia , imc = '$imc'
         WHERE id_usuario = '$id'");

$AttDia = mysqli_query($conexao, "DELETE FROM dias_exercicios WHERE id = '$id'");
foreach ($semana1 as  $value) {
$salvarDia = mysqli_query($conexao, "INSERT INTO dias_exercicios (id, dia) VALUES('$id', '$value')");
}
            $_SESSION['logado']=TRUE;
           header("location:../Perfil.php");
          }
          else{
        $query2 = mysqli_query($conexao, "INSERT INTO formcorp (
              id_usuario, altura, peso, idade, genero, imc) 
              VALUES('$id', '$altura', '$peso','$idade', '$generoVal', '$imc')");

foreach ($semana1 as  $value) {

    $salvarDia = mysqli_query($conexao, "INSERT INTO dias_exercicios (id, dia) VALUES('$id', '$value')");
    }
  }
                     $_SESSION['logado']=TRUE;
                  header("location:Exercicios.php");
                   

?>