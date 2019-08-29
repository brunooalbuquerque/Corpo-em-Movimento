<?php
session_start();
include "../includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
}
$id_usuario=$_SESSION['id'];
$id_exercicio =intval($_GET['codigo']);

$query2 = sprintf("SELECT id_exercicio, Datas FROM exerciciosaleatorios WHERE id_usuario=$id_usuario order by id_exercicio");
                      // executa a query

                      $dados2 = mysqli_query( $conexao,$query2) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha2 = mysqli_fetch_assoc($dados2);
                      $total2 = mysqli_num_rows($dados2);
$n=0;
$i = -1;
 if($total2 > 0) {
 $i++;
 do {

$query = sprintf("SELECT id, Nome, Quantidade, MuscAlvo, ExercAcad FROM exercicios ORDER BY RAND() LIMIT 1");
 //executa a query
 $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
 //transforma os dados em um array
 $linha = mysqli_fetch_assoc($dados);
 //calcula quantos dados retornaram
 $total = mysqli_num_rows($dados);
 $id_exercicio2=$linha['id'];

 if ($id_exercicio==$id_exercicio2 or $linha2['id_exercicio']==$id_exercicio2) {
     $n++;
 }

 $linha = mysqli_fetch_assoc($dados);
  //finaliza o loop que vai mostrar os dados
 $i++;         
 }while($linha2 = mysqli_fetch_assoc($dados2));
 }


header("location:../Perfil.php");

 ?>