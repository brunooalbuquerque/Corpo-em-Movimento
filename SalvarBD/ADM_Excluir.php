<?php
include "../includes/conexao.php";

$id_exerc = intval($_GET['codigo']);

$sql_code1 = "DELETE FROM exercicios WHERE id = '$id_exerc'";

$mysqli1 = new mysqli($servidor, $usuario, $senha, $dbname);
$sql_query1 = $mysqli1 -> query($sql_code1) or die($conexao ->error);

if($sql_query1)
echo "<script>
alert('Exercicio excluido com sucesso.');
location.href='../ADM_AlterarExerc.php';
</script>";
else
echo "<script>
alert('não foi possível deletar o exercicios.');
location.href='../ADM_AlterarExerc.php';
</script>";


?>