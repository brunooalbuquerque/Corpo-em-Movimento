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
                      $query = sprintf("SELECT ID FROM alimentos WHERE tipo_alimento='$procurar' ORDER BY RAND() LIMIT 8");
                      // executa a query
                      $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha = mysqli_fetch_assoc($dados);
                      
                      // calcula quantos dados retornaram
                      $total = mysqli_num_rows($dados);
                    }else {
                      if ($classificacao == 'Abaixo do peso'){
                        $procurar = "Abaixo do peso";
                        }
                        
                    if($classificacao == 'Levemente acima do peso' || $classificacao == 'Obesidade grau I' 
                    || $classificacao == 'Obesidade grau II' || $classificacao == 'Obesidade grau III' ){
                      $procurar = "Acima do peso";  
                    }
                  $query = sprintf("SELECT * FROM alimentos WHERE tipo_alimento = '$procurar' ORDER BY RAND() LIMIT 8");
                  // executa a query
                  $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
                  // transforma os dados em um array
                  $linha = mysqli_fetch_assoc($dados);
                  $total = mysqli_num_rows($dados);
                  }   
                       $datas = date('Y-m-d', strtotime('-1 days'));
                      $query3 = sprintf("SELECT ID, Datas FROM dieta WHERE id_usuario=$id_usuario");
                      $dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha3  = mysqli_fetch_assoc($dados3);
                      // calcula quantos dados retornaram
                      $query4 = sprintf("SELECT ID FROM dieta");
                      $dados4 = mysqli_query( $conexao,$query4) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha4  = mysqli_fetch_assoc($dados4);
                      // calcula quantos dados retornaram
                      $datas2=$linha3['Datas'];
                      $query5 = sprintf("SELECT dieta FROM formcorp WHERE id_usuario=$id_usuario");
                      // executa a query
                      $dados5 = mysqli_query( $conexao,$query5) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha5 = mysqli_fetch_assoc($dados5);
                    
                    $id_usuario=$_SESSION['id'];

                    $database = date_create($datas2);


//exercicios
if($classificacao == 'Peso Ideal'){
  $procurar = "Todos usuarios";
  $procurar2 = "Abaixo do peso";
  $procurar3 = "Acima do peso";  

  $queryy = sprintf("SELECT * FROM exercicios WHERE tipo_exercicio = '$procurar' OR tipo_exercicio = '$procurar3' OR tipo_exercicio = '$procurar2'ORDER BY RAND() LIMIT 10");
  // executa a query
  $dadosy = mysqli_query( $conexao,$queryy) or die(mysqli_error());
  // transforma os dados em um array
  $linhay = mysqli_fetch_assoc($dadosy);
  
  $totaly = mysqli_num_rows($dadosy);
}else {
  if ($classificacao == 'Abaixo do peso'){
    $procurar = "Abaixo do peso";
    }
  
  if($classificacao == 'Levemente acima do peso' || $classificacao == 'Obesidade grau I' 
    || $classificacao == 'Obesidade grau II' || $classificacao == 'Obesidade grau III' ){
      $procurar = "Acima do peso";  
    }
    $ambos = "Todos usuarios";
    
  $queryy = sprintf("SELECT * FROM exercicios WHERE tipo_exercicio = '$procurar' OR tipo_exercicio = '$ambos' ORDER BY RAND() LIMIT 10");
  // executa a query
  $dadosy = mysqli_query( $conexao,$queryy) or die(mysqli_error());
  // transforma os dados em um array
  $linhay = mysqli_fetch_assoc($dadosy);
  $totaly = mysqli_num_rows($dadosy);
}      //exercicios



                  if (is_null($datas2)) { //cria quando n tem nada no banco
                    if ($linha5['dieta']=='sim') {
                    $i = -1;
                    if($total > 0) {
                    $i++;
                    do {
                      $id_alimento=$linha['ID'];
                      $Datas=$datas;
      //Upload efetuado com sucesso, eibe a mensagem
        $query2 = mysqli_query($conexao, "INSERT INTO dieta (
          id_usuario, id_alimento, Datas) VALUES('$id_usuario', '$id_alimento','$Datas')");		
// finaliza o loop que vai mostrar os dados
            $i++;
        }while($linha = mysqli_fetch_assoc($dados));
                 }// fim do cria quando n tem nada no banco
              mysqli_free_result($dados); 
            }
                  }//fim cria quando n tem nada no banco 
                    $datadehoje = date_create();
                    $resultado = date_diff($database, $datadehoje);
                  //echo date_interval_format($resultado, '%a');
                    $resul=date_interval_format($resultado, '%a');
               
                    $id=$linha3['ID'];
                    $idy=$linhay['ID'];
                 if($resul >30) {//att apos 30 dias
                                                      $i = -1;
                                                      if($total > 0) {
                                                      $i++;
                                                      do {
                                                       $id_exercicio=$linha['ID'];
                                                        $Datas=$datas;                                   
                            //Upload efetuado com sucesso, eibe a mensagem
                     $query1 = mysqli_query($conexao, "UPDATE dieta SET 
                     id_usuario='$id_usuario',id_alimento = '$id_alimento', Datas='$Datas' 
                     WHERE id_usuario='$id_usuario'  AND ID='$id'");			
                    $id++;
                      // finaliza o loop que vai mostrar os dados
                                $i++;
                      }while($linha = mysqli_fetch_assoc($dados));
                      }
                      mysqli_free_result($dados); 
                    }// fim do att apos 30 dias
                    $Alterar =intval($_GET['codigo']);
                    if($Alterar=4) {// att pelo botão no perfil attexerc com resposta "não'
                   
                       
                                                         $i = -1;
                                                         if($total > 0) {
                                                         $i++;
                                                         do {
                                                     
                                                          $id_alimento=$linha['ID'];
                                                           $Datas=$datas;                           
                               //Upload efetuado com sucesso, eibe a mensagem
                               $query1 = mysqli_query($conexao, "UPDATE dieta SET 
                               id_usuario='$id_usuario',id_alimento = '$id_alimento', Datas='$Datas' 
                               WHERE id_usuario='$id_usuario'  AND ID='$id'");	
                           	
                          $id++;
                         // finaliza o loop que vai mostrar os dados
                                   $i++;
                         }while($linha = mysqli_fetch_assoc($dados));
                         }
                         mysqli_free_result($dados); 
                       }// fim do att pelo botão no perfil attexerc com resposta "não'


                       
                              if($Alterar=5) {// att pelo botão no perfil attexerc com resposta "não'
                                $i = -1;
                                if($total > 0) {
                                $i++;

                                do {
                              
                                $id_alimento=$linha['ID'];
                                  $Datas=$datas;                           
                        //Upload efetuado com sucesso, eibe a mensagem
                        $query1 = mysqli_query($conexao, "UPDATE dieta SET 
                        id_usuario='$id_usuario',id_alimento = '$id_alimento', Datas='$Datas' 
                        WHERE id_usuario='$id_usuario'  AND ID='$id'");	

                        $id++;
                        // finaliza o loop que vai mostrar os dados
                          $i++;

                        }while($linha = mysqli_fetch_assoc($dados));
                        }
                        mysqli_free_result($dados); 

                        

                       header("location:Aleatorio.php?codigo=1"); 
                       
                        }// fim do att pelo botão no perfil attexerc com resposta "não'

                        if($Alterar!=5) {
                   header("location:../Perfil.php"); 
                        }
            
                      ?>
                     