<?php
session_start();
include "../includes/conexao.php";
include "../includes/IMC.php";
$mudou=0;
        $antiga=$classificacao;
   
        $exer_dia = $_POST["quant"];
        $funcao = $_POST['funcao'];
        $dias = $_POST['dias'];  
        $generoVal = $_POST["genero"];
        $altura = $_POST["altura"];
        $peso= $_POST ["peso"];
        $idade= $_POST ["idade"];
        $imc = $peso /($altura * $altura);

        $exerc_dia = sprintf("SELECT exer_dia FROM formcorp WHERE id_usuario = '$id'");
        mysqli_select_db($conexao, $dbname);
        $exerc_diad = mysqli_query( $conexao,$exerc_dia) or die(mysqli_error());
        $exerc_dial = mysqli_fetch_assoc($exerc_diad);
        $exerc_dia=$exerc_dial['exer_dia'];

        $dia = sprintf("SELECT dia FROM dias_exercicios WHERE id = '$id'");
        mysqli_select_db($conexao, $dbname);
        $diad = mysqli_query( $conexao,$dia) or die(mysqli_error());
        $dial = mysqli_fetch_assoc($diad);
        $diat = mysqli_num_rows($diad);


        if(!empty($_POST["dias"]) and is_array($_POST["dias"])) {
          $semana = implode(',',$_POST["dias"]);
      }
      $semana1 = explode(',' , $semana);
      
      for ($i=0; $i <$diat; $i++) {
        echo  $dial['dia'],'<br>';
        echo  $semana1[$i],'s<br>';
        if( $dial['dia']!=$semana1[$i]){
echo "entro"; $mudou=1;
        }else {
         $dial = mysqli_fetch_assoc($diad);
        }

      }
      


        $query1 = mysqli_query($conexao, "UPDATE formcorp SET 
        altura='$altura', peso= '$peso' , idade= '$idade',genero='$generoVal', exer_dia='$exer_dia', imc = '$imc' WHERE id_usuario = '$id'");
        $nova=$classificacao;


        $AttDia = mysqli_query($conexao, "DELETE FROM dias_exercicios WHERE id = '$id'");
        foreach ($semana1 as  $value) {
        $salvarDia = mysqli_query($conexao, "INSERT INTO dias_exercicios (id, dia) VALUES('$id', '$value')");
        }
          

            if ($nova != $antiga || $exerc_dia!=$exer_dia || $mudou==1 ) {
            echo "troca exerc";
           header("location:Exercicios.php");

            }else {
             echo "n troca";
          header("location:../Perfil.php");
            }

?>