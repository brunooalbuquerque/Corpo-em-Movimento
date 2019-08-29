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




                       $datas = date('Y-m-d');
                      $query3 = sprintf("SELECT ID, Datas FROM exerciciosaleatorios WHERE id_usuario=$id_usuario");
                      $dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha3  = mysqli_fetch_assoc($dados3);
                      // calcula quantos dados retornaram
                      
                      // calcula quantos dados retornaram
                      $datas2=$linha3['Datas'];

                     $query5 = sprintf("SELECT dieta FROM formcorp WHERE id_usuario=$id_usuario");
              // executa a query
              $dados5 = mysqli_query( $conexao,$query5) or die(mysqli_error());
              // transforma os dados em um array
              $linha5 = mysqli_fetch_assoc($dados5);
              
              // calcula quantos dados retornaram
              $total5 = mysqli_num_rows($dados5);
                    $id_usuario=$_SESSION['id'];

                    $database = date_create($datas2);
                    
                    //quando n tem nada no banco da pessoa L46~L82
                  if (is_null($datas2)) {
                   
              mysqli_free_result($dados); 
                  }//fim do quando n tem nada no banco


                    $datadehoje = date_create();
                    $resultado = date_diff($database, $datadehoje);
                  //echo date_interval_format($resultado, '%a');
                    $resul=date_interval_format($resultado, '%a');
               
                    $id=$linha3['ID'];
                  
                  //att depois de 30 dias
                 if($resul >30) {
                                            
                    }///fim do att depois de 30 dias

                    
                    if($Alterar=1) {//att pelo botão att com resposta "não"
                    
                         }while($linha = mysqli_fetch_assoc($dados));
                         }
                         $i = -1;
                         if($total > 0) {
                         $i++;
                         do {
                     
                          $id_exercicio=$linha['id'];
                           $Datas=$datas;
                     
                          
//Upload efetuado com sucesso, eibe a mensagem
$query1 = mysqli_query($conexao, "UPDATE exerciciosaleatorios SET 
id_usuario='$id_usuario',id_exercicio = '$id_exercicio', Datas='$Datas' 
WHERE id_usuario='$id_usuario'  AND ID='$id'");			
$id++;
// finaliza o loop que vai mostrar os dados
   $i++;
                       }//fim do att pelo botão com resposta "não"
                     if ($linha5['dieta']=='sim') {
                     header("location:Alimentos.php");
                    }else {
                       header("location:../Perfil.php");
                     }
                   
       
                      ?>
                     