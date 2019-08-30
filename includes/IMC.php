<?php
$id=$_SESSION['id'];
$query4 = sprintf("SELECT dieta, imc FROM formcorp WHERE id_usuario=$id");
                      // executa a query
                   
                      $dados4 = mysqli_query( $conexao,$query4) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha4 = mysqli_fetch_assoc($dados4);
                      $IMC=$linha4['imc'];
                      $dieta=$linha4['dieta'];
                      $IMC=number_format($IMC,2);
                       
                     
                      if($IMC<18.5){
                        $classificacao='Abaixo do peso';
                      }
                      if($IMC>=18.5 && $IMC <=24.9){
                        $classificacao='Peso Ideal';
                      }
                      if($IMC>=25.0 && $IMC <=29.9){
                        $classificacao='Levemente acima do peso';
                      }
                      if($IMC>=30.0 && $IMC <=34.9){
                        $classificacao='Obesidade grau I';
                      }
                      if($IMC>=35.0 && $IMC <=39.9){
                        $classificacao='Obesidade grau II';
                      }
                      if($IMC>40){
                        $classificacao='Obesidade grau III';
                      }
                      ?>