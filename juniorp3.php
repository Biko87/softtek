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
                                    <li><a href="#somos">¿Quiénes somos?</a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Portafolio</a>
                                <ul>
                                    <li><a href="#themplate">Plantillas Junior</a></li>
                                    <li><a href="webdesign.php" target="_blank">Diseñamos Tú Web</a></li>
                                    <li><a href="#combo">Plantillas+Hosting+Doiminios</a></li>
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
                                            <li><a href="#somos">¿Quiénes somos?</a>
                                            </li>
                                            <li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Portafolio</a>
                                        <ul>
                                            <li><a href="#themplate">Plantillas Junior</a>
                                                <ul>
                                                    <li>
                                                        <a href="#themplate">Junior P1</a>
                                                        <a href="#themplate">Junior P2</a>
                                                        <a href="#themplate">Junior P2</a>
                                                    </li>
                                                </ul>

                                            </li>
                                            <li><a href="webdesign.php" target="_blank">Creamos Tú Web</a></li>
                                            <li><a href="#combo">Plantillas+Hosting+Doiminios</a></li>
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
        <a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Te%20informo%20que%20realice%20el%20pago%20de%20una%20plantilla%20o%20plan%20y%20no%20me%20llegado." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i></a>
        <!-- ======= End Button float whatsapp ======= -->

        <!-- Shop Page Section start here -->		            
        <div class="shop-single padding-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12 sticky-widget">
                        <div class="product-details">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="product-thumb">
                                        <div class="swiper-container pro-single-top">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/portfolio/juniorp3/1.png" alt="Plantilla Juniorp3"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/portfolio/juniorp3/2.png" alt="Plantilla Juniorp3"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/portfolio/juniorp3/3.png" alt="Plantilla Juniorp3"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-container pro-single-thumbs">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/portfolio/juniorp3/1.png" alt="Plantilla Juniorp3"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/portfolio/juniorp3/2.png" alt="Plantilla Juniorp3"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-thumb"><img src="assets/images/shop/portfolio/juniorp3/3.png" alt="Plantilla Juniorp3"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="pro-single-next"><i class="fas fa-angle-left"></i></div>
                                        <div class="pro-single-prev"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4>Información de la plantilla</h4>
                                        <h4>$20000</h4>
                                        <h6>Descripción</h6>
                                        <p>Plantilla sencilla con sección de portafolio para tus productos o servicios, de contáctenos y nosotros.</p>
                                    </div>
                                        <a href="junior/plantilla3/index.html" class="lab-btn" target="_blank"><span>Ver Plantilla</span></a>
                                        <a href="#comprar" class="lab-btn"><span>Comprar Plantilla</span></a>
                                        <a href="#combo" class="lab-btn"><span>Te puede interesar el combo completo</span></a>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page Section ending here -->


