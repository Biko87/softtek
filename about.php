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
                            <li><a href="">Conózcanos</a>
                                <ul>
                                    <li><a href="about.php">Nosotros</a></li>
                                    <li><a href="#somos">¿Quiénes somos?</a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Portafolio</a>
                                <ul>
                                    <li><a href="#themplate">Plantillas Junior</a>
                                        <ul>
                                            <li>
                                                <a href="juniorp1.php">Junior P1</a>
                                                <a href="juniorp2.php">Junior P2</a>
                                                <a href="juniorp3.php">Junior P3</a>
                                            </li>
                                        </ul></li>
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
                                            <li><a href="#themplate">Plantillas Junior</a>
                                                <ul>
                                                    <li>
                                                        <a href="juniorp1.php">Junior P1</a>
                                                        <a href="juniorp2.php">Junior P2</a>
                                                        <a href="juniorp3.php">Junior P3</a>
                                                    </li>
                                                </ul>
                                            </li>
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
                    <h2>Sobre nosotros</h2>
                    <p>Somos una empresa Digital 100% Colombiana que pone a disposición de sus clientes los más innovadores procesos en desarrollo web, contamos con el equipo más talentoso para resolver sus necesidades.</p>
                </div>
            </div>
        </div>
        <!-- page header section ending here -->

        <!-- About Section Start Here -->
		<section class="about-section style-2 style-3 style-4 padding-tb">
            <div class="container">
                <div class="section-header">
                    <span style="font-size:30px;">Somos familia</span>
                    <h2>Más que un equipo somos una familia, por eso jugamos un papel importante en el trabajo creativo y técnico.</h2>
                </div>
                <div class="section-wrapper">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/about/marketing/01.png" alt="lab-thumb">
                            </div>
                            <div class="lab-content">
                                <h4>Análisis</h4>
                                <p>Es muy importante familiarizarnos contigo y discutir las ideas principales del proyecto. Por eso analizamos y entendemos tus necesidades en el mercado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/about/marketing/02.png" alt="lab-thumb">
                            </div>
                            <div class="lab-content">
                                <h4>Diseño Con Calidad</h4>
                                <p>Escuchamos tus ideas y procedemos a discutir el plan de trabajo, analizarlo y ejecutarlo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/about/marketing/03.png" alt="lab-thumb">
                            </div>
                            <div class="lab-content">
                                <h4>Ideas Brillantes</h4>
                                <p>Nuestro equipo de profesionales comienza a desarrollar su proyecto y tiene en cuenta todos los detalles del concepto inicial.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section Ending Here -->

		
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
        <script>
            $(window).scroll(function() {
                var hT = $('.skill-bar-wrapper').offset().top,
                    hH = $('.skill-bar-wrapper').outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                if (wS > (hT+hH-1.4*wH)){
                    jQuery(document).ready(function(){
                        jQuery('.skillbar-container').each(function(){
                            jQuery(this).find('.skills').animate({
                                width:jQuery(this).attr('data-percent')
                            }, 5000); // 5 seconds
                        });
                    });
                }
            });
        </script>
	</body>
</html>