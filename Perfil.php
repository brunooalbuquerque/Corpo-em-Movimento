<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
<title>Perfil - Corpo em Movimento</title>
<?php
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
}
$id = $_SESSION['id'];

$barrar = sprintf("SELECT id_usuario FROM formcorp WHERE id_usuario=$id");
$dados = mysqli_query($conexao,$barrar) or die(mysqli_error());
                       $num = mysqli_fetch_array($dados,MYSQLI_NUM)[0];
                                      if ($num != $id){
                                      echo '<script> window.location.replace("FormCorp.php"); </script>';
                                      }
?>
  <body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
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
$page="perfil";
include "includes/sidebar.php";

          $query = sprintf("SELECT id_exercicio, Datas FROM lista_exercicios WHERE id_usuario=$id
           order by id_exercicio");
          $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
          
          $linha = mysqli_fetch_assoc($dados);
          $QuantExcerc = mysqli_num_rows($dados);

          //redireciona para sortear caso usuario não tenha exercicios ainda
        if ($QuantExcerc<10) {
        //echo '<script> window.location.replace("SalvarBD/Exercicios.php"); </script>';
        }

          $datas1 = date('d-m-Y', strtotime($linha['Datas']));
          $datas2 = date('d-m-Y', strtotime('+30 days',strtotime($datas1)));
          $data1 = new DateTime( $datas1 );
          $data2 = new DateTime( $datas2 );
          $diasfalta = $data1->diff( $data2 );

          $query2 = sprintf("SELECT ID, Nome, Quantidade, MuscAlvo,tipo_exercicio, Link FROM exercicios ");
          // executa a query
          
          $dados2 = mysqli_query( $conexao,$query2) or die(mysqli_error());
          // transforma os dados em um array
          $linha2 = mysqli_fetch_assoc($dados2);
            // calcula quantos dados retornaram
            $total2 = mysqli_num_rows($dados2);


          $id_exercicio=$linha['id_exercicio'];

         $takedia = sprintf("SELECT dia FROM dias_exercicios WHERE id=$id");
          // executa a query
          
          $takediadados = mysqli_query( $conexao,$takedia) or die(mysqli_error());
          // transforma os dados em um array
          $takedialinha = mysqli_fetch_assoc($takediadados);
            // calcula quantos dados retornaram
            $takediatotal = mysqli_num_rows($takediadados);

?>


      <section id="main-content">
          <section class="wrapper centralizar">
              <div class="row"> 
                  <div class="col-lg-9 main-chart">
                     
     <h3><font color="green"><?=$datas1?> &nbsp;&nbsp; &nbsp;&nbsp;<?=$datas2?></font></h3>

      <a><button class="contact3-form-btn" onclick="attexerc();">Atualizar Exercícios &nbsp;&nbsp;
       <i class="fa fa-refresh" aria-hidden="true"></i></button></a>

<table class="table bg-success">
    <thead class="bg-dark">
    <tr>
      <th scope="col">#</th>
      <th class="centralizar" scope="col">Dia</th>
      <th class="centralizar" scope="col">Nome</th>
      <th class="centralizar" scope="col">Quantidade</th>
      <th class="centralizar" scope="col">Musculo Alvo</th>
      <th class="centralizar" scope="col">Alvo</th>
      <th class="centralizar" scope="col">Demonstração</th>
    </tr>
    </thead>
  <tbody>
    <tr>

  <?php
  
    $e = 1;                                             
    do {
    if ($linha['id_exercicio']==$linha2['ID']) {
    ?>                                                
  
      <th scope="row"><?=$e?></th>
      <td><?php
      if($e < 2){echo $takedialinha['dia'];}
      if($e >2 && $e < 4){echo $takedialinha['dia'];}
      if($e >4 && $e < 6){echo $takedialinha['dia'];}
      if($e >6 && $e < 8){echo $takedialinha['dia'];}
      if($e > 8 && $e < 10 ){echo $takedialinha['dia'];}
      ?>
      </td>
      <td><?=utf8_encode($linha2['Nome'])?></td>
      <td><?=$linha2['Quantidade']?></td>
      <td><?=$linha2['tipo_exercicio']?></td>
      <td><a><button class="oioi" onclick="attoneexerc();">
      <i class="fa fa-youtube-play " aria-hidden="true"></button></a></i></td>
      <td><a class="oioi" href="<?=$linha2['Link']?>" target="_blank">
      <i class="fa fa-youtube-play " aria-hidden="true"></i></td>
      </tr>
  </tbody>

<?php 
                    $linha = mysqli_fetch_assoc($dados);
                    $takedialinha = mysqli_fetch_assoc($takediadados);
                    }else{
                    $e--;
                    }
                    $e++;
                    }while($linha2 = mysqli_fetch_assoc($dados2));
                    
                    mysqli_free_result($dados);
                    mysqli_free_result($dados2);
                      ?>
</table> 
</div>  
                     
                  <div class="col-lg-3 ds">
                    
                        <!-- CALENDAR-->
<div id="calendar" class="mb">
    <div class="panel green-panel no-margin">
        <div class="panel-body">
            <div id="date-popover" class="popover top" style="cursor: pointer; disadding: 
            block; margin-left: 33%; margin-top: -50px; width: 175px;">
                <div class="arrow"></div>
                <h3 class="popover-title" style="disadding: none;"></h3>
                <div id="date-popover-content" class="popover-content"></div>
            </div>
            <div id="my-calendar"></div>
        </div>
    </div>
</div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div> 
      
          </section>
      </section>

  
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<br>

<style>.swal2-popup {
  font-size: 1.6rem !important;
}</style>
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
              <a href="Perfil.php#" class="go-top">
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
	
    <script type="text/javascript">
    function attoneexerc() { 
  Swal.fire({
  position: 'center',
  type: 'success',
  title: 'Exercício alterado com sucesso!',
  showConfirmButton: false,
  timer: 1200,
  onClose(){
 window.location.replace("Perfil.php");
}
})
}


function attexerc() { 
  Swal.fire({
  type: 'question',
  title: 'Hmmm...',
  html:
    'Deseja Atualizar seus exercicios?<br/><br/>',
    showCancelButton: true,
    showCloseButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText:	'Sim',
  cancelButtonText:	'Não',
 
  
}).then((result) => {
  if (result.value) {
    Swal.fire({
  type: 'success',
  html:
    'Seus exercicios foram atualizados!<br/><br/>',
  confirmButtonColor: '#3085d6',
  confirmButtonText:	'Sim',
  onClose(){

  window.location.replace("SalvarBD/Exercicios.php");

}
})
  }else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
   
    
  }
})

}

  
        $(document).ready(function () {
            
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bem Vindo(a)  <br><?=$_SESSION['user']; ?>!',
            // (string | mandatory) the text inside the notification
            text: '  <a  target="_blank" style="color:#ffd777"><?=$diasfalta->days;?> dias para atualizar a lista de exercicios</a>.',
            // (string | optional) the image to display on the left
            image: 'img/logoreal.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 4000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
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
                }
                //,legend: [
                //    {type: "text", label: "Special event", badge: "00"},
                //    {type: "block", label: "Regular event", }]
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