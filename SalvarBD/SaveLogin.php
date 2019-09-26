<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
<script type="text/javascript">
function alertcontanexiste() { 
  Swal.fire({
  type: 'error',
  title: 'Hmmm...',
  text: 'E-mail ou senha inválido!',
  confirmButtonText:	'Voltar a tela de login',
  backdrop: `
  rgba(233, 63, 63, 0.88)
  `,
  timer: 6000,
  onClose(){
  window.location.replace("../Login.php");
}
})
}
</script>
<?php
session_start();
include "../includes/conexao.php";
$email=$_POST['email'];
$senha=$_POST['senha'];
$senha = md5($senha);

$query = mysqli_query($conexao, "SELECT COUNT(*) FROM usuarios WHERE email ='".$_POST['email']."' and senha = '$senha'");

$count = mysqli_fetch_array($query,MYSQLI_NUM)[0];
 if($count > 0){
   $query2 = sprintf( "SELECT nome, id FROM usuarios WHERE email ='".$_POST['email']."'");
   $dados = mysqli_query( $conexao,$query2) or die(mysqli_error());
   $linha = mysqli_fetch_assoc($dados);

   $_SESSION['user']=$linha['nome'];
   $idzao = $_SESSION['id']=$linha['id'];
   $_SESSION['logado']=TRUE;



   $query4 = mysqli_query($conexao, "SELECT COUNT(*) FROM formcorp WHERE id_usuario ='$idzao'");
   $num = mysqli_fetch_array($query4,MYSQLI_NUM)[0];
 if($num > 0){
  header("location:Exercicios.php");
}else{
  header("location:../FormCorp.php");
       }    
 }
 else{

  header("location:../login.php?codigo=1");
  //echo "<script> alertcontanexiste(); </script>";
 }
?>