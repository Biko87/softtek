<?php
  // Obteniendo la fecha actual con hora, minutos y segundos en PHP
  $DateAndTime = date('d/m/Y'); 

  // Obteniendo la hora y minutos en PHP
  date_default_timezone_set('America/Bogota');  
  $Object = new DateTime();  
  $hour = $Object->format("h:i a"); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
<!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/favicon.png">
        
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <link rel="stylesheet" href="assets/css/lightcase.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <title>Mi Web.Com</title>
    </head>

    <body>

        <!-- Mobile Menu Start Here -->
        <div class="mobile-menu seo-bg">
            <nav class="mobile-header">
                <div class="header-logo">
                    <a href="index.php" class="lab-btn"><span style="font-size:35px; color:#ffffff;">MiWeb.Com</span></a>
                </div>
                <div class="header-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
            <nav class="mobile-menu">
                <div class="mobile-menu-area">
                    <div class="mobile-menu-area-inner">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="#">Conózcanos</a>
                                <ul>
                                    <li><a href="about.html">Nosotros</a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Portafolio</a>
                                <ul>
                                    <li><a href="#themplate">Plantillas Junior</a></li>
                                    <li><a href="webdesign.php" target="_blank">Diseñamos Tú Web</a></li>
                                </ul>
                            </li>
                            </li>
                            <li><a href="" class="lab-btn"><span><i class="bi bi-calendar-week d-flex align-items-center" style="color:#20b2aa;">&nbsp;<span><?php echo "<i class='icofont-clock-time'></i> $hour"; echo "</br><i class='icofont-calendar'></i> $DateAndTime";?></span></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Mobile Menu Ending Here -->


        <!-- desktop menu start here -->
                <header class="header-section transparent-header innerheader">
            <div class="header-area">
                <div class="container">
                    <div class="primary-menu">
                        <div class="logo">
                            <a href="index.php" class="lab-btn"><span style="font-size:35px; color:#ffffff;">MiWeb.Com</span></a>
                        </div>
                        <div class="main-area">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="">Conózcanos</a>
                                        <ul>
                                            <li><a href="about.php" target="_blank">Nosotros</a></li>
                                            </li>
                                            <li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Portafolio</a>
                                        <ul>
                                            <li><a href="#themplate">Plantillas Junior</a></li>
                                            <li><a href="webdesign.php" target="_blank">Creamos Tú Web</a></li>
                                        </ul>
                                    </li>
                                    <div class="header-btn">
                                        <a href="" class="lab-btn"><span><i class="bi bi-calendar-week d-flex align-items-center" style="color:#20b2aa;">&nbsp;<span><?php echo "<i class='icofont-clock-time'></i> $hour"; echo "</br><i class='icofont-calendar'></i> $DateAndTime"; ?></span></i></span></a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop menu ending here -->      

        <!-- ======= Button float whatsapp ======= -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i></a>
        <!-- ======= End Button float whatsapp ======= -->
        
        <!-- page header section start here -->
        <div class="page-header">
            <div class="shap-pageheader">
                <div class="line line-1"><img src="assets/images/pageheader/shap/01.png" alt="shap-header"></div>
                <div class="line line-2"><img src="assets/images/pageheader/shap/02.png" alt="shap-header"></div>
                <div class="line line-3"><img src="assets/images/pageheader/shap/03.png" alt="shap-header"></div>
                <div class="line line-4"><img src="assets/images/pageheader/shap/04.png" alt="shap-header"></div>
                <div class="line line-5"><img src="assets/images/pageheader/shap/05.png" alt="shap-header"></div>
                <div class="line line-6"><img src="assets/images/pageheader/shap/06.png" alt="shap-header"></div>
                <div class="line line-7"><img src="assets/images/pageheader/shap/07.png" alt="shap-header"></div>
            </div>
            <div class="container">
                <div class="pageheader-textarea text-center">
                    <h2>Creamos Tu Página Web</h2>
                    <p><strong> Empieza tu proyecto web con nosotros sin importar tu presuesto. Nuestras tarifas son económicas y viables para tu establecimiento comercial o empresa.</strong></p>
                </div>
            </div>
        </div>
        <!-- page header section ending here -->


        <!-- Recent Case Section Start Here -->
		<section class="portfolio-section portfolio-single padding-tb">
			<div class="container">
				<div class="section-wrapper">
                    <div class="port-top">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="post-thumb">
                                    <img src="assets/images/portfolio/single/01.png" alt="portfolio">
                                </div>
                            </div>
                            <div class="col-lg-4 pr-thumb">
                                <div class="post-thumb">
                                    <img src="assets/images/portfolio/single/02.jpg" alt="portfolio">
                                </div>
                                <div class="post-thumb">
                                    <img src="assets/images/portfolio/single/03.png" alt="portfolio">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="port-bottom">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-7 col-12">
                                <div class="port-item2">
                                    <div class="port-inner">
                                        <div class="port-header">
                                            <img src="assets/images/portfolio/single/icon/01.png" alt="project-icon">
                                            <h4>Información</h4>
                                        </div>
                                        <div class="port-body">
                                            <ul>
                                                <li>
                                                    <div class="lab-abs-thumb">
                                                        <img src="assets/images/portfolio/single/icon/04.png" alt="project-icon">
                                                    </div>
                                                    <div class="p-content">
                                                        <h6>Clientes</h6>
                                                        <p>Nuestros Diseños se adaptan a las necesidades de cada cliente.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lab-thumb">
                                                        <img src="assets/images/portfolio/single/icon/05.png" alt="project-icon">
                                                    </div>
                                                    <div class="p-content">
                                                        <h6>Soporte</h6>
                                                        <p>Brindamos soporte permanente los 7 días de la semana a través de whatsapp o correo electrónico.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lab-thumb">
                                                        <img src="assets/images/portfolio/single/icon/06.png" alt="project-icon">
                                                    </div>
                                                    <div class="p-content">
                                                        <h6>Personalizado</h6>
                                                        <p>Adaptamos el diseño de tu página segun la identidad comercial de tu establecimiento, como: logotipo, colores y fuentes. Diseño único para tu empresa.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lab-thumb">
                                                        <img src="assets/images/portfolio/single/icon/07.png" alt="project-icon">
                                                    </div>
                                                    <div class="p-content">
                                                        <h6>Hospedaje</h6>
                                                        <p>Utilizamos Hosting Colombiano, con más de 14 años en la industria, 100% garantizados. Servidores rápidos y seguros.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 right-side">
                                <div class="port-item2">
                                    <div class="port-inner">
                                        <div class="port-header">
                                            <img src="assets/images/portfolio/single/icon/02.png" alt="project-icon">
                                            <h3>En MiWeb.Com</h3>
                                        </div>
                                        <div class="port-body">
                                            <p>Cuando una persona crea una página web, está creando su presencia en línea. Esto te permite conectarte con personas de todo el mundo y al cual no pensaste llegar. Puedes tener tu sitio web básico, solo con los datos de contacto de tu establecimiento comercial o pequeña empresa. En MiWeb.Com diseñamos, creamos y desarrollamos su proyecto web 100% responsive, con tan solo <span style="color:#2112c8;">$15000</span>,y lo mejor es que están adaptadas a todos los navegadores y resoluciones para que tus clientes siempre puedan verte. ¿Qué esperas? empieza tu próximo proyecto web con nosotros.</p>                                        </div>
                                    </div>
                                </div>


                                <div class="analysis-body">
                                    <form method="post" action="../miwebpuntocom/send_form/enviar.php">
                                        <input type="text" name="name" placeholder="Nombre y Apellido">
                                        <input type="text" name="asunto" placeholder="Asunto*">
                                        <input type="email" name="email" placeholder="Email*">
                                        <input type="tel" name="phone" placeholder="Tel/Cel*">
                                        <textarea  name="message" placeholder="Ingrese aquí su mensaje, nos pondremos en contacto contigo en la brevedad." rows="8" required></textarea>

                                        <div class="mb-3">
                                            <div class="alert alert-success" role="alert">
                                                <h4>¡AVISO LEGAL!</h4>
                                                    Declaro que tengo la mayoría de edad y acepto la <a href="POLITICA-DE-PRIVACIDAD.pdf" class="alert-link" id="btn2" target="_blank">Política de Privacidad de MiWeb.Com</a>. <br>Autorizo el tratamiento de mis datos personales de acuerdo con el texto de esta autorización, haciendo click en la casilla de verificación.
                                                <div>
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing" value="Por lo tanto autorizo el tratamiento de mis datos personales de acuerdo con el texto de autorización." name="politica" checked>
                                                        <label class="custom-control-label" for="customControlAutosizing">Sí, Acepto.</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                              

                                        <button type="submit" class="lab-btn"><span style="color:#000;">Enviar</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		<!-- Recent Case Section Ending Here -->


		
        <!-- Footer Section Start Here -->
        <footer>
            <div class="footer-top">
                <div class="container text-center text-white">
                    <div class="row">
                            <!-- Grid container -->
                        <div class="container p-4 pb-0">
                            <!-- Section: Social media -->
                            <section class="mb-4">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                                <!-- Whatsapp -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-whatsapp"></i></a>

                                <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                                <!-- Linkedin -->
                                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                            </section>
                                <!-- Section: Social media -->
                        </div>
                      <!-- Grid container -->


                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2021 All Rights Reserved by <a href="#">MiWeb.Com</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
		
		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/fontawesome.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/progress.js"></script>
		<script src="assets/js/wow.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>
</html>