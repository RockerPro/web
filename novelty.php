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
    <meta name="image" content="http://sgtel.pe/dist/img2/logo.png">
    <meta property="og:image" content="http://sgtel.pe/dist/img/logo.png">
    <meta property="og:title" content="SGTEL | sgtel.pe">
    <meta property="og:description" content="Trabajamos en el desarrollo de mejores sistemas, diseño e instalaciones. Planificamos, organizamos, realizamos y controlamos las instalaciones de sistemas de telecomunicaciones. La unidad de desarrollo de aplicaciones se encuentra conformada por un equipo multidisciplinario de profesionales del más alto nivel, gracias a esto nuestros clientes poseen una gran ventaja en relación a la competencia.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://sgtel.pe/novelty/10-palabras-que-no-debes-incluir-en-linkedin-pt0001">
    <link rel="canonical" href="http://sgtel.pe/novelty/10-palabras-que-no-debes-incluir-en-linkedin-pt0001" />
    <meta property="og:site_name" content="SGTEL">
    <title>SGTEL</title>
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/bootstrap.css">
	<link rel="shortcut icon" href="<?php echo $baseurl;?>dist/img2/icono.png">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/estilos.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/style.css">
	<link rel="stylesheet" href="<?php echo $baseurl;?>bower_components/components-font-awesome/css/font-awesome.min.css">
	<?php include 'layouts/redes_sociales.php'; ?>
</head>
<body ng-app="app">
	<div id="main"  ng-controller="postController">
		
		<?php include 'layouts/cabecera.php' ?>		
		<main class="cd-main-content">
			<div class="col-md-9"   style="margin-bottom:25px;overflow: hidden;{{view}}">
				<div class="col-md-12" style="margin-top:55px;">
					<img class="imgpost" 
					ng-src="<?php echo $baseurl?>admin/public/dist/img/posts/{{item.path_url}}"
					alt="{{item.title}}">					
					<div class="white-tit">
						<p class="titpost">{{item.title}}</p>
					</div>
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right: 0;">
		            	<hr>
		            	<div class="autor col-md-6">
		            		<img class="img-circle img-autor" ng-src="<?php echo $baseurl?>dist/img2/line-icon-1.png" 
		            		alt="icono autor">
		            		<p class="nom-autor">{{item.author}}</p>
		            	</div>
		            	<div class="fecha_post col-md-6">
		            		<p class="pull-right">
		            			<i class="fa fa-calendar-check-o"></i>
		            			{{item.fech_create}}
		            		</p>
		            	</div>
		            	<div class="post-cont row">
		            		<div ng-bind-html-unsafe="item.content"></div>
		            	</div>
		            	<div class="col-md-12">
	                   	 		<div class="fb-comments" data-href="<?php echo $baseurl ?>novelty/<?php echo $_GET['id']; ?>" data-width="100%" data-numposts="5"></div>
	                   	 	</div>
		            </div>
				</div>
			</div>
			<div class="col-md-12"   style="margin-bottom:25px;overflow: hidden;{{error}}">
				<div class="col-md-12" style="margin-top:55px;">
					<h1 align="center">404! Pagina no encontrada.</h1>
					<img style="margin:0 auto;" src="<?php echo $baseurl?>dist/img2/404.png" alt="img 404" class="img-responsive">
					<p align="center"><a class="btn btn-success" href="javascript:history.back(-1);" title="Ir la página anterior">
					<i class="fa fa-chevron-left"></i> Volver</a>
					</p>
				</div>
			</div>
			
			<!-- seccion novedades -->
				<?php
				include 'layouts/related_novedades.php'; 
				?>
			<!-- fin -->		
			<div class="col-md-12" style="padding: 0;">
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

			<li><a href="<?php echo $baseurl?>contactenos">CONTÁCTENOS</a></li>
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->
		
		
	</div> 

    <script src="<?php echo $baseurl;?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/post_controller.js"></script>
    <script src="<?php echo $baseurl;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/jquery.mobile.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/main.js"></script> <!-- Resource jQuery -->
    <?php include 'layouts/chat.php'; ?>
</body>
</html>