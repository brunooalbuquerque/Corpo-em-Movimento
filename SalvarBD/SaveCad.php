<?php
session_start();
include "../includes/conexao.php";
    $nome= $_POST ["nome2"];
    $email= $_POST ["email2"];
    $senha= $_POST ["senha2"];
    $senha = md5($senha);
    $id = $_SESSION['id'];
            //Upload efetuado com sucesso, eibe a mensagem
            $query = mysqli_query($conexao, "SELECT COUNT(*) FROM usuarios WHERE email ='$email'");
            $count = mysqli_fetch_array($query,MYSQLI_NUM)[0];

            if($count > 0)
            {
                header("location:../sign_in.php?codigo=1");
            }
            else{
                $query = mysqli_query($conexao, "INSERT INTO usuarios (
                    nome, email, senha) VALUES('$nome', '$email','$senha')");
                     $_SESSION['logado']=TRUE;
                     $_SESSION['user']=$_POST['nome2'];
                     $_SESSION['email']=$_POST['email2'];
                   header("location:../FormCorp.php");
                    
 $query3 = sprintf( "SELECT id FROM usuarios WHERE email ='".$_POST['email2']."'");
 $dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
 // transforma os dados em um array
 $linha3 = mysqli_fetch_assoc($dados3);
 // calcula quantos dados retornaram
 
$_SESSION['logado']=TRUE;
$_SESSION['id']=$linha3['id'];          
}          
?>