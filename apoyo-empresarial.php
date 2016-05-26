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
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/bootstrap.css">
	<link rel="shortcut icon" href="<?php echo $baseurl;?>dist/img2/icono.png">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/estilos.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/style.css">    
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/animate.css">
	<link rel="stylesheet" href="<?php echo $baseurl;?>bower_components/components-font-awesome/css/font-awesome.min.css">
	<!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.theme.css">
</head>
<body>
	<div id="main" ng-app="app">
		
		<?php include 'layouts/cabecera.php' ?>
		<main class="cd-main-content">
			<div class="col-md-9" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;">
				<div class="col-md-12">					
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		            	<div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 0px;">
                        <img src="<?php echo $baseurl?>dist/img2/banners/banner-6.jpg" class="img-responsive" alt="TECNOLOGIA SGTEL">    
                  </div>
		            	<p class="conttext2 wow fadeInUp" data-wow-delay="0.9s">
                    <!-- SGTEL busca ayudar a empresas y personas emprendedoras que desean desarrollar y o 
                    formular proyectos, garantizándoles una inversión bien planeada, estructurada y 
                    rentable. Para ello es muy importante que en el proceso de la consultoría, sean 
                    formulados estudios de pre inversión, así como también se debe realizar los 
                    correspondientes expedientes técnicos de proyectos que se presenten.    -->
                    En SGTEL, contamos con un equipo especializado de profesionales para brindarte  el 
                    apoyo necesario para solucionar problemas y desarrollar mejoras en los puntos críticos 
                    dentro de tus procesos. Además, te guiamos en la implementación de estas soluciones 
                    y en la supervisión de las mismas. 
                  </p>
                  <div class="col-md-12">
                    <div class="col-md-5">
                      <!-- <div class="contvalor wow zoomIn" data-wow-delay="1.2s">
                        <p class="how">Lorem ipsum dolor</p>
                      </div>  --> 
                       <p class="conttext2 wow fadeInUp" data-wow-delay="1.5s" style="font-style: italic;font-size: 18px;margin-top: 60px;">
                      “La planificación a largo plazo no es pensar en decisiones

                        futuras , sino en el futuro de las decisiones presentes”  <br>

                                              <l style="float:right;">(Peter Drucker)</l></p>
                    </div>
                    <div class="col-md-7 wow zoomIn" data-wow-delay="1.8s">
                      <img class="img-responsive inboud" 
                      src="<?php echo $baseurl?>dist/img2/consultoria.png" 
                      alt="con sgtel enamora a los clientes">
                    </div>
                  </div>
		            </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="emprendimiento">
                  <div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 0px;">
                        <img src="<?php echo $baseurl?>dist/img2/banners/banner-12.jpg" class="img-responsive" alt="TECNOLOGIA SGTEL">    
                  </div>
                  <p class="conttext2 wow fadeInUp" data-wow-delay="0.9s">
                    En SGTEL tenemos muy claro que para que la sociedad se desarrolle se necesita de ideas 
                    disruptivas que se puedan llevar a cabo, para ello es necesario un socio inversor que 
                    permita aterrizar las ideas en innovación para que estas se desarrollen. Por esta razón 
                    GTEL, financia a cualquier emprendedor que desarrolle proyectos innovadores con un 
                    impacto económico y social.
                  </p>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="contvalor wow zoomIn" data-wow-delay="1.2s">
                        <p class="how">Nuestro apoyo:</p>
                      </div>
                       <ul class="conttext2 wow fadeInUp" data-wow-delay="0.9s" style="padding-left:20px;">
                        <li>Desarrollamos los prototipos de tus inventos o productos tecnológicos</li>
                        <li>Te guiamos en el desarrollo de tus proyectos de impacto social</li>
                        <!-- <li>Desarrollo de productos o servicios de impacto social</li>
                        <li>Aceleradora de proyectos </li> -->
                       </ul>
                    </div>
                    <div class="col-md-6 wow zoomIn" data-wow-delay="1.8s">
                      <img class="img-responsive inboud" 
                      src="<?php echo $baseurl?>dist/img2/emprendimiento.png" 
                      alt="con sgtel enamora a los clientes">
                    </div>
                  </div>
                </div>             
				</div>
				<div class="col-md-12 contcli">
                                <div class="wow zoomIn" data-wow-delay="1.2s">
                                <p class="titsec" style="width:250px;">CLIENTES</p>
                               	<div class="divider divider_gray ">
                               		<span></span><span></span>
                               	</div>
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
                include 'layouts/postArea_novedades.php'; 
                ?>
            <!-- fin -->  			
			<?php include 'layouts/footer.php' ?>

		</main>
		<nav class="cd-nav">
      <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li><a href="<?php echo $baseurl ?>">INICIO</a></li>
        <li><a href="<?php echo $baseurl ?>acerca-sgtel">ACERCA DE SGTEL</a></li>

        <li class="has-children">
          <a class="selected">ÁREAS DE NEGOCIO </a>

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
              <!-- movil-->         
              <ul class="is-hidden visible-md visible-sm visible-xs" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li class="has-children">
                  <a href="#0">Software</a>
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
              <!-- escritorio-->
              <ul class="is-hidden visible-lg" style="padding-left: 10px;">
                <li class="go-back"><a href="#0">Volver</a></li>
                <li class="">
                  <a  class="nocur">Software</a>
                  <ul class="">
                    <li><a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles">Empresa y Gobierno</a></li>
                    <li><a href="<?php echo $baseurl ?>areas-negocio/software-para-soluciones-moviles#pymes">PyMEs</a></li>
                  </ul>
                </li>
                <li class="">
                  <a  class="nocur">Social Media</a>
                  <ul class="">
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
  <script type="text/javascript" src="<?php echo $baseurl;?>dist/js/areas.js"></script>
	<!-- Include js plugin -->
    <script src="<?php echo $baseurl;?>dist/carousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
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
        new WOW().init();
            });
    </script>
    <script src="<?php echo $baseurl;?>dist/js/wow.min.js"></script>
    <?php include 'layouts/chat.php'; ?>
</body>
</html>