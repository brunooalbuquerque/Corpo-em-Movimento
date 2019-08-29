<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
<script type="text/javascript">
function alertcontanexiste() { 
  Swal.fire({
  type: 'error',
  text: 'E-mail ou senha inválido!',
  showConfirmButton: false,
  timer: 2000
})
}
</script>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="img/LogoIcon.ico"/>
    <title>Login - Corpo em Movimento</title>
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="mycss/style.css">
<!-- As a link -->

<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      Corpo em Movimento
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.php"><img src="https://img.icons8.com/windows/20/000000/home.png">&nbsp;&nbsp;Home</a>

  </div>
</div>

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {
  height: 50px;
  width: 100%;
  background-color: #5c6572;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(44, 248, 37, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(230, 219, 219, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>
  
</head>
<body>
  <p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
    <h2>Bem Vindo!</h2>
    <form  name="cadastro" method="post" action="SalvarBD/SaveLogin.php" id="form">
    <label>
      <span>Email</span>
      <input type="email" name="email" id="email" required/>
    </label>
    <label>
      <span>Senha</span>
      <input type="password"  name="senha" id="senha" required/>
    </label>
    <p class="forgot-pass , m--in">Esqueceu a senha?</p>
    <button type="submit" class="submit"> Entrar </button>
  </div>
</form>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>Novo por aqui?</h2>
        <p>Cadastre-se e junte-se a nós nessa jornada pelo estilo de vida saudável!</p>
      </div>
      <div class="img__text m--in">
        <h2>Já possui conta?</h2>
        <p>Se já possui conta, Entre! Nós estamos sentindo sua falta!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Cadastrar</span>
        <span class="m--in">Entrar</span>
      </div>
    </div>
    
    <div class="form sign-up">
      <h2>É hora de se juntar a nós</h2>
<form  name="cadastro" method="post" action="SalvarBD/SaveCad.php" id="form">
      <label>
        <span>Nome</span>
        <input type="text"   name="nome2" id="nome2" required  />
      </label>
      <label>
        <span>Email</span>
        <input type="email"   name="email2" id="email2" required  />
      </label>
      <label>
        <span>Senha</span>
        <input type="password" maxlength="30" minlength="7"  name="senha2" id="senha2" required/>
      </label>
      <label> <input type="checkbox" id="termo" name="termo" name="termo">Li e concordo com os <a href="TermosCondicoes.php" target="_blank">Termos e Condições.</a></label>
        <label><span style="color:red" id="cheque">Concorde com os termos para se cadastrar</span></label>
      <button type="submit" id="enviar" name="enviar" disabled class="submit">Cadastrar</button>
    </form>
    </div>
  </div>

<?php
session_start();
if($_SESSION['logado'] ){
  header("location:index.php");
 }

if($_SESSION['errou']=TRUE){
  echo $_SESSION['errou'];
  $_SESSION['errou']=FALSE;
  echo "<script>alertcontanexiste();</script>";
}
?>

      <script  src="js/index.js"></script>
</div>
</body>
<script>
var checker = document.getElementById('termo');
var sendbtn = document.getElementById('enviar');
var x = document.getElementById('cheque');
checker.onchange = function() {
  sendbtn.disabled = !this.checked;
  if(checker.checked == true){
    x.style.color = '#00FF00';
    }else{
    x.style.color = '#ff0000'; 
    }
}

//   var element = document.getElementById("enviar");
//   element.classList.remove("submit");
</script>
</html>
