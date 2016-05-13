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
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/contac.css">
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/animate.css">
	<link rel="stylesheet" href="bower_components/components-font-awesome/css/font-awesome.min.css">
	<!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/carousel/owl.theme.css">
</head>
<body>
	<div id="main">
		
		<?php include 'layouts/cabecera.php' ?>
		<main class="cd-main-content">
			<div class="col-md-12" style="overflow: hidden;">
			<div class="col-lg-6 col-md-6 col-sm-9 col-xs-12 formu">
				<div class="col-md-12">					
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		            	<div class="contvalor wow zoomIn" data-wow-delay="0.3s">
		            		<p class="titsec">¿CONVERSAMOS?</p>
			                <div class="divider divider_gray ">
			                    <span></span><span></span>
			                </div>
		            	</div>
		            	<form id="contact-form" class="formcontac" role="form" autocomplete="off">  
                                <p class="success-message">Gracias por contactarnos!</p>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 camp form__wrapper wow fadeInDown"  data-wow-delay="0.6s">
                                    <input type="text" name="name" class="form__input">
                                    <label class="form__label" for="email">
										<span class="form__label-content">Nombres</span>
									</label>
                                    <label for="contact-name"></label>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 camp form__wrapper wow fadeInDown"  data-wow-delay="0.9s">
                                    <input type="text" name="apelli" class="form__input">
                                    <label class="form__label" for="email">
										<span class="form__label-content">Apellidos</span>
									</label>
                                    <label for="contact-ape"></label>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 camp form__wrapper wow fadeInDown"  data-wow-delay="1.2s">
                                    <input maxlength="9" minlength="7" type="text" name="telf" class="form__input">
                                    <label class="form__label" for="email">
										<span class="form__label-content">Teléfono</span>
									</label>
                                    <label for="contact-telf"></label>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 camp form__wrapper wow fadeInDown"  data-wow-delay="1.5s">
                                    <input type="text" name="email" class="form__input">
                                    <label class="form__label" for="email">
										<span class="form__label-content">E-mail</span>
									</label>
                                    <label for="contact-email"></label>
                                </div>
                                <div class="form-group col-md-12 form__wrapper wow fadeInDown"  data-wow-delay="1.8s">
                                    <textarea style="resize:none;height: auto;" rows="4" name="message" class="form__input"></textarea>
                                    <label class="form__label" for="email">
										<span class="form__label-content">Mensaje</span>
									</label>
                                    <label for="contact-message"></label>
                                </div>
                                <div class="form-group wow fadeInDown"  data-wow-delay="2.1s">
                                    <button  id="send-mail" class="message-btn btnsubmit pull-right">Enviar</button>
                                </div>
                            </form>   
		            </div>            
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mapa wow fadeIn"  data-wow-delay="2.5s">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3545172555437!2d-77.01774303380458!3d-12.
				 087864986604602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c87e7ec68689%3A0x84ccb70dbbb4c820!2sAv+Nicol%C3%A1s
				 +Arriola+290%2C+La+Victoria+15034!5e0!3m2!1ses-419!2spe!4v1458335440826" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-12">
				<div class="contvalor wow fadeInDown"  data-wow-delay="0.3s">
		            		<p class="titsec">VISÍTENOS</p>
			                <div class="divider divider_gray ">
			                    <span></span><span></span>
			                </div>
		            	</div>	
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 direcc">								
				<div class="col-md-4 col-sm-4 col-ms-6 col-xs-12">
				<div class="direcciones wow fadeInDown"  data-wow-delay="0.3s">
				<h3>Perú</h3>
				<p>Av. Nicolás Arriola 290, Of. 311, <br>
				La Victoria <br>
				T. (51-1) 340 3401 <br>
				Informes: informes@sgtel.pe <br>
				www.sgtel.pe</p>
				</div>
				</div>
				<div class="col-md-4 col-sm-4 col-ms-6 col-xs-12">
				<div class="direcciones wow fadeInDown"  data-wow-delay="0.6s">
				<h3>Colombia</h3>
				<p>Carrera 106 N° 16-86, interior <br>
				2; Of. 503, Bogotá, Fortibón <br>
				Centenario <br>
				T. (57) 3133640282</p>
				</div>
				</div>
				<div class="col-xs-3 visible-xs"></div>
				<div class="col-md-4 col-sm-4 col-ms-6 col-xs-12">
				<div class="direcciones wow fadeInDown"  data-wow-delay="0.9s">
				<h3>EEUU</h3>
				<p>5551 Courtyard  <br>
				Dr. Margate FL <br>
				Zip 33063 <br>
				T. (001) - (305) 450 2570</p>
				</div>
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
				<a>ÁREAS DE NEGOCIO </a>

				<ul class="cd-nav-icons is-hidden">
					<li class="go-back"><a href="#0">Volver</a></li>
					<li>
						<a class="cd-nav-item " href="<?php echo $baseurl ?>areas-negocio/infraestructura">
							Infraestructura
							<p></p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item " href="<?php echo $baseurl ?>areas-negocio/soluciones-moviles">
							Soluciones Móviles
							<p></p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item " href="<?php echo $baseurl ?>areas-negocio/consultoria-emprendimiento">
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
						<a class="cd-nav-item" href="<?php echo $baseurl ?>noticias/categoria/infraestructura">
							Infraestructura
							<p></p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php echo $baseurl ?>noticias/categoria/soluciones-moviles">
							Soluciones Móviles
							<p></p>
						</a>
					</li>

					<li>
						<a class="cd-nav-item" href="<?php echo $baseurl ?>noticias/categoria/consultoria-emprendimiento">
							Consultoría y Emprendimiento
							<p></p>
						</a>
					</li>
				</ul>
			</li>

			<li><a class="selected" href="<?php echo $baseurl ?>contactenos">CONTÁCTENOS</a></li>
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->
		
		
	</div> 

    <script src="<?php echo $baseurl;?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $baseurl;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/main.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/sendmail.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <?php include 'layouts/chat.php'; ?>
</body>
</html>