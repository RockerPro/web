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
    <meta property="og:image" content="http://sgtel.pe/dist/img2/logo.png">
    <meta property="og:title" content="SGTEL | sgtel.pe">
    <meta property="og:description" content="Trabajamos en el desarrollo de mejores sistemas, diseño e instalaciones. Planificamos, organizamos, realizamos y controlamos las instalaciones de sistemas de telecomunicaciones. La unidad de desarrollo de aplicaciones se encuentra conformada por un equipo multidisciplinario de profesionales del más alto nivel, gracias a esto nuestros clientes poseen una gran ventaja en relación a la competencia.">
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="<?php echo $ruta; ?>"> -->
    <link rel="canonical" href="<?php echo $ruta; ?>" />
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
		            	<div class="row">
	                   	 		<div class="fb-comments" data-href="<?php echo $baseurl ?>novedades/<?php echo $_GET['id']; ?>" data-width="100%" data-numposts="5"></div>
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
			<?php include 'layouts/footer.php' ?>

		</main>
		<nav class="cd-nav">
			<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
				<li><a href="<?php echo $baseurl ?>">INICIO</a></li>
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
					<a class="selected">NOVEDADES</a>
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
    <?php include 'layouts/chat.php'; ?>
</body>
</html>