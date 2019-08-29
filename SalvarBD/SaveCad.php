<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
<script type="text/javascript">
function contajaexiste() { 
  Swal.fire({
  type: 'error',
  title: 'Hmmm...',
  text: 'Conta com esse E-mail ja existe!',
  confirmButtonText:	'Voltar a tela de login',
  backdrop: `
  rgba(233, 63, 63, 0.88)
  `,
  timer: 6000,
  onClose(){
  window.location.replace("../Login_CriarConta.html");
}
})
}
</script>
<?php
session_start();
include "../includes/conexao.php";
    $nome= $_POST ["nome2"];
    $email= $_POST ["email2"];
    $senha= $_POST ["senha2"];
    $id = $_SESSION['id'];
            //Upload efetuado com sucesso, eibe a mensagem
            $query = mysqli_query($conexao, "SELECT COUNT(*) FROM `usuarios` WHERE email ='".$_POST['email2']."'");
            $count = mysqli_fetch_array($query,MYSQLI_NUM)[0];
            if($count > 0)
            {
                echo "<script> contajaexiste(); </script>";
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