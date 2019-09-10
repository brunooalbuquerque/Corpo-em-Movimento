<!DOCTYPE html>
<meta charset="UTF-8">
  <head>
  <link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
    <title>Seu Corpo - Corpo em Movimento</title>
  </head>
<?php
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
}
?>
  <body>
  

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" ></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>Corpo em Movimento</b></a>
            <!--logo end-->
        </header>

        <?php 
        $page = "SeuCorpo";
        include "includes/sidebar.php" ?>
        <?php
        $id=$_SESSION['id'];
                       $idzao = $_SESSION['id'];
                             $query = sprintf("SELECT altura, peso, idade, genero FROM formcorp WHERE id_usuario = '$id'");
                             mysqli_select_db($conexao, $dbname);
                             
                      $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha = mysqli_fetch_assoc($dados);
                      // calcula quantos dados retornaram
                      $total = mysqli_num_rows($dados);

            if ($classificacao == 'Abaixo do peso'){
                      $procurar = "Abaixo do peso";
                      }
            if($classificacao == 'Peso Ideal'){
                        $procurar = "Peso ideal";  
                      }
            if($classificacao == 'Levemente acima do peso' || $classificacao == 'Obesidade grau I' 
                      || $classificacao == 'Obesidade grau II' || $classificacao == 'Obesidade grau III' ){
                        $procurar = "Acima do peso";  
                      }
                      $ambos = "Todos usuarios";

                      $query2 = sprintf("SELECT descricao FROM dicas WHERE tipo_usuario = '$procurar' OR tipo_usuario = '$ambos' ORDER BY RAND() LIMIT 1");
                      mysqli_select_db($conexao, $dbname);
                      
                      $dados2 = mysqli_query( $conexao,$query2) or die(mysqli_error());
                      // transforma os dados em um array
                      $linha2 = mysqli_fetch_assoc($dados2);
                      $dica=$linha2['descricao'];
                      

                      $altura=$linha['altura'];
                      $peso=$linha['peso'];
                      $minimo = number_format(18.5 * $altura * $altura,2);
                      $maximo =number_format(25 * $altura * $altura,2);

                      if ($classificacao != 'Peso Ideal'){
                        if ($peso <= $minimo){
                          $ganhar = number_format($minimo - $peso,3);
                           $ideal="É preciso que você tente manter <br> seu peso entre $minimo e $maximo quilos, por isso <br> aconcelhamos que ganhe no mínimo $ganhar quilos";
                        }
                        else{
                          $perder = number_format($peso - $maximo,3);
                          $ideal="É preciso que você tente manter <br> seu peso entre $minimo e $maximo quilos, por isso <br>  aconcelhamos que perca mínimo $perder quilos";
                        }  
                      }else{
                          $ideal="Você está com o peso ideal! Mantenha-se entre $minimo e $maximo";
                        }
                      ?>
            
      <section id="main-content">
          <section class="wrapper">
          <h1 class="mb"><i class="fa fa-heartbeat blackiconcolor "></i><font color="Green"> Orientações e Dicas!! </font></h1>
          <style>.blackiconcolor {color:green;}</style>
          <center><div class="alert alert-dark" role="alert">
          <h4><font color="green">Dica do dia!</h4>
<?php 
echo utf8_encode($dica);
?></font>
</div></center>
          <div class="row mt">
                <div class="col-lg-1 dsw">   
                  </div><!-- /col-lg-3 -->
                <div class="limiter col-md-9">
                      <div class="row mt">
                          <div class="col-lg-10 col-md-12 col-sm-12 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>SEU CORPO</h5>
								</div>
								<font color="Green"><h3><b><?=$_SESSION['user'];?></b><h3></font>
									<div class="row">
										<div class="col-md-6">
											<p class="small mt">ALTURA</p>
                      <p><?=number_format( (float) $altura,2, '.', '');?></p>
										</div>
										<div class="col-md-6">
											<p class="small mt">PESO</p>
											<p><?=number_format( (float) $peso,1, '.', '');?></p>
                                        </div> 
                                    </div>
                                    <div class="white-panel pn">
								<div class="white-header">
									<h5>SUA SAÚDE</h5>
								</div>
                <font color="Green"><h4><b>IMC: <?=$IMC;?></b><h4></font>
									<div class="row">
                                        <div class="col-md-6">
											<p class="small mt">CLACIFICAÇÂO</p>
											<p><?=$classificacao?></p>
                                        </div>
                                        <div class="col-md-6">
											<p class="small mt">RECOMENDAÇÃO</p>
											<p><?=$ideal?></p>
                                        </div>                          
                                    </div>
                <div class="white-panel pn">
								<div class="white-header">
									<h5>TABELA IMC</h5>
								</div>
  
<img class="img-fluid" src="https://calculadoraonline.net.br/wp-content/uploads/2019/02/tabela-de-imc-1.png" alt="img imc">                    
        </div><!-- /col-md-4 -->
          		<div class="col-lg-5"> 

              </div>
            </div>  
          </section>
      </section>
      
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
      <footer class="site-footer">
          <div class="text-center">
              2019 - Corpo Em Movimento
              <a href="SeuCorpo.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
  </body>
</html>