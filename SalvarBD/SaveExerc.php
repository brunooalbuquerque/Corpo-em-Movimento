<?php
include "../includes/conexao.php";
		
			$NomeExerc= $_POST ["NomeExerc"];
		    $Quantidade= $_POST ["Quantidade"];
			$MuscAlvo= $_POST ["MuscAlvo"];
			$ExercAcad= $_POST ["ExercAcad"];

					//Upload efetuado com sucesso, eibe a mensagem
					$query = mysqli_query($conexao, "INSERT INTO exercicios (
					Nome, Quantidade, MuscAlvo, ExercAcad) VALUES('$NomeExerc', '$Quantidade','$MuscAlvo', '$ExercAcad')");					
					echo "
					 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../ADM_ADD.php'>
						<script type=\"text/javascript\">
					 		alert(\"Exercício cadastrado com Sucesso.\");
							
					 	</script>
						
					 ";		
?>