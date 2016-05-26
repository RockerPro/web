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
	<link rel="stylesheet" href="<?php echo $baseurl;?>bower_components/components-font-awesome/css/font-awesome.min.css">
	<!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.theme.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/animate.css">
</head>
<body>
	<div id="main" ng-app="app">
		
		<?php include 'layouts/cabecera.php' ?>
		<main class="cd-main-content">
			<div class="col-md-9" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;">
				<div class="col-md-12">					
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    		            	<div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 0px;">
                        <img src="<?php echo $baseurl?>dist/img2/banners/banner4.jpg" class="img-responsive" alt="TECNOLOGIA SGTEL">    
                      </div>
	                    <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                                   <ul  class="textarea listaserv">
                                     <li class="itemm3" data-cont="s1" style="color:white;background:#0082c4;"><i class="fa fa-circle punto"></i>Desarrollo de aplicaciones para dispositivos móviles</li>
                                     <li class="itemm3" data-cont="s2"><i class="fa fa-circle punto"></i>Desarrollo de software a medida</li>
                                     <li class="itemm3" data-cont="s3"><i class="fa fa-circle punto"></i>Desarrollo de proyectos de impacto social</li>
                                   </ul>
                                   <br><br>
                               </div>
                               <div class="col-md-6 wow fadeInRight" data-wow-delay="0.9s">
                                    <div class="hidee3" id="s1">
                                        Desarrollamos soluciones y servicios que incluyen el uso de aplicaciones para teléfonos inteligentes. Somos expertos en tecnologías de geolocalización, conectividad y sensado. Desarrollamos aplicaciones para Android y iOS. Todos nuestros desarrollos se apoyan en la plataforma SGTEL Cloud.
                                    </div>
                                    <div class="hidee3" id="s2">
                                        Porqué conocemos todos tus proceso, nos involucramos en ellos y te damos
                                        las mejores soluciones para sobrepasar tus expectativas. <br>
                                        Hemos desarrollado proyectos que gestionan de una manera eficiente, rápida y 
                                        sencilla áreas como: <br><br>
                                        <ul>
                                          <li>Impacto Ambiental</li>
                                          <li>Patrimonio</li>
                                          <li>Educación</li>
                                          <li>Logística</li>
                                          <li>Evaluación Crediticia</li>
                                          <li>Contenidos</li>
                                        </ul>  
                                    </div>
                                    <div class="hidee3" id="s3">
                                        Desarrollamos plataformas novedosas apoyando a la sociedad a minimizar los riesgos en desastres naturales, inseguridad ciudadana, transporte, etc.
                                    </div>
                               </div>                    
		            </div>
		           	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  						    <div class="contcli wow zoomIn" data-wow-delay="1.2s">
  		            		<p class="titsec" style="width:200px;">SOLUCIONES</p>
  			                <div class="divider divider_gray ">
  			                    <span></span><span></span>
  			                </div>
  		            </div>
		            	<div class="row">
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
		            			<a href="<?php echo $baseurl ?>app/seci">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b1.png" alt="app">
                      </a>
		            		</div>
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
		            			<a href="<?php echo $baseurl ?>app/encuestas">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b2.png" alt="app">
                      </a>
		            		</div>
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="0.9s">
		            			<a href="<?php echo $baseurl ?>app/iris-gps">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b3.png" alt="app">
                      </a>
		            		</div>
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="1.2s">
		            			<a href="<?php echo $baseurl ?>app/gestor-comercial">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b4.png" alt="app">
                      </a>
		            		</div>
                    <div class="col-md-1 col-xs-3 wow fadeIn" data-wow-delay="0.3s"></div>
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="1.5s">
		            			<a href="<?php echo $baseurl ?>app/medidor">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b5.png" alt="app">
                      </a>
		            		</div>
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="1.8s">
		            			<a href="<?php echo $baseurl ?>app/soluciona">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b6.png" alt="app">
                      </a>
		            		</div>
		            		<div class="col-md-3 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="2.1s">
		            			<a href="<?php echo $baseurl ?>app/contugas">
                        <img class="img-responsive imgapp" src="<?php echo $baseurl;?>dist/img2/soluciones/b7.png" alt="app">
                      </a>
		            		</div>                 
		            	</div>
		           	</div>	
                <div id="pymes" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:50px;">
                  <div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 0px;">
                        <img src="<?php echo $baseurl?>dist/img2/banners/banner-5.jpg" class="img-responsive" alt="TECNOLOGIA SGTEL">    
                      </div> 
                  <div class="col-md-12 wow fadeIn" data-wow-delay="0.6s" >
                    <p class="conttext2">
                      Que la tecnología sea su aliado para crecer. <br><br>

                      En SGTEL, hemos desarrollado un conjunto de soluciones móviles adaptadas a solucionar 
                      problemas de gestión para el sector que más crece en nuestro país las MYPES. 
                      En este sentido hemos desarrollado herramientas que le permitirán: Aumentar su 
                      productividad, mediante la automatización de sus procesos, Reducir sus costos, 
                      simplifique las tareas manuales y gestiónelo de manera más eficiente. Todo ello 
                      le permitirá hacer crecer su negocio y ser un empresario más competitivo. <br><br>
                      Todas estas soluciones se pueden adaptar a sus necesidades y requerimientos.
                    </p>
                    <br>
                    <br>
                    <br>
                  </div>
                  <div class="col-md-12">
                  <div class="contcli wow zoomIn" data-wow-delay="1.2s"  style="margin-top: 50px;">
                      <p class="titsec" style="width:250px;">SOLUCIONES CRECE PyMEs</p>
                        <div class="divider divider_gray ">
                            <span></span><span></span>
                        </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="0.3s">
                      <a >
                        <img class="img-responsive imgapp"  data-toggle="modal" data-target="#myModal"
                        src="<?php echo $baseurl;?>dist/img2/pymes/security.png" alt="app SGTEL para pymes">
                      </a>
                    </div>
                    <div class="col-md-4 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                      <a >
                        <img class="img-responsive imgapp"  data-toggle="modal" data-target="#myModa2"
                        src="<?php echo $baseurl;?>dist/img2/pymes/encuestas.png" alt="app SGTEL para pymes">
                      </a>
                    </div>
                    <div class="col-md-4 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="0.9s">
                      <a>
                        <img class="img-responsive imgapp"  data-toggle="modal" data-target="#myModa3"
                        src="<?php echo $baseurl;?>dist/img2/pymes/control.png" alt="app SGTEL para pymes">
                      </a>
                    </div>
                    <div class="col-md-4 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="1.2s">
                      <a >
                        <img class="img-responsive imgapp"  data-toggle="modal" data-target="#myModa4"
                        src="<?php echo $baseurl;?>dist/img2/pymes/personal.png" alt="app SGTEL para pymes">
                      </a>
                    </div>
                    <div class="col-md-4 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="1.5s">
                      <a >
                        <img class="img-responsive imgapp"  data-toggle="modal" data-target="#myModa5"
                        src="<?php echo $baseurl;?>dist/img2/pymes/ventas.png" alt="app SGTEL para pymes">
                      </a>
                    </div>
                    <div class="col-md-4 col-ms-6 col-xs-6 wow fadeIn" data-wow-delay="1.8s">
                      <a >
                        <img class="img-responsive imgapp"  data-toggle="modal" data-target="#myModa6"
                        src="<?php echo $baseurl;?>dist/img2/pymes/tareas.png" alt="app SGTEL para pymes">
                      </a>
                    </div>                    
                  </div>
                </div>            
				</div>
			</div>      
			<!-- seccion novedades -->
                <?php
                include 'layouts/postArea_novedades.php'; 
                ?>
            <!-- fin -->  
			<div class="col-md-12 contcli">
                     <p class="titsec" style="width:250px;">CLIENTES</p>
                               	<div class="divider divider_gray ">
                               		<span></span><span></span>
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
  <?php include 'layouts/modales.php' ?>
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
  
            });
    </script> 
         <script src="<?php echo $baseurl;?>dist/js/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <?php include 'layouts/chat.php'; ?>
</body>
</html>