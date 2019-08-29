<!DOCTYPE html>
<html class="no-js">
<?php
session_start();
include "includes/conexao.php";
if(!$_SESSION['logado'] && !(isset($_SESSION['user']) && !empty($_SESSION['user']))){
$teste=0;
} else{
$teste=1;
}  ?>
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
          <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">Corpo em Movimento
            </a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#section-about">Sobre Nós</a></li>
            <li><a href="#services">O que Oferecemos</a></li>
            <li><a href="#team">Time</a></li>
            <li><a id="login" href="Login_CriarConta.php">Login</a></li>
            <li><a href="#section-works">Portfolio</a></li>
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
                    <button type="livedemo" onclick="myFunction()" class="btn" required="required">Dicas</button> 
                  </div>
                  <div class="form-group">
                    <button type="getnow" onclick="myFunction()" class="btn" required="required">Formulario do Corpo</button>
                  </div>

                  <script>
function myFunction() {
  window.location.replace('http://sidanmor.com');
}
</script>

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
                    <button type="livedemo" onclick="myFunction()" class="btn" required="required">Dicas</button>
                      
                  </div>
                  <div class="form-group">
                    <button type="getnow" onclick="myFunction()" class="btn" required="required">Formulario do Corpo</button>
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
                      <li><img alt="" class="img-responsive" src="https://www.saudemelhor.com/wp-content/uploads/2017/01/frutas-diabetes.jpg" width="100%" height="350" /></li>
                      <li><img alt="" class="img-responsive" src="https://www.saudedia.com.br/wp-content/uploads/2019/02/lanches-saudaveis-que-ajudam-a-perder-peso.jpg" width="100%" height="350" /></li>
                      <li><img alt="" class="img-responsive" src="https://www.colombo.com.br/blog/wp-content/uploads/2015/09/destacada.gif" width="100%" height="350" /></li>

                    </div>
                  </ul>
                  <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                  <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>

                </div>
              </div>
            </div>

            <div class="col-lg-6 ">
              <div class="company mar-left10">
                <h4>Nosso projeto foi criado em 2019 para pessoas que querem ser mais <span>saudaveis </span>.</h4>
                <p>Fornecemos suporte para pessoas que querem mudar de vida,
                 fazendo mais exercicios e tendo uma alimentação mais balanceada
                  .</p>
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
  <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
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
  <section id="services" class="section pad-bot5 bg-white">
    <div class="container">
      <div class="row mar-bot5">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Nosso serviço</h2>
              <h4>O que nos fazemos para ajudar?</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row mar-bot40">
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
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5 style="text-shadow: 10px 6px 6px #333; color:#ffffff;">
              O maior erro que um homem pode cometer é sacrificar a sua saúde a qualquer outra vantagem.
              </h5>
              <br />
              <span class="author" style="text-shadow: 10px 6px 6px #333; color:#ffffff;">&mdash; Arthur Schopenhauer</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- team -->
  <section id="team" class="team-section appear clearfix">
    <div class="container">

      <div class="row mar-bot10">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Nossa equipe</h2>
              <p>Nossa equipe é formada pelos alunos de desenvolvimento da Fatec!</p>

            </div>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot45">
        <div class="col-md-4">
          <div class="wow bounceIn" data-animation-delay="4.8s">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="https://scontent-gru2-2.xx.fbcdn.net/v/t1.0-9/10670172_669823846466880_4011887733632278919_n.jpg?_nc_cat=106&_nc_ht=scontent-gru2-2.xx&oh=9a04dd83647b97be3a19fa74e75b54aa&oe=5D2ACA13" alt=""></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                  <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-detail">
                <h4>Gabriel Previato</h4>
                <span>Desenvolvedor</span>
              </div>
              <div class="team-bio">
                <p>Gabriel foi um dos desenvolvedores e cuidou do design e programação.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <div class="wow bounceIn">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="https://scontent-gru2-2.xx.fbcdn.net/v/t1.0-9/57544649_2121379651294135_3521005169829478400_n.jpg?_nc_cat=101&_nc_ht=scontent-gru2-2.xx&oh=ce52cad96366f9772b87c68a002af049&oe=5D2F51EF" alt=""></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                  <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-detail">
                <h4>Yuri Steck</h4>
                <span>Desenvolvedor</span>
              </div>
              <div class="team-bio">
                <p>Yuri foi um dos desenvolvedores e cuidou do design e programação.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="wow bounceIn">
            <div class="team-member">
              <div class="profile-picture">
                <figure><img src="https://scontent-gru2-2.xx.fbcdn.net/v/t1.0-9/15823591_847720682037282_4513037949313662686_n.jpg?_nc_cat=111&_nc_ht=scontent-gru2-2.xx&oh=f006b982cc30dce6d02dc12ca6876967&oe=5D665A2C" alt=""></figure>
                <div class="profile-overlay"></div>
                <div class="profile-social">
                  <div class="icons-wrapper">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-detail">
                <h4>Bruno Talieri</h4>
                <span>Desenvolvedor</span>
              </div>
              <div class="team-bio">
                <p>Bruno foi um dos desenvolvedores e cuidou do design e programação.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- /team -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
    <div class="container ">
      <div class="align-center pad-top40 pad-bot40">
        <h4 class="color-white pad-top50">A felicidade que você procurava!!</h4>
        <p class="color-white">Nós da Corpo em Movimento junto de profissionais da área fizemos um levantamento e descobrimos que pessoas com estilos de vida saudavél são mais felizes! Sim, mais felizes, poís
        isso não afeta apenas seu corpo, e sim seu estado por um completo, você terá um melhor aproventamento do seu dia, mais energia nas suas tarefas e claro, uma auto estima melhor, não perca tempo
        se junte a nós nessa caminhada.</p>
      </div>
    </div>
  </section>
 

  

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p>O que nosso projeto vai lhe Proporciona.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn-theme btn-small" data-filter="*">Todas</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Vida</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Trabalho</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".print">Liberdade</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                    <img src="img/portfolio/1.jpg" alt="welcome" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Ligação com sua familia</a></h5>
                      <a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/2.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Mais vontade</a></h5>
                      <a href="img/portfolio/2.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="img/portfolio/4.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Esportes</a></h5>
                      <a href="img/portfolio/4.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/6.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Saúde</a></h5>
                      <a href="img/portfolio/6.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/8.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Desempenho</a></h5>
                      <a href="img/portfolio/8.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
  <!--  -->
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
