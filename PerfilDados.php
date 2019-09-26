<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
    <title>Minha conta - Corpo em Movimento</title>
  </head>
<?php
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
} else{

}  ?>
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
         $page="dados";
        include "includes/sidebar.php" ?>
     
            
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                 <div class="col-lg-1 dsw">
                    
                  
                      
                  </div><!-- /col-lg-3 -->
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
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i><font color="Green"> &nbsp;Dados Pessoais </font></h4>
                      <form class="form-horizontal style-form" method="POST" action="SalvarBD/AltDados.php?codigo=<?=$idzao?>">
                      <div class="form-group">
                              <label class="col-sm-1 col-sm-2 control-label"><font color="Black">&nbsp;&nbsp;Nome</font></label>
                              <div class="col-sm-10">
                                  <input type="text" id="nome" name="nome" maxlength="30"  required class="form-control round-form" value ="<?=$_SESSION['user'];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-1 col-sm-2 control-label"><font color="Black">&nbsp;&nbsp;Email</font></label>

</font></label>
                              <div class="col-sm-10">
                                  <input type="email" id="email" name="email" maxlength="30" minlength="7" required class="form-control round-form" value ="<?=$_SESSION['email'];?>">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-theme">Alterar</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
                          </div>
                      
                   
                </div>
              </div> 
            <br><br><br>
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
              <a href="PerfilDados.php#" class="go-top">
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
