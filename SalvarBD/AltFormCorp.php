<?php
session_start();
include "../includes/conexao.php";
include "../includes/IMC.php";

        $antiga=$classificacao;
        $idzao2 = intval($_GET['codigo']);
        $exer_dia = $_POST["quant"];
        $funcao = $_POST['funcao'];
        $dias = $_POST['dias'];  
        $generoVal = $_POST["genero"];
        $altura = $_POST["altura"];
        $peso= $_POST ["peso"];
        $idade= $_POST ["idade"];
        $dietaantiga=$dieta;
        $imc = $peso /($altura * $altura);
        if(!empty($_POST["dias"]) and is_array($_POST["dias"])) {
          $semana = implode(',',$_POST["dias"]);
      }
      $semana1 = explode(',' , $semana);
        
        $query1 = mysqli_query($conexao, "UPDATE formcorp SET 
        altura='$altura', peso= '$peso' , idade= '$idade',genero='$generoVal', exer_dia='$exer_dia', imc = '$imc' WHERE id_usuario = '$idzao2'");
        $nova=$classificacao;

        $AttDia = mysqli_query($conexao, "DELETE FROM dias_exercicios WHERE id = '$id'");
        foreach ($semana1 as  $value) {
        $salvarDia = mysqli_query($conexao, "INSERT INTO dias_exercicios (id, dia) VALUES('$id', '$value')");
        }
          
            if ($nova != $antiga) {
            
              header("location:Exercicios.php");

            }else {
             
              header("location:../Perfil.php");
            }

?>