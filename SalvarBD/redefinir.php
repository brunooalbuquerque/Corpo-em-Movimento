<?php
include "../includes/conexao.php";
session_start();
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
	header("location:index.php");
}
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT  senha FROM usuarios WHERE nome = '".$_SESSION['user']."'");
// executa a query
$dados= mysqli_query( $conexao,$query) or die(mysqli_error());
$linha = mysqli_fetch_assoc($dados);
	//Criar a conexão

$senha=$_POST ["novasenha"];
$oldsenha=$_POST['oldsenha'];

if($oldsenha == $linha['senha']){

			if ($senha == $linha['senha']){
      //senha nova igual a antiga
      
			echo "<script> senhaigual(); </script>"; 
			}
			else{		
	$result_usuario = "UPDATE usuarios SET senha = '$senha' WHERE nome = '".$_SESSION['user']."'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);	
	
	echo "<script> senhaalterada(); </script>"; 
			}
		}else{
  echo "oi";
			echo "<script> senhaerrada(); </script>"; 
		}

		?>	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    	<script type="text/javascript">
function senhaigual() { 
  Swal.fire({
  type: 'error',
  title: 'Hmmm...',
  text: 'Sua nova senha não pode ser igual a antiga!',
  confirmButtonText:	'OK',
  backdrop: `
  rgba(233, 63, 63, 0.88)
  `,
  timer: 6000,
  onClose(){
  window.location.replace("../Senha.php");
}
})
}

function senhaerrada() { 
 Swal.fire({
 type: 'error',
 title: 'Hmmm...',
 text: 'A senha digitada não é a sua senha atual!',
 confirmButtonText:	'OK',
 backdrop: `
 rgba(233, 63, 63, 0.88)
 `,
 timer: 6000,
 onClose(){
 window.location.replace("../Senha.php");
}
})
}
function senhaalterada() { 
Swal.fire({
  position: 'top-start',
  type: 'success',
  title: 'Senha alterada com sucesso!',
  showConfirmButton: false,
  timer: 1200,
  onClose(){
 window.location.replace("../Perfil.php");
}
})
}
</script>