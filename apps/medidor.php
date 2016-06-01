<?php
include '../app.php'; 
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
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/style5.css">    
    <link rel="stylesheet" href="<?php echo $baseurl;?>dist/css/animate.css">
	<link rel="stylesheet" href="<?php echo $baseurl;?>bower_components/components-font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div id="main">
		
		<?php include '../layouts/cabecera.php' ?>
		<main class="cd-main-content">

			<div class="col-md-12" style="overflow: hidden;">
			<div class="container">
			<div class="col-md-12">
      				<div class="col-md-6 contvalor wow fadeIn" data-wow-delay="0.1s">
      					<img src="<?php echo $baseurl ?>/dist/img2/apps/medidor.png" class="img-responsive"
      					style="margin:0 auto;margin-top: 30px;" alt="meididor">
      				</div>
	            <div class="col-md-6 contcli" data-wow-delay="0.3s">
                    <div class="wow fadeInUp">
                    	<p class="how" style="width:250px;">RESUMEN</p>
                    </div>                    
                    <p class="conttext2  wow fadeInUp" data-wow-delay="0.6s" style="text-align: justify;">
                    	Tener el control de tus gastos fijos ya no será un inconveniente, 
                    	pues con MEDIDOR podrás conocer en tiempo real  el consumo de tus 
                    	servicios de luz con información segmentada en horas, semanas, días y meses. <br><br>
						Para ello, se utiliza la tecnología del internet de las cosas (M2M), pues 
						mediante un dispositivo que se adhiere a los tableros de energía eléctrica 
						que utiliza wifi o GPRS se envía los datos estadísticos en tiempo real a 
						tu dispositivo móvil. 
                    </p>                                  
	            </div>
	            <div class="col-md-12 contcli" data-wow-delay="0.3s">
                    <div class="wow fadeInUp">
                    	<p class="titsec" style="width:250px;">BENEFICIOS</p>
	                    <div class="divider divider_gray ">
	                               		<span></span><span></span>
	                    </div>
                    </div>
                    	<ul class="conttext2  wow fadeInUp" data-wow-delay="0.6s">
                    		<li>Ahorra tiempo y dinero en la medición exacta de tu consumo de servicios.</li>
							<li>Medición en tiempo real.</li>
							<li>Acceso a las mediciones desde cualquier dispositivo con acceso a Internet.</li>
							<li>Reporte de consumo mensual, anual, etc</li>
							<li>Seguridad y privacidad de los datos registrado de cada cliente.</li>
							<li>Cumplimiento de la Ley de Protección de Datos Personales.</li>
						</ul><br>                                  
	            </div>			
			</div>	
			</div>					
			</div>
			<?php include '../layouts/footer.php' ?>

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
    <script src="<?php echo $baseurl;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseurl;?>dist/js/main.js"></script>
    <script src="<?php echo $baseurl;?>dist/js/wow.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <?php include '../layouts/chat.php'; ?>
</body>
</html>