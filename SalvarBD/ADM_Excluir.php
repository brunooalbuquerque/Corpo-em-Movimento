<?php
//include "../includes/conexao.php";
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "corpomovimento";

$uso_codigo = intval($_GET['codigo']);
$idExercAlimento=substr_replace($uso_codigo, '', -1);
$AlimentoExerc=substr($uso_codigo, -1);

if ($AlimentoExerc==1) {
	

$sql_code1 = "DELETE FROM exercicios WHERE id = '$idExercAlimento'";

$mysqli1 = new mysqli($servidor, $usuario, $senha, $dbname);

if($mysqli1->connect_errno)
    echo "Falha na conexão: (".$mysqli1->connect_errno.") ".$mysqli1->connect_error;

$sql_query1 = $mysqli1 -> query($sql_code1) or die($mysqli1 ->error);

if($sql_query1)
echo "<script>
location.href='../ADM_AlterarExerc.php';
</script>";
else
echo "<script>
alert('não foi possível deletar o exercicios.');
location.href='../ADM_AlterarExerc.php';
</script>";
}
if ($AlimentoExerc==2) {

	$sql_code2 = "DELETE FROM alimentos WHERE ID = '$idExercAlimento'";

	$mysqli2 = new mysqli($servidor, $usuario, $senha, $dbname);
	
	if($mysqli2->connect_errno)
		echo "Falha na conexão: (".$mysqli2->connect_errno.") ".$mysqli2->connect_error;
	
	$sql_query2 = $mysqli2 -> query($sql_code2) or die($mysqli2 ->error);
	
	if($sql_query2)
	echo "<script>
	location.href='../ADM_AlterarAlimento.php';
	</script>";
	else
	echo "<script>
	alert('não foi possível deletar o alimento.');
	location.href='../ADM_AlterarAlimento.php';
	</script>";
	}
?>