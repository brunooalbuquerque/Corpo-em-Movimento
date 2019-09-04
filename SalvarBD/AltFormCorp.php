<?php
session_start();
include "../includes/conexao.php";
include "../includes/IMC.php";

    $antiga=$classificacao;
		$idzao2 = intval($_GET['codigo']);			
        $generoVal = $_POST["genero"];
        $altura = $_POST["altura"];
        $peso= $_POST ["peso"];
        $idade= $_POST ["idade"];
        $dietaantiga=$dieta;
        $imc = $peso /($altura * $altura);
        
        $query1 = mysqli_query($conexao, "UPDATE formcorp SET 
        altura='$altura', peso= '$peso' , idade= '$idade',genero='$generoVal', imc = '$imc' WHERE id_usuario = '$idzao2'");
       
        $nova=$classificacao;

          
            if ($nova != $antiga) {
            
              header("location:Exercicios.php");

            }else {
             
              header("location:../Perfil.php");
            }

?>