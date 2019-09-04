<?php
session_start();
include "../includes/conexao.php";

    echo $dias = $_POST["framework"];
    $generoVal = $_POST["genero"];
    $altura = $_POST["altura"];
    $peso= $_POST ["peso"];
    $idade= $_POST ["idade"];
    $id = $_SESSION['id'];

    $imc = $peso /($altura * $altura);

       

    $query4 = mysqli_query($conexao, "SELECT COUNT(*) FROM formcorp WHERE id_usuario ='$id'");
    $num = mysqli_fetch_array($query4,MYSQLI_NUM)[0];
    if($num > 0){
      $query1 = mysqli_query($conexao, "UPDATE formcorp SET 
        altura='$altura',peso= '$peso' , idade= '$idade', dieta='$dietaVal', genero='$generoVal', imc = '$imc' WHERE id_usuario = '$id'");

            $_SESSION['logado']=TRUE;
          
           header("location:../Perfil.php");
     
   }else{
        $query2 = mysqli_query($conexao, "INSERT INTO formcorp (
                     id_usuario, altura, peso, idade, genero, imc) 
                     VALUES('$id', '$altura', '$peso','$idade', '$generoVal', '$imc')");

                     $_SESSION['logado']=TRUE;
                   
                  header("location:Exercicios.php");
                   }

?>