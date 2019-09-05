<!DOCTYPE html>
<html lang="en">
  <head>

<link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
    <title>Meu Formulário - Corpo em Movimento</title>

<?php
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
header("location:index.php");
} else{

} 
$id = $_SESSION['id'];
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
               $page="dados";
              include "includes/sidebar.php";
              $query = sprintf("SELECT altura, peso, idade, genero, exer_dia FROM formcorp WHERE id_usuario = '$id'");
              mysqli_select_db($conexao, $dbname);
             // cria a instrução SQL que vai selecionar os dados
       // executa a query
       $dados = mysqli_query( $conexao,$query) or die(mysqli_error());
       // transforma os dados em um array
       $linha = mysqli_fetch_assoc($dados);
       // calcula quantos dados retornaram
       $total = mysqli_num_rows($dados);

$takedia = sprintf("SELECT dia FROM dias_exercicios WHERE id=$id");
$takediad = mysqli_query( $conexao,$takedia) or die(mysqli_error());
$takedial = mysqli_fetch_assoc($takediad);
$takediat = mysqli_num_rows($takediad);

   $seg=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);
   $ter=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);
   $qua=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);
   $qui=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);
   $sex=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);
   $sab=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);
   $dom=$takedial['dia'];
   $takedial = mysqli_fetch_assoc($takediad);

  ?>

<section id="main-content">
          <section class="wrapper">
          <style>input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}</style><div class="row mt">
                <div class="col-lg-1 dsw">
      
    </div><!-- /col-lg-3 -->
<div class="limiter col-md-9">
        <div class="row mt">
<div class="col-lg-12">
    <div class="form-panel">
        <h4 class="mb"><i class="fa fa-angle-right"></i><font color="Green"> &nbsp;&nbsp;Formulário Corporal </font></h4>
        <form class="form-horizontal style-form" method="POST" action="SalvarBD/AltFormCorp.php?codigo=<?=$id?>">
        <div class="form-group">
                <label class="col-sm-4 col-sm-2 control-label"><font color="Black"> &nbsp;&nbsp;Altura</font></label>
                <div class="col-sm-6">
                    <input type="text"  name="altura" required class="form-control round-form" maxlength="4" pattern=".{4,4}" title="Exemplo: x.xx" onKeyUp="maskIt(this,event,'##.#',true)"  value =<?=number_format( (float) $linha['altura'],2, '.', '');?>>
                </div>
            </div>
            <div class="form-group">
    <label class="col-sm-4 col-sm-2 control-label"><font color="Black">&nbsp;&nbsp; Peso</font></label>
    <div class="col-sm-6">
        <input type="text" pattern=".{4,5}" required title="Exemplo: xx.x" name="peso" maxlength="5" class="form-control round-form" onKeyUp="maskIt(this,event,'####.#',true)" value ="<?=number_format( (float) $linha['peso'],1, '.', '');?>">
    </div>
            </div>
    <div class="form-group">
        <label class="col-sm-4 col-sm-2 control-label"><font color="Black"> &nbsp;&nbsp;Idade</font></label>
        <div class="col-sm-6">
            <input type="number"  name="idade" onKeyPress="if(this.value.length==3) return false;" required class="form-control round-form" value =<?=$linha['idade']?>>
        </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-sm-2 control-label"><font color="Black"> &nbsp;&nbsp;Quantidade de Exercícios</font></label>
                <div class="col-sm-6">
                    <input  type="text" name="quant" maxlength="1"  id="quant" placeholder="Exercicios por dia" required class="form-control round-form" value =<?=$linha['exer_dia']?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-sm-2 control-label"><font color="Black">&nbsp;&nbsp; Gênero</font></label>
                <div class="col-sm-6">
                    <div class="select">
            <select name="genero">
<option value="masculino"<?php echo $linha['genero']=='masculino'?'selected':'';?>> Masculino</option>
<option value="feminino"<?php echo $linha['genero']=='feminino'?'selected':'';?>> Feminino</option>
            </select>
            <div class="select_arrow">
            </div>
                </div> <label class="label-input100"><font color="Black">Dias da semana</font></label>
