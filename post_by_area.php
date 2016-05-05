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
		
		<header class="cd-main-header">
			<header class="cabecera">
				<div class="row">
					<div class="col-md-1 pull-left">
						<a href="./"><img class="headlogo" src="<?php echo $baseurl;?>dist/img2/logo.png" alt="logo sgtel"></a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-5 hidden-xs pull-right">
						<ul class="listdate">
							<li>Av. Nicolas Arriola 290 Oficina 311.</li>
							<li>(+51 1) 340 - 3401</li>
						</ul>
					</div>
					<div class="col-md-2 pull-right">
						<ul class="listredes">
							<li class="fb">
								<a href="https://www.facebook.com/SgtelSac/info/?tab=overview" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="tw">
								<a href="https://www.facebook.com/SgtelSac/info/?tab=overview" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="ln">
								<a href="https://www.linkedin.com/company/sgtel-sac" target="_blank">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>				
				</div>
			</header>
		

		<ul class="cd-header-buttons">
			<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
		</ul>
		</header>
		<main class="cd-main-content" ng-controller="postsAreaController">
			<div class="col-md-9" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;">
				<div class="col-md-12" style="margin-top:55px;">					
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		            	<div class="subti3">
		            		<p class="titsec">{{cate}}</p>
		            	</div>
	                   <div class="col-md-12" ng-repeat="related in relateds">
	                   	 <p class="titpost">{{relateds.title}}</p>
	                   	 <div class="col-md-6"></div>
	                   	 <div class="col-md-4"></div>
	                   </div> 
		            </div>            
				</div>
			</div>
			<!-- seccion novedades -->
                <?php
                include 'layouts/postArea_novedades.php'; 
                ?>
            <!-- fin --> 			<div class="col-md-12" style="padding: 0;">
				<div id="footer">
	                <div class="container">
	                    <div class="col-md-1"></div>
	                    <div class="col-md-4">Av. Nicolas Arriola 290 Oficina 311.</div>
	                    <div class="col-md-2"> (+51 1) 340 - 3401</div>
	                    <div class="col-md-4">© 2016. Todos los Derechos Reservados</div>
	                </div>  
	            </div>
			</div>

		</main>
		<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li><a href="<?php echo $baseurl?>">INICIO</a></li>
			<li><a href="<?php echo $baseurl?>acerca_sgtel">ACERCA DE SGTEL</a></li>

			<li class="has-children">
                <a>ÁREAS DE NEGOCIO </a>

                <ul class="cd-nav-icons is-hidden">
                    <li class="go-back"><a href="#0">Volver</a></li>
                    <li>
                        <a class="cd-nav-item " href="<?php echo $baseurl?>areas_negocio/infraestructura">
                            Infraestructura
                            <p></p>
                        </a>
                    </li>

                    <li>
                        <a class="cd-nav-item " href="<?php echo $baseurl?>areas_negocio/soluciones_moviles">
                            Soluciones Móviles
                            <p></p>
                        </a>
                    </li>

                    <li>
                        <a class="cd-nav-item " href="<?php echo $baseurl?>areas_negocio/consultoria_emprendimiento">
                            Consultoría y Emprendimiento
                            <p></p>
                        </a>
                    </li>
                </ul>
            </li>

			<li class="has-children">
				<a>NOVEDADES</a>
				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Volver</a></li>
					<li>
						<a class="cd-nav-item" href="<?php echo $baseurl ?>news/category/infraestructura">
							Infraestructura
							<p></p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php echo $baseurl ?>news/category/soluciones_moviles">
							Soluciones Móviles
							<p></p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php echo $baseurl ?>news/category/consultoria_emprendimiento">
							Consultoría y Emprendimiento
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
    <script src="<?php echo $baseurl;?>bower_components/angular/angular.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/post_controller.js"></script>
    <script src="<?php echo $baseurl;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/jquery.mobile.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/main.js"></script> <!-- Resource jQuery -->
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/areas.js"></script>
	<!-- Include js plugin -->
    <script src="<?php echo $baseurl;?>dist/carousel/owl.carousel.js"></script>
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
    <script type="text/javascript">
        $(document).ready(function() {
            
  
            });
    </script>
</body>
</html>