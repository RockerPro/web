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
			<div class="col-md-9" style="margin-bottom:25px;overflow: hidden;">
				<div class="col-md-12" style="margin-top:55px;">          
                <div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 0px;">
                  <img src="<?php echo $baseurl?>dist/img2/banners/cabless.jpg" class="img-responsive" alt="TECNOLOGIA SGTEL">    
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                  
                              <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s" style="">
                                   <ul  class="textarea listaserv">
                                     <li class="itemm5" data-cont="t1" style="color:white;background:#0082c4;"><i class="fa fa-circle punto"></i>Fibra óptica</li>
                                     <li class="itemm5" data-cont="t2"><i class="fa fa-circle punto"></i>Cableado estructurado</li>
                                     <li class="itemm5" data-cont="t3"><i class="fa fa-circle punto"></i>Enlaces Inalámbricos</li>
                                     <li class="itemm5" data-cont="t4"><i class="fa fa-circle punto"></i>Seguridad Electrónica</li>
                                   </ul>
                                   <br><br>
                               </div>
                               <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.9s">
                                    <div class="hidee5" id="t1">
                                        Nos especializamos en la más avanzada tecnología relacionada con la conectividad, para facilitar la transmisión de datos, voz y video de alto desempeño. Como especialistas en el campo de la fibra óptica, ponemos a su disposición nuestra amplia experiencia con el fin de que usted obtenga los beneficios con soluciones de: <br><br>
                                        <ul>
                                            <li>Empalme y Fusión de Fibra Óptica</li>
                                            <li>Canalización de FO.</li>
                                            <li>Suministro de Materiales de FO.</li>
                                            <li>Suministro de Fibra Óptica. </li>
                                            <li>Mediciones y Certificaciones con equipos certificados y vigentes.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee5" id="t2">Somos certificados y homologados como integrador de soluciones de cableado 
                                        estructurado en las marcas AMP, PANDUIT, BTICINO, SYSTIMAX, FURUKAWA.
                                        Contamos con personal técnico calificado, certificado y capacitado continuamente en: <br><br>
                                        <ul>
                                            <li>Diseño e implementación de Cableado Estructurado CAT 6, 6A y 7, 7A</li>
                                            <li>Adecuaciones de Salas de comunicaciones, instalación de gabinetes, escalerillas, bandejas aéreas, 
                                            Patch Panel, Estructuras Metálicas, Canaletas y Sistemas de Aire Acondicionado.</li>
                                            <li>Diseño, Dimensionamiento e Implementación de Data Centers.</li>
                                            <li>Auditoria de Redes de Cableado Estructurado.</li>
                                            <li>Mantenimiento correctivo y preventivo.</li>
                                            <li>Certificación de Cableado con equipos FLUKE.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee5" id="t3">
                                        Interconectamos Almacenes, Oficinas, Centros de Distribución de una misma empresa, permitiendo a 
                                        sedes remotas el acceso a correo, bases de datos, internet, aplicaciones y demás herramientas que 
                                        faciliten el trabajo de sus colaboradores mediante los siguientes servicios:
                                        <ul>
                                            <li>Diseño e implementación de equipos inalámbricos externos Punto a Punto, Punto a 
                                            Multipunto (RADWIN – PROXIM).</li>
                                            <li>Diseño e implementación de equipos WIFI (ARUBA, AVAYA, CISCO).</li>
                                            <li>Suministro e Instalación de torres de Ventadas y Auto soportadas.</li>
                                            <li>Configuración de equipos.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee5" id="t4">
                                        Hemos participado en el diseño, planificación, ejecución y monitoreo de sistemas de Videovigilancia. <br><br>
                                        <ul>
                                            <li>Diseño e implementación de Salas de Video Conferencia.</li>
                                            <li>Diseño e implementación de Sistemas de Perifoneo. </li>
                                            <li>Diseño e implementación de Sistemas de Circuito Cerrado de TV (CCTV) – Sistemas de CCTV Analógico e IP.</li>
                                            <li>Consultoría.</li>
                                        </ul>
                                    </div>                                    
                               </div> 
                </div>              
        </div>
        <div class="col-md-12" style="margin-top:35px;" id="telecomunicaciones">
                <div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 35px;">
                  <img src="<?php echo $baseurl?>dist/img2/banners/banner-2.jpg" class="img-responsive" alt="COMUNICACIONES SGTEL">    
                </div>             
                <div class="col-md-12"> 
                <p class="conttex">
                    Más de 10 años de experiencia en proyectos de telecomunicaciones, contamos con personal experto en instalaciones, pruebas, configuración 
                    y comisionamiento de equipos, dentro de nuestra cartera de servicios están:
                </p> <br>            
                              <div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
                                   <ul  class="textarea listaserv">
                                     <li class="itemm" data-cont="i1" style="color:white;background:#0082c4;"><i class="fa fa-circle punto"></i>Redes de Acceso ADSL</li>
                                     <li class="itemm" data-cont="i2"><i class="fa fa-circle punto"></i>Auditoria de Instalaciones HFC</li>
                                     <li class="itemm" data-cont="i3"><i class="fa fa-circle punto"></i>Redes de Acceso Empresariales</li>
                                     <li class="itemm" data-cont="i4"><i class="fa fa-circle punto"></i>Centro de Monitoreo de FO y HFC</li>
                                     <li class="itemm" data-cont="i5"><i class="fa fa-circle punto"></i>Redes de Transporte de Radio</li>
                                     <li class="itemm" data-cont="i6"><i class="fa fa-circle punto"></i>Otros Servicios</li>
                                   </ul>
                                   <br><br>
                               </div>
                               <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.9s">
                                    <div class="hidee" id="i1">
                                        <ul>
                                            <li>Instalación, integración y puesta en funcionamiento de Redes de Acceso de BA Indoor DSLAM, GSHDSL.</li>
                                            <li>Instalación, integración y puesta en funcionamiento de Redes de BA Outdoor MSAM.</li>
                                            <li>Site survey y replanteos de Salas de Datos para instalación de líneas ADSL.</li>
                                            <li>Implementación de adecuaciones de Salas de Datos, MDF, Energía para soluciones de redes ADSL.</li>
                                            <li>Migraciones y permutaciones de circuitos de DSLAM ATM a Ethernet.</li>
                                            <li>Migración de circuitos en Plataforma Ldap y plataforma Nobill.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee" id="i2">
                                    <ul>
                                        <li>Instalación de Trobas para el servicio de HFC.</li>
                                        <li>Centralización de Sistemas HFC.</li>
                                        <li>Monitoreo de la red HFC y la red IP de acceso a Internet (end-to-end).</li>
                                        <li>Site Survey especializado de los sistemas HFC a nivel Nacional.</li>
                                        <li>Mejora de la red HFC con mejores prestaciones al cliente.</li>
                                        <li>Calibración de equipos activos de la red HFC (Troba, amplificadores, minibridger).</li>
                                        <li>Detección, diagnóstico y reporte de alertas y/o incidentes presentados dentro de la infraestructura de la red HFC.</li>
                                        <li>Reportes del estado del ruido en el retorno.</li>
                                        <li>Auditoria de Instalaciones HFC y DTH.</li>
                                    </ul>
                                    </div>
                                    <div class="hidee" id="i3">
                                        <ul>
                                            <li>Instalación e integración de Redes Newbridge.</li>
                                            <li>Instalación e integración de Redes Adtran.</li>
                                            <li>Instalación e integración de Redes Media Converter: Telco y Tmarc 250</li>
                                            <li>Implementación de soluciones Stand Alone para equipos de empresas</li>
                                            <li>Replanteo, Site Survey y adecuaciones de Salas.</li>
                                            <li>Migración de Equipos Newbridge, configuración de R5000, T5C, Tmarc 250, equipos adtran.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee" id="i4">
                                        <ul>
                                            <li>Monitoreo de Fibra de Óptica a través del Software de Supervisión: Fiber Watch, Fiber Visor, Reportes de Averías de FO, Rutinas de verificación de FO.</li>
                                            <li>Gestión de Clientes y Soporte en Intraway (Call center).</li>
                                            <li>Reportes y monitoreo en CMTS y cable módems.</li>
                                            <li>Monitoreo de la red HFC (Red Troncal y Distribución) a través del software PRTG (Cable Módems).</li>
                                            <li>Monitoreo de las trobas, transmisores ópticos, receptores ópticos y amplificadores de la red HFC a través del software de supervisión NMX.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee" id="i5">
                                        <ul>
                                            <li>Estudio de Campo y Replanteo.</li>
                                            <li>Instalación, energización, configuración e integración de equipos de Radio y Antenas.</li>
                                            <li>Instalación de Enlaces Microondas 1+0. 1+1, 2+1,3+1. Montaje de Antenas y Soportes.</li>
                                            <li>Configuración y/o provisión de circuitos de extremo a extremo.</li>
                                            <li>Replanteo de un radioenlace operativo, configuración, frecuencia de RF, altura, azimuth, diámetro y polarización de antenas.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee" id="i6">
                                        <ul>
                                            <li>Instalación de Redes IPVPN – MPLS para servicio a Empresas. </li>
                                            <li>Instalación y migración de enlaces E1s, E3, STM1, STM 16, STM 64, configuración de radio enlaces Huawei, Ceragon, Siae.  </li>
                                            <li>Instalación y configuración de equipos DWDM Huawei, ZTE. </li>
                                            <li>Instalación y configuración de equipos Tellabs 8660, 8630, 8611, 8609, 8607.  </li>
                                            <li>Instalación de Sistemas radiantes de Acceso para el servicio de Celular 2G, 3G, 4G (LTE).</li>
                                            <li>Proyectos de planta Externa y Planta Externa.</li>
                                            <li>Implementación y diseño de BTS, obras civiles, adecuaciones de sala. </li>
                                        </ul>
                                    </div>
                               </div>
                </div>
        </div>
        <div class="col-md-12" style="margin-top:55px;" id="energia">					
                <div class="contvalor wow fadeIn" data-wow-delay="0.3s" style="margin-top: 35px;">
                  <img src="<?php echo $baseurl?>dist/img2/banners/banner-3.jpg" class="img-responsive" alt="ENERGIA Y OBRAS CIVILES SGTEL">    
                </div>
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		            	
	                             <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                                   <ul  class="textarea listaserv">
                                     <li class="itemm2" data-cont="e1" style="color:white;background:#0082c4;"><i class="fa fa-circle punto"></i>UPS y banco de baterías</li> 
                                     <li class="itemm2" data-cont="e2"><i class="fa fa-circle punto"></i>Sistemas eléctricos de baja tensión  </li>
                                     <li class="itemm2" data-cont="e3"><i class="fa fa-circle punto"></i>Subestaciones Eléctricas</li>                                  
                                   </ul>
                                   <br><br>
                               </div>
                               <div class="col-md-6 wow fadeInRight" data-wow-delay="0.9s">
                                    <div class="hidee2" id="e1">
                                        <ul>
                                            <li>Diseño e implementación de Sistemas de protección de energía estabilizada (APC – EMERSON – TRIPP LITE). </li>
                                            <li>Instalación de Bancos de Baterías</li>
                                            <li>Instalación de Rectificadores</li>
                                            <li>Diseño e implementación de bancos de condensadores.</li>
                                            <li>Sistemas de Puesta a tierra.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee2" id="e2">
                                        <ul>
                                            <li>Diseño y Ejecución de Proyectos de Electricidad.</li>
                                            <li>Estudios de Factibilidad.</li>
                                            <li>Suministros de Equipos, Transformadores, Rectificadores, Generadores, Aisladores, etc.</li>
                                            <li>Estudio de Carga en Edificaciones.</li>
                                            <li>Mantenimiento Preventivo y Correctivo.</li>
                                            <li>Supervisión de Obras de Electricidad.</li>
                                            <li>Sistemas de Alumbrado Publico</li>
                                            <li>Iluminación Industrial.</li>
                                        </ul>
                                    </div>
                                    <div class="hidee2" id="e3">
                                        <ul>
                                            <li>Dimensionamiento y Suministro de Subestaciones Eléctricas.</li>
                                            <li>Suministro, Instalación y energización de equipos.</li>
                                            <li>Tramite documentarios para energización.</li>
                                            <li>Mantenimiento preventivo y correctivo </li>
                                        </ul>
                                    </div>                                                                  
                               </div> 
		            </div>            
				</div>				
			</div>
			<!-- seccion novedades -->
                <div class="col-md-3 novedades" ng-controller="postAreaController" style="margin-top: 55px;margin-bottom:25px;overflow: hidden;">               
                <p class="tit_suscrip"><c style="color:#ff761a">SUSCRIBETE</c> POR EMAIL A NUESTROS ARTÍCULOS</p>
                <div class="form" style="overflow: hidden;">
                    <form role="form" id="form_sus">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email..." >                       
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Suscribirse" class="btn btn-success pull-right">
                        </div>
                    </form>
                    <p class="success-message2"></p>
                    <p class="error-message"></p>
                </div>              
                <hr class="hr_post"><br>
                <p class="titsec news"><i class="fa fa-exclamation-circle"></i> Post Relacionados</p>
                <div class="col-md-12" style="overflow:hidden;">
                    <a class="col-md-12 col-sm-4 col-ms-6 col-xs-12 wow bounceIn" href="<?php echo $baseurl?>novedades/{{related.url_web}}-{{related.codpost}}"
                     ng-repeat="related in relateds" class="post_item" >
                        <div class="contnove" title="{{related.title}}">
                            <img class="img-responsive imgnove" 
                            ng-src="<?php echo $baseurl;?>admin/public/dist/img/posts/{{related.path_url}}">
                            <p>{{related.title}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 descarga">
                    <a href="<?php echo $baseurl;?>document/<?php echo str_replace("/areas-negocio/", "", $_SERVER['REQUEST_URI'])?>.pdf" download>
                    <h2>DESCARGAR BROCHURE</h2>
                    <img class="img-responsive icondwl" src="<?php echo $baseurl;?>dist/img2/icons/download.svg" alt="descargar brochure">
                    </a>
                </div>
            </div>
            <!-- fin -->    
			<div class="col-md-12 contcli">
                     <p class="titsec" style="width: 200px;">CLIENTES</p>
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