<?php
include "../includes/conexao.php";
		
			$NomeExerc= $_POST ["NomeExerc"];
		    $Quantidade= $_POST ["Quantidade"];
			$MuscAlvo= $_POST ["MuscAlvo"];
			$link= $_POST ["youtube"];

					//Upload efetuado com sucesso, eibe a mensagem
$query = mysqli_query($conexao, "INSERT INTO exercicios (
Nome, Quantidade, MuscAlvo, Link) VALUES('$NomeExerc', '$Quantidade','$MuscAlvo', '$link')");					
					echo "
					 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../ADM_ADD.php'>
						<script type=\"text/javascript\">
					 		alert(\"Exercício cadastrado com Sucesso.\");
							
					 	</script>
						
					 ";		
?>