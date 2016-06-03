<?php
include 'app.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trabajamos en el desarrollo de mejores sistemas, diseño e instalaciones. Planificamos, organizamos, realizamos y controlamos las instalaciones de sistemas de telecomunicaciones. La unidad de desarrollo de aplicaciones se encuentra conformada por un equipo multidisciplinario de profesionales del más alto nivel, gracias a esto nuestros clientes poseen una gran ventaja en relación a la competencia." />
    <meta name="google" content="notranslate" />
    <meta name="keywords" content="INFRAESTRUCTURA, SOLUCIONES MOVILES,CONSULTORIA Y EMPRENDIMIENTO, COMUNICACIONES">
    <meta name="author" content="Cristians Bregante">
    <meta name="image" content="http://sgtel.pe/dist/img/logo.png">
    <meta property="og:image" content="http://sgtel.pe/dist/img/logo.png">
    <meta property="og:title" content="SGTEL | sgtel.pe">
    <meta property="og:description" content="Trabajamos en el desarrollo de mejores sistemas, diseño e instalaciones. Planificamos, organizamos, realizamos y controlamos las instalaciones de sistemas de telecomunicaciones. La unidad de desarrollo de aplicaciones se encuentra conformada por un equipo multidisciplinario de profesionales del más alto nivel, gracias a esto nuestros clientes poseen una gran ventaja en relación a la competencia.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.sgtel.com">
    <meta property="og:site_name" content="SGTEL">
    <title>SGTEL</title>
        <!-- slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>dist/slider/css/navstylechange.css" media="screen" />
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>dist/slider/css/settings.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>dist/slider/css/style.css" media="screen" />
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/bootstrap.css">
	<link rel="shortcut icon" href="<?php echo $baseurl;?>dist/img2/icono.png">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/estilos.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/style.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/style3.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/animate.css">
	<link rel="stylesheet" href="bower_components/components-font-awesome/css/font-awesome.min.css">
	<!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.theme.css">
</head>
<?php flush(); ?>
<body ng-app="app">
	<div id="main">
<?php include 'layouts/cabecera.php'; ?>
    <?php include 'layouts/slider.php'; ?> 
<main class="cd-main-content">	
	<div class="col-md-12" style="margin-top:25px;">
	<div class="col-md-9">
  <div class="tres">
    <ul class="ch-grid">
      	<li>
          <a href="<?php echo $baseurl?>areas-negocio/infraestructura">
          	<div class="ch-item ch-img-1  wow bounceIn" data-wow-delay="0.3s">
            <div class="ch-info">
            	<h3>VER MÁS</h3>
            </div>
          	</div>
          </a>
          <div class="ball-tit btt1 wow zoomIn" data-wow-delay="0.5s">
            <p style="margin-top: 7px;">INFRAESTRUCTURA</p>
          </div>
      	</li>
      	<li>
          <a href="<?php echo $baseurl?>areas-negocio/software-para-soluciones-moviles">
          	<div class="ch-item ch-img-2  wow bounceIn" data-wow-delay="0.7s">
            <div class="ch-info">
            	<h3>VER MÁS</h3>
            </div>
          	</div>
          </a>
          <div class="ball-tit btt2 wow zoomIn" data-wow-delay="0.9s">
            <p>
            SOLUCIONES TECNOLÓGICAS
            </p>
          </div>
      	</li>
      	<li>
          <a href="<?php echo $baseurl?>areas-negocio/apoyo-empresarial">
          	<div class="ch-item ch-img-3  wow bounceIn" data-wow-delay="1.1s">
            <div class="ch-info">
            	<h3>VER MÁS</h3>
            </div>
          	</div>
          </a>
          <div class="ball-tit btt3 wow zoomIn" data-wow-delay="1.3s">
            <p>
              CONSULTORÍA Y EMPRENDIMIENTO
            </p>
          </div>
      	</li>
    </ul>
  </div>
<div class="col-md-12 contcli">
                               <p class="titsec" style="width: 280px;">NUESTROS CLIENTES</p>
                               <div class="divider divider_gray ">
                               </div>
                               <br><br>
                              <div id="owl-demo" class="col-md-12 owl-carousel owl-theme owl-loaded">
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/alicorp.png" alt="cliente1">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/backus.png" alt="cliente2">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/bbva.png" alt="cliente3">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/chinalco.png" alt="cliente4">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/claro.png" alt="cliente5">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/clinicaanglo.png" alt="cliente6">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/cobra.png" alt="cliente7">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/contugas.png" alt="cliente8">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/emerson.png" alt="cliente9">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/ericsson.png" alt="cliente10">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/grana_montero.png" alt="cliente11">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/grupo_romero.png" alt="cliente12">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/ministerio.png" alt="cliente13">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/onp.png" alt="cliente14">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/reniec.png" alt="cliente15">
                                      </div>
                                      <div class="item visible-md">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/toyota.png" alt="cliente17">
                                      </div>
                                      <div class="item">
                                      <img class="lazyOwl client" data-src="<?php echo $baseurl;?>dist/img2/clients/xerox.png" alt="cliente18">
                                      </div>
                              </div>                              
                           </div>
	</div>
	<!-- seccion novedades -->
<?php
include 'layouts/sec_novedades.php'; 
?>
	<!-- fin -->
</div>
<div class="col-md-12" style="padding: 0;">
	<?php include 'layouts/footer.php' ?>
