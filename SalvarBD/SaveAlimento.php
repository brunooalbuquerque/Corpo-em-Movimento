<?php
include "../includes/conexao.php";

			// alimentos
			$NomeAlimento= $_POST ["NomeAlimento"];
		    $QuantidadeAlimento= $_POST ["QuantidadeAlimento"];
			$GanharPeso= $_POST ["GanharPeso"];
	
					//Upload efetuado com sucesso, eibe a mensagem
					$query = mysqli_query($conexao, "INSERT INTO alimentos (
					NomeAlimento, Quantidade, GanharPeso) VALUES('$NomeAlimento', '$QuantidadeAlimento','$GanharPeso')");					
					echo "
					 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../ADM_ADD.php'>
						<script type=\"text/javascript\">
					 		alert(\"Alimento cadastrado com Sucesso.\");
							
					 	</script>
						
					 ";	
?>