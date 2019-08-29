<?php
include "../includes/conexao.php";
include "../includes/IMC.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
}
$id_usuario=$_SESSION['id'];
$data = date('Y-m-d');
$Alterar =intval($_GET['codigo']);

if($IMC>=18.5 && $IMC <=24.9){
//seleciona alimentos aleatorios para pessoas com o peso ideal
    $query = sprintf("SELECT ID FROM alimentos ORDER BY RAND() LIMIT 10");
    $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
    $id_alimento = mysqli_fetch_assoc($dados);
    }
    else{
        
        if ($IMC<18.5){
        $procurar = "Abaixo do peso";
        }
        if($IMC>=25.0){
        $procurar = "Acima do peso";  
        }

//seleciona alimentos aleatorios para pessoas com o peso abaixo ou acima
    $query = sprintf("SELECT ID FROM alimentos WHERE tipo_alimento= '$procurar' OR tipo_alimento = 'Todos usuarios' ORDER BY RAND() LIMIT 10");
    $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
    $id_alimento = mysqli_fetch_assoc($dados);
    }  

//seleciona a data para ver no banco se ja tem alimentos para esse usuario e o ID para substituir caso ja tenha alimentos
$query1 = sprintf("SELECT ID, Datas FROM dieta WHERE id_usuario=$id_usuario");
$dados1 = mysqli_query( $conexao,$query1) or die(mysqli_error());
$IdDatas = mysqli_fetch_assoc($dados1);
$id=$IdDatas['ID'];

//ve se o usuario quer dieta
$query5 = sprintf("SELECT dieta FROM formcorp WHERE id_usuario=$id_usuario");
$dados5 = mysqli_query( $conexao,$query5) or die(mysqli_error());
$Dieta = mysqli_fetch_assoc($dados5);
$Dieta=$Dieta['dieta'];

    if (is_null($IdDatas['Datas'])) { 
        do {
        $id_alimentos= $id_alimento['ID'];
    $query2 = mysqli_query($conexao, "INSERT INTO dieta (id_usuario, id_alimento, Datas) 
    VALUES('$id_usuario', '$id_alimentos','$data')");
     
            }while($id_alimento = mysqli_fetch_assoc($dados));   
          mysqli_free_result($dados); 
        
          
       
    }else {
    
    
    // da update no banco caso o usuario tenha alimentos  já
        do {
            $id_exercicios= $id_exercicio['ID'];
    $query2 = mysqli_query($conexao, "UPDATE lista_exercicios 
    SET id_usuario='$id_usuario',id_exercicio = '$id_exercicios', Datas='$data' 
    WHERE id_usuario='$id_usuario'  AND ID='$id'");	
    $id++;
            }while($id_exercicio = mysqli_fetch_assoc($dados));   
    mysqli_free_result($dados); 
     }  
     
     header("location:../Perfil.php");

     ?>