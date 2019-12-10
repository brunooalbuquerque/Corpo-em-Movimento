<?php
session_start();
if (!isset($_SESSION['logado'])) {
  $_SESSION['logado'] = "";
}
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
$teste=0;
} else{
$teste=1;
}
?>

<!DOCTYPE html>
<html class="no-js">
<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Corpo em Movimento</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link href="css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/iconikkonii.ico">

</head>

<!-- <img class="header" src="img/logoreal.png" alt="some text"> -->

<body>
    

  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <h1> 
      <a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">&nbsp;Corpo em Movimento
     </a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#section-about">Sobre Nós</a></li>
            <li><a href="#services">O que Oferecemos</a></li>
            <li><a href="#team">Time</a></li>
            <li><a id="login" href="login.php">Login</a></li>
            <li><a id="cadastrar" href="sign_in.php">Cadastrar</a></li>
            <li><a id="perfil" href="perfil.php">Meu Perfil</a></li>
            <li><a id= "sair" href="SalvarBD/logout.php">Sair</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>

    </section>
  </div>

  <script type="text/javascript">
var teste = "<?php echo $teste ?>";
if(teste>0){

document.getElementById("sair").style.display = "show";
document.getElementById("perfil").style.display = "show";
document.getElementById("login").style.display = "none";
document.getElementById("cadastrar").style.display = "none";
}else{
  document.getElementById("perfil").style.display = "none";
  document.getElementById("sair").style.display = "none";
}

</script>

  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active" style="background-image: url(img/logo.jpg);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Tenha uma Vida Mais Saudável!!</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Receba as Melhores Dicas de Saúde</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                   
                  </div>
                  <div class="form-group">

                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="item" style="background-image: url(img/logo2.jpg);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>Totalmente de Graça!!</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Só Precisa se Cadastrar</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                  <div class="form-group">
                   
                      
                  </div>
                  <div class="form-group">

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Nosso Projeto</h2>


              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="row-slider">
            <div class="col-lg-6 mar-bot30">
              <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                <div class="slides" data-group="slides">
                  <ul>

                    <div class="slide-body" data-group="slide">
                    <li><img alt="" class="img-responsive" src="img/projeto1.jpg" width="100%" height="350" /></li>
                    <li><img alt="" class="img-responsive" src="img/projeto2.jpg" width="100%" height="350" /></li>
                    <li><img alt="" class="img-responsive" src="img/projeto3.jpg" width="100%" height="350" /></li>

                    </div>
                  </ul>
                  <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                  <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>

                </div>
              </div>
            </div>

            <div class="col-lg-6 ">
              <div class="company mar-left10">
                <h4>Nosso projeto foi criado em 2019 com intuito de melhorar a qualidade de vida das pessoas.</h4>
                <p> Que a tecnologia facilita a realização de diversas tarefas é inegável,
                 hoje em dia podemos pagar contas, fazer compras e até controlar algumas áreas da casa
                  com apenas um clique, mas você já parou para pensar que ela não pode facilitar tudo? 
                  Praticar exercícios é algo que um celular não pode fazer por nós, então, pensando nisso
                   a Corpo em Movimento resolveu unir tecnologia e bem-estar para trazer a seus usuários
                    facilidade e qualidade de vida!
                  </p>
              </div>
              <div class="list-style">
                <div class="row">
                  
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/about-->

  <!-- spacer section:testimonial -->
  <section id="parallax1" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5 style="text-shadow: 10px 6px 6px #333; color:#ffffff;">
              Vocês são nota 10. Obrigado pela ajuda, foi dentro de
               minhas expectativas. Essa parceria será de longa data com certeza. Me senti muito bem
                aí e quero poder estar com vocês sempre que possível
               e necessário. Registro meus parabéns a toda a equipe do Corpo Em Movimento.
              </h5>
              <br />
              <span class="author">&mdash; José Manuel </span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- services -->
  <section id="services" class="section  bg-white">
    <div class="container">
      <div class="row ">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Nosso serviço</h2>
              <h4>O que nos fazemos para ajudar?</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="wow bounceIn">
            <div class="align-center">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-leaf"></i></figure>
                  </div>
                  <h2><a href="#">Vida</a></h2>
                  <p>Uma melhora na sua qualidade de vida, com nosso projeto você terá mais energia no seu dia a dia fazendo com que tenha um maior aproveitamento do seu tempo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-cutlery"></i></figure>
                  </div>
                  <h2><a href="#">Alimentação</a></h2>
                  <p>Sua alimentação não será apenas coisas chatas de dieta, será para você!! Fazendo com que seja prazeroso segui-lá.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-heart-o "></i></figure>
                </div>
                <h2><a href="#">Saudavel</a></h2>
                <p>Tenha uma vida mais saudavel e se sinta melhor consigo mesmo, você irá perceber que a felicidade se encontra aqui.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/services-->

  <!-- spacer section:testimonial -->
  <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5 style="text-shadow: 10px 6px 6px #333; color:#ffffff;">
              O maior erro que um homem pode cometer é sacrificar a sua saúde a qualquer outra vantagem.
              </h5>
              <br/>
              <span class="author" style="text-shadow: 10px 6px 6px #333; color:#ffffff;">&mdash; Arthur Schopenhauer</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- team -->
  <section id="team" class="team-section">
    <div class="container">

      <div class="row mar-bot10">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Nossa equipe</h2>
              <p>Nossa equipe é formada pelos alunos de desenvolvimento da Fatec!</p>

            </div>
          </div>
        </div>
      </div>


        <div class="col-md-4">
          <div class="wow bounceIn" data-animation-delay="4.8s">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="img/team/gabriel_photo.jpg" alt="foto Gabriel"></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                </div>
              </div>
              <div class="team-detail">
                <h4>Gabriel Previato</h4>
                <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
                <span>Desenvolvedor</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="img/team/bruno_photo.jpg" alt="foto do Bruno"></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                </div>
              </div>
              <div class="team-detail">
                <h4>Bruno Albuquerque</h4>
                <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                  </div>
                <span>Desenvolvedor</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="img/team/yuri_photo.jpg" alt="foto do yuri steck"></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
              
                </div>
              </div>
              <div class="team-detail">
                <h4>Yuri Steck</h4>
                <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                  </div>
                <span>Desenvolvedor</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /team -->

  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.localScroll.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script>

</html>