<input type="hidden" name="funcao" id="funcao" value="funcao"/>
<select name="dias[]" id="dias" class="form-control selectpicker" data-live-search="false" multiple required>
      <option value="Segunda-Feira"<?php echo $seg=='Segunda-Feira'|| 
      $ter=='Segunda-Feira'|| 
      $qua=='Segunda-Feira'|| 
      $qui=='Segunda-Feira'|| 
      $sex=='Segunda-Feira'|| 
      $sab=='Segunda-Feira'|| 
      $dom=='Segunda-Feira'?'selected':'';?>>Segunda-Feira</option>

      <option value="Terça-Feira"<?php echo $ter=='Terça-Feira'||
      $seg=='Terça-Feira'||
      $qua=='Terça-Feira'|| 
      $qui=='Terça-Feira'|| 
      $sex=='Terça-Feira'|| 
      $sab=='Terça-Feira'|| 
      $dom=='Terça-Feira'?'selected':'';?>>Terça-Feira</option>

      <option value="Quarta-Feira"<?php echo $qua=='Quarta-Feira'||
      $seg=='Quarta-Feira'|| 
      $ter=='Quarta-Feira'|| 
      $qui=='Quarta-Feira'|| 
      $sex=='Quarta-Feira'|| 
      $sab=='Quarta-Feira'|| 
      $dom=='Quarta-Feira'?'selected':'';?>>Quarta-Feira</option>

      <option value="Quinta-Feira"<?php echo $qui=='Quinta-Feira'||
      $seg=='Quinta-Feira'||
      $ter=='Quinta-Feira'|| 
      $qua=='Quinta-Feira'||  
      $sex=='Quinta-Feira'|| 
      $sab=='Quinta-Feira'|| 
      $dom=='Quinta-Feira'?'selected':'';?>>Quinta-Feira</option>

      <option value="Sexta-Feira"<?php echo $sex=='Sexta-Feira'||
      $seg=='Sexta-Feira'||
      $ter=='Sexta-Feira'|| 
      $qua=='Sexta-Feira'|| 
      $qui=='Sexta-Feira'||  
      $sab=='Sexta-Feira'|| 
      $dom=='Sexta-Feira'?'selected':'';?>>Sexta-Feira</option>

      <option value="Sábado"<?php echo $sab=='Sábado'||
      $seg=='Sábado'|| 
      $ter=='Sábado'|| 
      $qua=='Sábado'|| 
      $qui=='Sábado'|| 
      $sex=='Sábado'||  
      $dom=='Sábado'?'selected':'';?>>Sábado</option>

      <option value="Domingo"<?php echo $dom=='Domingo'||
      $seg=='Domingo'||
      $ter=='Domingo'|| 
      $qua=='Domingo'|| 
      $qui=='Domingo'|| 
      $sex=='Domingo'|| 
      $sab=='Domingo'?'selected':'';?>>Domingo</option>
</select>
                    </div>   
                        </div>     
                        <button id='btSelecionar' name='btSelecionar'type="submit" class="btn btn-theme">Alterar</button>
          			            </div>
                            </form>
                        </div>
          			</div>
          		</div>
          	</div><!-- /row -->
   
		</section><!-- /wrapper -->
      </section>         
      <br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="site-footer">
          <div class="text-center">
              2019 - Corpo Em Movimento
              <a href="PerfilForm.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
<script>
$(document).on('click', '#btSelecionar', function(event) {
    event.preventDefault();
    $("#funcao").val("copiar");
    var self = $(this);
    $.ajax({type: "POST",
        url: "SalvarBD/AltFormCorp.php",
        type: "POST",
        timeout:default_timeout,
        data: $( "form" ).serialize();,
        beforeSend: function(){
            self.attr('disabled', 'true');
        },
        success: function() {

        },
        error: function(jqXHR, textStatus){
            console.log(textStatus, jqXHR);
        },
        complete: function(){
            self.removeAttr('disabled');
        }
    });
});</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.js"></script>

   
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script> 
    <script type="text/javascript">

function maskIt(w,e,m,r,a){
// Cancela se o evento for Backspace
if (!e) var e = window.event
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
// Variáveis da função
var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
var mask = (!r) ? m : m.reverse();
var pre  = (a ) ? a.pre : "";
var pos  = (a ) ? a.pos : "";
var ret  = "";
if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;
// Loop na máscara para aplicar os caracteres
for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
if(mask.charAt(x)!='#'){
ret += mask.charAt(x); x++; } 
else {
ret += txt.charAt(y); y++; x++; } }
// Retorno da função
ret = (!r) ? ret : ret.reverse()	
w.value = pre+ret+pos; }
// Novo método para o objeto 'String'
String.prototype.reverse = function(){
return this.split('').reverse().join(''); };
</script>  
</body>
</html>
