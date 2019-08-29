<?php
session_start();
include "../includes/conexao.php";
include "../includes/IMC.php";

if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
}

$id_usuario=$_SESSION['id'];

               
if($classificacao == 'Peso Ideal'){
  $procurar = "Todos usuarios";
  $procurar2 = "Abaixo do peso";
  $procurar3 = "Acima do peso";  

  $query = sprintf("SELECT * FROM exercicios WHERE tipo_exercicio = '$procurar' OR tipo_exercicio = '$procurar3' OR tipo_exercicio = '$procurar2'ORDER BY RAND() LIMIT 10");
  // executa a query
  $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
  // transforma os dados em um array
  $linha = mysqli_fetch_assoc($dados);
  
  $total = mysqli_num_rows($dados);
}else {
  if ($classificacao == 'Abaixo do peso'){
    $procurar = "Abaixo do peso";
    }
  
  if($classificacao == 'Levemente acima do peso' || $classificacao == 'Obesidade grau I' 
    || $classificacao == 'Obesidade grau II' || $classificacao == 'Obesidade grau III' ){
      $procurar = "Acima do peso";  
    }
    $ambos = "Todos usuarios";
    
  $query = sprintf("SELECT * FROM exercicios WHERE tipo_exercicio = '$procurar' OR tipo_exercicio = '$ambos' ORDER BY RAND() LIMIT 10");
  // executa a query
  $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
  // transforma os dados em um array
  $linha = mysqli_fetch_assoc($dados);
  $total = mysqli_num_rows($dados);
}      
                       $datas = date('Y-m-d', strtotime('-1 days'));
                       $query2 = sprintf("SELECT ID, Datas FROM exerciciosaleatorios WHERE id_usuario=$id_usuario");
                       $dados2 = mysqli_query( $conexao,$query2) or die(mysqli_error());
                       // transforma os dados em um array
                       $linha2  = mysqli_fetch_assoc($dados2);
                       // calcula quantos dados retornaram




                       $id=$linha2['ID'];


            echo 'oioi222';
    $i = -1;
    if($total > 0) {
    $i++;
    do {
     $id_exercicio=$linha['ID'];
      $Datas=$datas;

$query1 = mysqli_query($conexao, "UPDATE exerciciosaleatorios SET 
id_usuario='$id_usuario',id_exercicio = '$id_exercicio', Datas='$Datas' 
WHERE id_usuario='$id_usuario'  AND ID='$id'");			
$id++;
$i++;
}while($linha = mysqli_fetch_assoc($dados));
}
mysqli_free_result($dados);
//header("location:Alimentos.php?codigo=4");
 


if($classificacao == 'Peso Ideal'){
      $procurar = "Todos usuarios";
                          //include "conexao.php";
                          $conexao = mysqli_connect("localhost","root","") or die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
                                  $banco = mysqli_select_db($conexao,"corpomovimento") or die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());			
                          $query3 = sprintf("SELECT ID FROM alimentos WHERE tipo_alimento='$procurar' ORDER BY RAND() LIMIT 8");
                          // executa a query
                          $dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
                          // transforma os dados em um array
                          $linha3 = mysqli_fetch_assoc($dados3);
                          
                          // calcula quantos dados retornaram
                          $total3 = mysqli_num_rows($dados3);
                        }else {
                          if ($classificacao == 'Abaixo do peso'){
                            $procurar = "Abaixo do peso";
                            }
                            
                        if($classificacao == 'Levemente acima do peso' || $classificacao == 'Obesidade grau I' 
                        || $classificacao == 'Obesidade grau II' || $classificacao == 'Obesidade grau III' ){
                          $procurar = "Acima do peso";  
                        }
                      $query3 = sprintf("SELECT * FROM alimentos WHERE tipo_alimento = '$procurar' ORDER BY RAND() LIMIT 8");
                      // executa a query
                      $dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha3 = mysqli_fetch_assoc($dados3);
                      $total3 = mysqli_num_rows($dados3);
                      }       
$query5 = sprintf("SELECT ID, Datas FROM dieta WHERE id_usuario=$id_usuario");
$dados5 = mysqli_query( $conexao,$query5) or die(mysqli_error());
// transforma os dados em um array
$linha5  = mysqli_fetch_assoc($dados5);
// calcula quantos dados retornaram
$id2=$linha5['ID'];
    $i2 = -1;
    if($total3 > 0) {
    $i2++;
    do {

     $id_alimento=$linha3['ID'];
      $Datas=$datas;                           
//Upload efetuado com sucesso, eibe a mensagem
$query4= mysqli_query($conexao, "UPDATE dieta SET 
id_usuario='$id_usuario',id_alimento = '$id_alimento', Datas='$Datas' 
WHERE id_usuario='$id_usuario'  AND ID='$id2'");	

$id2++;
// finaliza o loop que vai mostrar os dados
$i2++;
}while($linha3 = mysqli_fetch_assoc($dados3));
}
mysqli_free_result($dados3); 



header("location:../Perfil.php"); 

?>