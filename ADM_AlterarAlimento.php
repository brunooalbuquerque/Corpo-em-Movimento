<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alterar Alimento</title>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">    
<link rel="stylesheet" type="text/css" href="css/cssadd/util.css">
    <link rel="stylesheet" type="text/css" href="css/cssadd/main.css">
    
<!--===============================================================================================-->
</head>
<body>
<?php
include "includes/conexao.php";
            $query = sprintf("SELECT ID, NomeAlimento, Quantidade, GanharPeso FROM alimentos");

// executa a query
$dados = mysqli_query( $conexao,$query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>
<a href="ADM_ADD.php">
     <button class="contact3-form-btn">Voltar</button>
</a>
<div class="limiter" >
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">ID</th>
									<th class="cell100 column2">Nome</th>
									<th class="cell100 column3">Quantidade</th>
									<th class="cell100 column4">GanharPeso</th>
                                    <th class="cell100 column6">Editar</th>
									<th class="cell100 column7">Excluir</th>
								</tr>
							</thead>
						</table>
					</div>
                    <?php
                                $i = -1;
                                if($total > 0) {
                                $i++;
                                do {
                        ?>
                    <div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1"><?=$linha['ID']?></td>
									<td class="cell100 column2"><?=$linha['NomeAlimento']?></td>
									<td class="cell100 column3"><?=$linha['Quantidade']?></td>
									<td class="cell100 column4"><?=$linha['GanharPeso']?></td>
                                    <td class="cell100 column6">  <a class="oioi" href="ADM_Edit.php?codigo=<?=$linha['ID']?>2">Editar</td>
                                    <td class="cell100 column7">  <a class="oioi" href="SalvarBD/ADM_Excluir.php?codigo=<?=$linha['ID']?>2">Excluir</td>
								</tr>
							</tbody>
						</table>
                    </div>
                    <?php
                    
// finaliza o loop que vai mostrar os dados
          $i++;
}while($linha = mysqli_fetch_assoc($dados));


}

mysqli_free_result($dados);
?>
				</div>
			</div>
		</div>
	</div>

<ul class="resultado">
</ul>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script type="text/javascript" src="personalizadoaula.js"></script>
<br>


<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>