</div>
</main>
<nav class="cd-nav">
      <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li><a class="selected" href="<?php echo $baseurl ?>">INICIO</a></li>
        <li><a href="<?php echo $baseurl ?>acerca-sgtel">ACERCA DE SGTEL</a></li>

        <!-- escritorio-->
        <li class="has-children visible-lg">
          <a>ÁREAS DE NEGOCIO </a>

          <ul class="cd-secondary-nav is-hidden">
            <li class="go-back"><a href="#0">Volver</a></li>
            <li  class="has-children">
              <a href="<?php echo $baseurl ?>areas-negocio/infraestructura">
                Infraestructura
                <p></p>
              </a>            
              <ul class="is-hidden" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/infraestructura">Tecnología</a>
                </li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/infraestructura#telecomunicaciones">Telecomunicaciones</a>
                </li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/infraestructura#energia">Energía y obra civil</a>
                </li>
              </ul>
            </li>

            <li  class="has-children">
              <a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles">
                Soluciones Tecnológicas
              </a>
              <ul class="is-hidden" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li class="">
                  <a  href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles">Software</a>
                  <ul class="">
                    <li><a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles">Empresa y Gobierno</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles#pymes">PyMEs</a></li>
                  </ul>
                </li>
                <li class="">
                  <a  href="<?php echo $baseurl ?>areas-negocio/social-media">Social Media</a>
                  <ul class="">
                    <li><a href="<?php echo $baseurl ?>areas-negocio/social-media">Marketing Digital</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/social-media#ecommerce">eCommerce</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a href="<?php echo $baseurl ?>areas-negocio/apoyo-empresarial" class="cd-nav-item">
                APOYO EMPRESARIAL
                <p></p>
              </a>
              <ul class="is-hidden" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/apoyo-empresarial">Consultoría</a>
                </li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/apoyo-empresarial#emprendimiento">Emprendimiento</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- movil-->
        <li class="has-children visible-md visible-sm visible-xs">
          <a>ÁREAS DE NEGOCIO </a>

          <ul class="cd-secondary-nav is-hidden">
            <li class="go-back"><a href="#0">Volver</a></li>
            <li  class="has-children">
              <a class="nocur">
                Infraestructura
                <p></p>
              </a>            
              <ul class="is-hidden" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/infraestructura">Tecnología</a>
                </li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/infraestructura#telecomunicaciones">Telecomunicaciones</a>
                </li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/infraestructura#energia">Energía y obra civil</a>
                </li>
              </ul>
            </li>

            <li  class="has-children">
              <a class="nocur">
                Soluciones Tecnológicas
              </a>          
              <ul class="is-hidden" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li class="has-children">
                  <a href="#0">Softwware</a>
                  <ul class="cd-primary-nav is-hidden">
                    <li class="go-back"><a href="#0">Volver</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles">Empresa y Gobierno</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles#pymes">PyMEs</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#0">Social Media</a>
                  <ul class="cd-primary-nav is-hidden">
                    <li class="go-back"><a href="#0">Volver</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/social-media">Marketing Digital</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/social-media#ecommerce">eCommerce</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a class="cd-nav-item nocur">
                APOYO EMPRESARIAL
                <p></p>
              </a>
              <ul class="is-hidden" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/apoyo-empresarial">Consultoría</a>
                </li>
                <li>
                  <a href="<?php echo $baseurl ?>areas-negocio/apoyo-empresarial#emprendimiento">Emprendimiento</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-children">
          <a>NOVEDADES</a>
          <ul class="cd-nav-icons is-hidden" style="padding-left: 0px;">
            <li class="go-back"><a href="#0">Volver</a></li>
            <li>
              <a class="cd-nav-item" href="<?php echo $baseurl ?>noticias/categoria/infraestructura">
                Infraestructura
                <p></p>
              </a>
            </li>

            <li  >
              <a class="cd-nav-item" href="<?php echo $baseurl ?>noticias/categoria/soluciones-tecnologicas">
                Soluciones Tecnológicas
                <p></p>
              </a>
            </li>

            <li style="list-style:none;">
              <a  class="cd-nav-item" href="<?php echo $baseurl ?>noticias/categoria/apoyo-empresarial">
                APOYO EMPRESARIAL
                <p></p>
              </a>
            </li>
          </ul>
        </li>

        <li><a href="<?php echo $baseurl ?>contactenos">CONTÁCTENOS</a></li>
      </ul> <!-- primary-nav -->
    </nav> <!-- cd-nav -->
	</div>
    <script src="<?php echo $baseurl;?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $baseurl;?>bower_components/angular/angular.min.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/post_controller.js"></script>
    <script src="<?php echo $baseurl;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/main.js"></script>
	<!-- Include js plugin -->
    <script src="<?php echo $baseurl;?>dist/carousel/owl.carousel.min.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/wow.min.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="<?php echo $baseurl;?>dist/slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl;?>dist/slider/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript">
    	var revapi;
        $(document).ready(function() {
            /*slider clientes*/
 $("#owl-demo").owlCarousel({
          items : 4,
          itemsDesktop : [1000,4], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,4], // betweem 900px and 668px
          itemsTablet: [668,3], //2 items between 668 and 0
          itemsMobile : [540,2], // 2 items between 540 and 0
          lazyLoad : true,
          loop:true,
          autoplayTimeout:2000,
          autoPlay : true,
          margin:10,
          slideSpeed: 2000, 
          autoPlay: 2000,
          stopOnHover : true,
          pagination : true,
          responsive: true,
          responsiveRefreshRate: 200,
        }); 
//slider
revapi = jQuery('.tp-banner').revolution(
{
	delay:9000,
            startwidth:1170,
            startheight:500,
            fullScreen:"on",
            forceFullWidth:"on",
            minFullScreenHeight:"320",
            fullScreenOffsetContainer: "header"
});  
            });
        new WOW().init();
    </script>
<?php include 'layouts/chat.php'; ?>
</body>
</html>