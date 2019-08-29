<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
    <title>Minha Senha - Corpo em Movimento</title>
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

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    


    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php
  error_reporting(0);
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
} else{

}  ?>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" ></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>Corpo em Movimento</b></a>
            <!--logo end-->
          
            </header>

      <?php
       $page="dados";
      include "includes/sidebar.php" ?>

      <section id="main-content">
          <section class="wrapper">

              <div class="row">
              	 <div class="col-lg-1 dsw">
                    
                       
                      
                  </div>
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		
                  	
                  	</div><!-- /row mt -->	
                      <?php
                             $idzao = $_SESSION['id'];
                             $query = sprintf("SELECT  nome, email FROM usuarios WHERE id = '$idzao'");

                             $query3 = sprintf( "SELECT email FROM usuarios WHERE id ='$idzao'");
                             $dados3 = mysqli_query( $conexao,$query3) or die(mysqli_error());
                             $linha3 = mysqli_fetch_assoc($dados3);
                             $email = $_SESSION['email']=$linha3['email'];
                      ?>
                    
                      <div class="limiter col-md-12">
                      <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i><font color="Green"> &nbsp;Redefinir Senha </font></h4>
                      <form class="form-horizontal style-form" method="POST" action="SalvarBD/redefinir.php">
                      <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><font color="Black">&nbsp;&nbsp;Senha Atual</font></label>
                              <div class="col-sm-10">
                                  <input type="password" id ="senhaantiga" name="oldsenha"  onchange="checkFilled();" class="form-control round-form" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><font color="Black">&nbsp;&nbsp;Nova Senha</font></label>
                              <div class="col-sm-10">
                                  <input type="password" id="novasenha1" maxlength="30" minlength="7" name="novasenha" onchange="checkFilled();" class="form-control round-form" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"><font color="Black">Redigite a nova Senha</font></label>
                              <div class="col-sm-10">
                                  <input type="password" id="novasenha2" name="novasenha2"  onchange="checkFilled();" class="form-control round-form" required>
                              </div>
                          </div>

                          <button type="submit" id="btalterar" class="btn btn-theme">Alterar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
                          </div>
                      
                   
                     </div>
                 
              </div> 
      <br><br><br><br><br><br><br><br>
          </section>

      </section>

      <!--main content end-->
      <!--footer start-->
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
      <footer class="site-footer">
          <div class="text-center">
              2019 - Corpo Em Movimento
              <a href="Senha.php#" class="go-top">
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

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
    
	<script type="application/javascript">

function checkFilled() {
	
	var senha = document.getElementById("senhaantiga");
    var senha2 = document.getElementById("novasenha2");
    var senha1 = document.getElementById("novasenha1");
    if (senha2.value == senha1.value) {
        document.getElementById("btalterar").disabled = false; 
        senha2.style.backgroundColor = "Aquamarine ";
        senha1.style.backgroundColor = "Aquamarine ";
    }
    else{
        document.getElementById("btalterar").disabled = true; 
        senha2.style.backgroundColor = "red";
        senha1.style.backgroundColor = "white";
    }

if (senha2.value == "" || senha1.value == "" || senha.value == "" ) {
    document.getElementById("btalterar").disabled = true; 
        senha2.style.backgroundColor = "white";
        senha1.style.backgroundColor = "white";
    }

    var n = senha2.value.length;

 
}
checkFilled();




        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
