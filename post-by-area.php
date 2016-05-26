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
</head>
<body>
	<div id="main" ng-app="app">
		
		<?php include 'layouts/cabecera.php' ?>
		<main class="cd-main-content" ng-controller="postsAreaController">
			<div class="col-md-9" style="margin-bottom:25px;overflow: hidden;">
				<div class="col-md-12" style="margin-top:30px;">					
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-bottom: 50px;">
                        <img src="<?php echo $baseurl?>dist/img2/banners/<?php echo $_GET['id']; ?>.jpg" class="img-responsive" alt="<?php echo $_GET['id']; ?> SGTEL">    
                  </div>
	                   	<div class="col-md-12" ng-repeat="related in relateds" style="padding-bottom: 20px;">
	                   	 	<a class="post_item" href="<?php echo $baseurl ?>novedades/{{related.url_web}}-{{related.codpost}}">
	                   	 	<div class="col-md-8">
	                   	 		<p class="titpost2">{{related.title}}</p>
	                   	 		<div class="summary" ng-bind-html-unsafe="related.summary"></div>
	                   	 	</div>
	                   	 	<div class="col-md-4">
	                   	 		<img class="img-responsive"
	                   	 		ng-src="<?php echo $baseurl?>admin/public/dist/img/posts/{{related.path_url}}" alt="">
	                   	 	</div>
	                   	 	</a>
	                   	 	<div class="col-md-12">
	                   	 		<hr class="hr_post">
	                   	 		<p class="nom_author">{{related.author}}</p>
	                   	 		<div class="calen_post">
	                   	 			<i class="fa fa-calendar-check-o"></i>
	                   	 			{{related.fech_create}}
	                   	 		</div>
	                   	 	</div>
	                   	</div>
		            </div>
				</div>
			</div>
			<!-- seccion novedades -->
                <?php
                include 'layouts/suscribe.php'; 
                ?>
            <!-- fin --> 			<?php include 'layouts/footer.php' ?>

		</main>
		<nav class="cd-nav">
      <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li><a href="<?php echo $baseurl ?>">INICIO</a></li>
        <li><a href="<?php echo $baseurl ?>acerca-sgtel">ACERCA DE SGTEL</a></li>

        <li class="has-children">
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
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/post_controller.js"></script>
    <script src="<?php echo $baseurl;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/main.js"></script>
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
    <?php include 'layouts/chat.php'; ?>
</body>
</html>