<!-- Pricing Table Section Start Here -->
        <section class="pricing-table padding-tb bg_size" style="background-image: url(assets/css/bg-image/pricing-bg.jpg)" id="combo">
            <div class="container">
                <div class="section-header">
                    <h2>Combo Juniro P3 Completo</h2>
                    <p>Adquiera un plan más completo con Hosting y Dominio.</p>
                </div>
                <div class="section-wrapper">
                    <div class="pricing-item">
                        <div class="pricing-inner">
                            <div class="pricing-head">
                                <h4>Plan Básico</h4>
                                <p>Hosting + Dominio + Plantilla Web</p>
                            </div>
                            <div class="pricing-body">
                                <div class="price">
                                    <h2>$134500 </h2>
                                    <p>Por Año</p>
                                </div>
                                <div class="price-list">
                                    <ul>
                                        <li><i class="icofont-file-html5"></i> Plantilla web</li>
                                        <li><i class="icofont-hard-disk"></i> 10 GB Espacio/SSD NVME</li>
                                        <li><i class="icofont-mail"></i> 10 Cuentas de E-mail</li>
                                        <li><i class="icofont-database"></i> 2 Bases De Datos</li>
                                        <li><i class="icofont-web"></i> 1 Dominio permitido (.com)</li>
                                        <li><i class="icofont-unlock"></i> SSL gratis (https://)</li>
                                        <li><i class="icofont-upload"></i> Copias de Seguridad</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="#comprar" class="lab-btn"><span>Comprar</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-inner">
                            <div class="pricing-head">
                                <h4>Plan Silver</h4>
                                <p>Hosting + Dominio + Plantilla Web</p>
                            </div>
                            <div class="pricing-body">
                                <div class="price">
                                    <h2>$215000 </h2>
                                    <p>Por Año</p>
                                </div>
                                <div class="price-list">
                                    <ul>
                                        <li><i class="icofont-file-html5"></i> Plantilla web</li>
                                        <li><i class="icofont-hard-disk"></i> 30 GB Espacio/SSD NVME</li>
                                        <li><i class="icofont-mail"></i> 20 Cuentas de E-mail</li>
                                        <li><i class="icofont-database"></i> 5 Bases De Datos</li>
                                        <li><i class="icofont-web"></i> 2 Dominio permitido (.com)</li>
                                        <li><i class="icofont-unlock"></i> SSL gratis (https://)</li>
                                        <li><i class="icofont-upload"></i> Copias de Seguridad</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="#comprar" class="lab-btn"><span>Comprar</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-inner">
                            <div class="pricing-head">
                                <h4>Plan Gold</h4>
                                <p>Hosting + Dominio + Plantilla Web</p>
                            </div>
                            <div class="pricing-body">
                                <div class="price">
                                    <h2>$285000 </h2>
                                    <p>Por Año</p>
                                </div>
                                <div class="price-list">
                                    <ul>
                                        <li><i class="icofont-file-html5"></i> Plantilla web</li>
                                        <li><i class="icofont-hard-disk"></i> 50 GB Espacio/SSD NVME</li>
                                        <li><i class="icofont-mail"></i> 50 Cuentas de E-mail</li>
                                        <li><i class="icofont-database"></i> 10 Bases De Datos</li>
                                        <li><i class="icofont-web"></i> 3 Dominio permitido (.com)</li>
                                        <li><i class="icofont-unlock"></i> SSL gratis (https://)</li>
                                        <li><i class="icofont-upload"></i> Copias de Seguridad</li>
                                    </ul>
                                </div>
                                <div class="price-btn">
                                    <a href="#comprar" class="lab-btn"><span>Comprar</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Table Section Ending Here -->


       <!-- Section Buy Form -->
       <section id="comprar">
        <div class="footer-top style-3 padding-tb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-item first-set">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4 class="text-center">Pasos Para Comprar</h4>
                                        </div>
                                        <div class="content">
                                            <div class="list-group">
                                              <a class="list-group-item list-group-item-info">1. Elija a Nequi como medio de pago.</a>
                                              <a class="list-group-item list-group-item-info">2. Realice el pago a la siguiente cuenta 3213323387</a>
                                              <a class="list-group-item list-group-item-info">3. Una vez realizado el pago, tomele un pantallazo.</a>
                                              <a class="list-group-item list-group-item-info">4. Complete el formulario y cargue el pantallazo de pago.</a>
                                              <a class="list-group-item list-group-item-info">5. De Click en el botón enviar.</a>
                                              <a class="list-group-item list-group-item-info">6. En contados segundos un asesor contactará con usted confirmando su pago y le enviará el producto a su correo.</a>
                                              <a class="list-group-item list-group-item-danger"><strong>Nota:</strong> Si al transcurrir 5 minutos, ninguno de nuestros asesores se pone en contacto con usted, por favor envíe un mensaje al Whatsapp haciendo click en el boton flotante derecho, cargue el recibo de pago en Whatsapp notificando su compra. Un asesor se comunicará inmediatamente con usted y le hará entrega del producto a su correo.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer-item first-set">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">                                            
                                            <h4 class="text-center">Formulario De Pago</h4>
                                            <div class="text-center"><img src="assets/images/shop/nequi.png" alt="Nequi" width="300" height="300"></div>
                                            <h5 class="text-center">Complete el siguiente formulario para enviar el producto <br> a su correo, una vez haya realizado el pago.</h5>                                         
                                            <div class="content">
                                                <div class="analysis-body">
                                                    <h5>Datos personales para el envío:</h5>
                                                    <form method="post" action="../miwebpuntocom/send_payment/enviar.php" enctype="multipart/form-data">
                                                        <input type="text" name="name" placeholder="Nombre y Apellido">
                                                        <input type="email" name="email" placeholder="Email*">
                                                        <input type="tel" name="phone" placeholder="Tel/Cel*">
                                                        <h5 >Por favor seleccione el nombre de la plantilla o el Plan.</h5>
                                                            <label for="theme">Plantilla/Plan</label>
                                                              <select  id="disabledSelect" class="form-control form-control-lg" name="plan-plantilla" required>
                                                                <option>Seleccione:</option>
                                                                <option>Junior P3</option>
                                                                <option>Combo Junior P3 / Plan Básico</option>
                                                                <option>Combo Junior P3 / Plan Silver</option>
                                                                <option>Combo Junior P3 / Plan Gold</option>
                                                              </select>
                                                              <br>
                                                        <h5 >Por favor seleccione el medio que utilizó para el pago.</h5>
                                                            <div class="col-md-4">
                                                                <label for="theme" class="form-label">Medio de pago</label>
                                                                  <select class="form-control" name="pago" required>
                                                                    <option>Seleccione:</option>
                                                                    <option>Nequi</option>
                                                                  </select>
                                                            </div>
                                                          <br>
                                                          <div class="form-group">
                                                            <h5 >Por favor cargue pantallazo o foto del recibo de pago.</h5>                
                                                            <span class="desc">Seleccione la imagen del recibo</span> <i class="fa fa-cloud-upload bigicon"></i>
                                                            <span class="col-md-1 col-md-offset-2 text-left"></span>
                                                              <div class="col-md-8">
                                                                <input type="file" multiple="multiple" name="archivo" class="form-control-file" />
                                                              </div>
                                                          </div>
                                                        <textarea  name="message" placeholder="Ingrese aquí, algún comentario adicional." rows="8" required></textarea>

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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Buy Form -->
        

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