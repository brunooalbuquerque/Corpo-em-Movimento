<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alterar Exercicio</title>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<meta charset="UTF-8">
  <link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
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

<style>body {background-color: #f2f2f2 ;}</style>

<?php
include "includes/conexao.php";
            $query = sprintf("SELECT * FROM exercicios");

// executa a query
$dados = mysqli_query( $conexao,$query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<section id="main-content">
          <section class="text-light wrapper centralizar">
              <div class="row"> <div class="col-md-1 align-self-end main-chart"></div>
                  <div class="col-md-10 align-self-end main-chart">

<a href="ADM_ADD.php">
     <button class="contact3-form-btn">Voltar</button>
</a>

<table class="table-responsive table bg-success">
    <thead class="bg-dark">
    <tr>
      <th scope="col">#</th>
      <th class="text-center" scope="col">ID</th>
      <th class="text-center" scope="col">Nome</th>
      <th class="text-center" scope="col">Quantidade</th>
      <th class="text-center" scope="col">Musculo Alvo</th>
	  <th class="text-center" scope="col">Demonstração</th>
	  <th class="text-center" scope="col">Editar</th>
	  <th class="text-center" scope="col">Excluir</th>
    </tr>
    </thead>
  <tbody>
    <tr>
      
  <?php
    $e = 0;                                             
    do {

    ?>                                                
      <th scope="row"><?=$e+1?></th>
      <td><?=utf8_encode($linha['ID'])?></td>
	  <td><?=utf8_encode($linha['Nome'])?></td>
	  <td><?=$linha['Quantidade']?></td>
	  <td><?=$linha['MuscAlvo']?></td>
      <td><a class="oioi" href="<?=$linha['Link']?>" target="_blank">
	  <i class="fa fa-youtube-play" aria-hidden="true"></i></td>
	  
	  <td><a class="oioi" href="ADM_Edit.php?codigo=<?=$linha['ID']?>">Editar</td>
       <td><a class="oioi" href="SalvarBD/ADM_Excluir.php?codigo=<?=$linha['ID']?>">Excluir</td>

  </tr>

<?php 

          $e++;
          }while( $linha = mysqli_fetch_assoc($dados));
       
          mysqli_free_result($dados);
         
			?>
				  
	
    </tbody>
  </table>   

	  </div><!-- /col-lg-3 -->
      
	  </div> 
  </section>
</section>

</body>
</html>