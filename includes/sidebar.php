<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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
    <link rel="stylesheet" type="text/css" href="css/radio.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">    
<link rel="stylesheet" type="text/css" href="css/cssadd/util.css">
    <link rel="stylesheet" type="text/css" href="css/cssadd/main.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>

<?php
include "IMC.php";
?>

<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
    <p class="centered"><a href="perfil.php"><img src="img/logoreal.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$_SESSION['user'];?></h5><hr></hr>

                   <h5 class="centered" data-toggle="tooltip" data-html="true" 
      title="<h5>Peso/Altura²</h5>"><span>IMC: </span><?=$IMC;?> 
      <i class="fa fa-heartbeat" aria-hidden="true"></i></h5>
                    <h5 class="centered"><?=$classificacao;?></h5>
                    <hr></hr>
              	  	
                  <li class="mt">
                      <a class="<?php if($page == "perfil"){echo "active";} ?>" href="Perfil.php">
                          <i class="fa fa-user"></i>
                          <span>Perfil</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if($page == "SeuCorpo"){echo "active";} ?>" href="SeuCorpo.php" >
                          <i class="fa fa-area-chart"></i>
                          <span>Seu Corpo, Sua Saúde</span>
                      </a>
                     
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if($page == "dados"){echo "active";} ?>" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Alterar dados</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="PerfilDados.php">Dados pessoais</a></li>
                          <li><a  href="PerfilForm.php">Formulario Corporal</a></li>
                          <li><a  href="Senha.php">Redefinir Senha</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a target="_blank" href="TermosCondicoes.php" >
                          <i class="fa fa-file-text"></i>
                          <span>Termos e Condições de uso</span>
                      </a>
                  </li>
                
                  <li class="sub-menu">
                      <a href="SalvarBD/logout.php" >
                          <i class=" fa fa-power-off"></i>
                          <span>Sair</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
</html>

<!-- //script do tooltip -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
  
})</script>