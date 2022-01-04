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
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/favicon.png">

		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/all.min.css">
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
		<title>Mi Web.Com</title>

		<meta content="¿Buscas una página web super económica? Entra ahora y descubre más..." name="description">
  		<meta content="WebSite, página web, diseño de página web, plantilla web, página web económica, diseño de página web económica, plantilla web económica, hacemos su página web, página web facil y económica, Elaboramos su website, su website económica, diseño web barata, página web barata, diseños de página web a bajo costo, diseñamos su página web económica, página web personalizada, elaboramos o diseñamos su página web personalizada, quiero tener mi página web, mi propia página web, página web la más económica del mercado, plantilla web la más económica del mercado, página web super económica, quiero una página económica, como hago para tener una página web, como hago para tener una página web y no sea tan costosa, diseño web barata" name="keywords">
	</head>

	<body>
		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu seo-bg">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="index.html" class="lab-btn"><span style="font-size:35px; color:#ffffff;">MiWeb.Com</span></a>
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
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Conózcanos</a>
								<ul>
								    <li><a href="about.php">Nosotros</a></li>
									<li><a href="#somos">¿Quiénes somos?</a></li>
									<li><a href="#contacto">Contáctenos</a></li>
									<li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
									<li><a href="#contacto">¡Escríbenos!</a></li>
								</ul>
							</li>
							<li><a href="#">Portafolio</a>
								<ul>
									<li><a href="#themplate">Plantillas Junior</a>
										<ul>
                                            <li>
                                                <a href="juniorp1.php" target="_blank">Junior P1</a>
                                                <a href="juniorp2.php" target="_blank">Junior P2</a>
                                                <a href="juniorp3.php" target="_blank">Junior P3</a>
                                            </li>
                                        </ul>
									</li>
									<li><a href="webdesign.php" target="_blank">Diseñamos Tú Web</a></li>
									<li><a href="#combo">Plantillas+Hosting+Doiminios</a></li>
								</ul>
							</li>
                            <li><a href="#contacto">Contáctenos</a>
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
		<header class="header-section transparent-header seo-bg">
			<div class="header-area">
				<div class="container">
					<div class="primary-menu">
						<div class="logo">
							<a href="index.html" class="lab-btn"><span style="font-size:35px; color:#ffffff;">MiWeb.Com</span></a>
						</div>
						<div class="main-area">
							<div class="main-menu">
								<ul>
									<li><a href="">Inicio</a></li>
									<li><a href="">Conózcanos</a>
										<ul>
											<li><a href="about.php" target="_blank">Nosotros</a></li>
											<li><a href="#somos">¿Quiénes somos?</a>
											</li>
											<li><a href="#contacto1">Contáctenos</a></li>
											<li><a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." target="_blank">Contáctenos Por Whatsapp</a></li>
											<li><a href="#contacto1">¡Escríbenos!</a></li>
										</ul>
									</li>
									<li><a href="">Portafolio</a>
										<ul>
											<li><a href="#themplate">Plantillas Junior</a>
												<ul>
                                                    <li>
                                                        <a href="juniorp1.php" target="_blank">Junior P1</a>
                                                        <a href="juniorp2.php" target="_blank">Junior P2</a>
                                                        <a href="juniorp3.php" target="_blank">Junior P3</a>
                                                    </li>
                                                </ul>
											</li>
											<li><a href="webdesign.php" target="_blank">Creamos Tú Web</a></li>
											<li><a href="#combo">Plantillas+Hosting+Doiminios</a></li>
										</ul>
									</li>
									<li><a href="#contacto1">Contáctenos</a></li>
								</ul>
							</div>
							<div class="header-btn">
								<a href="" class="lab-btn"><span><i class="bi bi-calendar-week d-flex align-items-center" style="color:#20b2aa;">&nbsp;<span><?php echo "<i class='icofont-clock-time'></i> $hour"; echo "</br><i class='icofont-calendar'></i> $DateAndTime"; ?></span></i></span></a>
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

		<!-- Banner Section start here -->
		<section class="banner-section seo-banner">
			<div class="round-shape d-none d-lg-block">
				<div class="round"><img src="assets/images/about/round.png" alt=""></div>
			</div>
			<div class="codex-shape">
				<div class="line line_1"></div>
				<div class="line line_2"></div>
				<div class="line line_3"></div>
				<div class="line line_4"></div>
				<div class="line line_5"></div>
				<div class="line line_6"></div>
			</div>
			<div class="banner-area">
				<div class="container">
					<div class="row no-gutters align-items-center justify-content-center">
						<div class="col-xl-6 col-md-8 col-12">
							<div class="content-part">
								<div class="section-header style-2">
									<h2>Diseñamos Tú Página Web Por Tan Solo $15.000</h2>
								<!--	<p>Easy control panel drag-and drop website builder One click script instals With user friendly account Shopping carts-sell your products online was 30 day money back gurantee</p>-->
									<div class="button-group">
										<a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." class="lab-btn" target="_blank"><span>Contactar</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="section-wrapper">
								<div class="banner-thumb">
									<img src="assets/images/banner/seo/01.png" alt="lab-banner">
									<div class="thumb-shape">
										<div class="th-shape th-shape-1"><img src="assets/images/banner/seo/shape/01.png" alt="th-shape"></div>
										<div class="th-shape th-shape-2"><img src="assets/images/banner/seo/shape/02.png" alt="th-shape"></div>
										<div class="th-shape th-shape-3"><img src="assets/images/banner/seo/shape/03.png" alt="th-shape"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section ending here -->

		<!-- Service Section Start Here -->
		<section class="service-section padding-tb">
			<div class="container">
				<div class="section-header">
					<h2>¿Quiere ingresar en el mundo del internet <br> y no encuentra una plantilla o página web económica?</h2>
					<h5>Adquiera su plantilla web por un precio super económico de solo <span style="color:#2112c8;">$15000</span> y ofrece tus productos o servicios en línea.</h5>
				</div>
				<div class="section-wrapper">
					<div class="lab-item">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/service/01.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Alcanza el éxito</h4>
								<p>Marca la diferencia y desarrolle la mejor estrategia para alcanzar tus metas.</p>
							</div>
						</div>
					</div>
					<div class="lab-item">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/service/02.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Voz a Voz</h4>
								<p>Informa a las personas de tu actividad comercial y vende en línea.</p>
							</div>
						</div>
					</div>
					<div class="lab-item">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/service/03.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Nuevos Horizontes</h4>
								<p>Expanda su negocio al entrar en un mercado más amplio como el internet.</p>
							</div>
						</div>
					</div>
					<div class="lab-item">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/service/04.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Promoción de medios</h4>
								<p>Promocionar su negocio en internet es la mejor inversión.</p>
							</div>
						</div>
					</div>
					<div class="lab-item">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/service/05.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Crecimiento</h4>
								<p>Haz crecer tu negocio y destácate de tu competencia.</p>
							</div>
						</div>
					</div>
					<div class="lab-item">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/service/06.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Monetiza</h4>
								<p>Adquiera mejores ingresos con una página web</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Service Section Ending Here -->

		<!-- About Section Start Here -->
		<section class="about-section seo-about padding-tb" id="somos">
			<div class="round-shape d-none d-lg-block">
				<div class="round"><img src="assets/images/about/round.png" alt=""></div>
			</div>
			<div class="codex-shape">
				<div class="line line_1"></div>
				<div class="line line_2"></div>
				<div class="line line_3"></div>
				<div class="line line_4"></div>
				<div class="line line_5"></div>
				<div class="line line_6"></div>
			</div>
			<div class="container">
				<div class="row align-items-center flex-row-reverse">
					<div class="col-lg-6">
						<div class="section-wrapper">
							<div class="lab-thumb">
								<img src="assets/images/about/01.png" alt="about-lab">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-header style-2">
							<h2>¿Quiénes somos?</h2>
							<p>Somos una empresa digital Colombiana y nuestras plantillas están orientadas para aquellas personas con negocios pequeños (local, establecimiento comercial o microempresa) que quieren dar a conocer sus servicios y productos en el mundo del internet e incrementar sus ingresos.<br> Nuestros diseños web están pensados en tu audiencia(cliente final), reflejando la esencia de tu marca y que están orientados al cumplimiento de tus objetivos de negocio.</p>

							<ul class="smart-list-ef">
								<li>
									<div class="left"><span>1</span></div>
									<div class="right"><p> Diseñamos y desarrollamos tu website o página web.</p></div>
								</li>
								<li>
									<div class="left"><span>2</span></div>
									<div class="right"><p> Contamos con la experiencia de trabajar con personas del comercio común que poseen un local o establecimiento comercial(ropa, calzado, comida, papelería, etc.) más conocido como comerciante independiente.</p></div>
								</li>
								<li>
									<div class="left"><span>3</span></div>
									<div class="right"><p> Trabajamos con profesionalismo, transparencia y respeto.</p></div>
								</li>
							</ul>
							<a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." class="lab-btn" target="_blank"><span>Contactar</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section Ending Here -->

		<!-- Service Section Style 2 Start Here -->
		<section class="service-section style-2 seo padding-tb">
			<div class="container">
				<div class="section-header">
					<h2>¿Por qué elegirnos?</h2>
					<p>Usamos las mejores herramientas tecnológicas para desarrollar sitios web.</p>
				</div>
				<div class="section-wrapper">
					<div class="lab-item-2">
						<div class="lab-inner">
								<div class="lab-abs-thumb">
									<img src="assets/images/service/style2/01-bg.png" alt="lab">
								</div>
							<div class="lab-thumb">
								<img src="assets/images/service/style2//01.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Google</h4>
								<p>Nuestras plantillas cumple con los mejores estándares para buscadores web como Google.</p>
							</div>
						</div>
					</div>
					<div class="lab-item-2">
						<div class="lab-inner">
								<div class="lab-abs-thumb">
									<img src="assets/images/service/style2/02-bg.png" alt="lab">
								</div>
							<div class="lab-thumb">
								<img src="assets/images/service/style2//02.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Interfaces potentes.</h4>
								<p>Nuestro equipo está formado por expertos en desarrollar sitios web.</p>
							</div>
						</div>
					</div>
					<div class="lab-item-2">
						<div class="lab-inner">
								<div class="lab-abs-thumb">
									<img src="assets/images/service/style2/03-bg.png" alt="lab">
								</div>
							<div class="lab-thumb">
								<img src="assets/images/service/style2//03.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>La experiencia de usuario.</h4>
								<p>Nuestras plantillas cuentan con diseños óptimos y amigables para el usuario.</p>
							</div>
						</div>
					</div>
					<div class="lab-item-2">
						<div class="lab-inner">
								<div class="lab-abs-thumb">
									<img src="assets/images/service/style2/04-bg.png" alt="lab">
								</div>
							<div class="lab-thumb">
								<img src="assets/images/service/style2//04.png" alt="lab-thumb">
							</div>
							<div class="lab-content">
								<h4>Tiempos de carga</h4>
								<p>Nuestras plantillas son más rápidas y de alta velocidad al cargar.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Service Section Style 2 Ending Here -->
		

		<!-- Email Contact PC Section Start Here -->
		<section class="seo-analysis-section padding-tb d-none d-sm-none d-md-block" id="contacto1">
			<div class="round-shape d-none d-lg-block">
				<div class="round"><img src="assets/images/about/round.png" alt=""></div>
			</div>
			<div class="container">
				<div class="section-wrapper">
					<div class="row align-items-center">
						<div class="col-lg-6 col-12">
							<div class="analysis-from">
								<div class="lab-abs-thumb">
									<img src="assets/images/seo/shape.png" alt="lab-seo">
								</div>
								<div class="analysis-head">
									<h4 class="text-center">¿Cómo te puedo ayudar?</h4>
									<h5 class="text-center">¡Escríbenos!</h5>
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
						<div class="col-lg-6 col-12">
							<div class="section-header style-2">
								<h2>¡Mantengámonos en contacto!</h2>
								<p>¿Listo para comenzar tu próximo proyecto con nosotros? <br> Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
								<div class="codex-shape">
									<div class="line line_5"></div>
									<div class="line line_6"></div>
								</div>
							</div>
					<!-- G-Map Section Start Here -->
			        <div class="gmaps-section">
			            <div class="map-area">
			                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7976.5005521777675!2d-75.6028967!3d1.6064028000000068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMzYnMjMuMCJOIDc1wrAzNicxMC41Ilc!5e0!3m2!1ses!2sco!4v1625866633960!5m2!1ses!2sco" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			            </div>
			        </div>
			        <!-- G-Map Section Ending Here -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Email Contact PC Section Ending Here -->

		<!-- Email Contact Mobile Section Start Here -->
		<section class="seo-analysis-section padding-tb d-block d-sm-block d-md-none" id="contacto">
			<div class="round-shape d-none d-lg-block">
				<div class="round"><img src="assets/images/about/round.png" alt=""></div>
			</div>
			<div class="container">
				<div class="section-wrapper">
					<div class="row align-items-center">
						<div class="col-lg-6 col-12">
							<div class="section-header style-2">
								<h2>¡Mantengámonos en contacto!</h2>
								<p>¿Listo para comenzar tu próximo proyecto con nosotros? <br> Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
								<div class="codex-shape">
									<div class="line line_5"></div>
									<div class="line line_6"></div>
								</div>
							</div>						
						</div>
						<div class="col-lg-6 col-12">
							<div class="analysis-from">
								<div class="lab-abs-thumb">
									<img src="assets/images/seo/shape.png" alt="lab-seo">
								</div>
								<div class="analysis-head">
									<h4 class="text-center">¿Cómo te puedo ayudar?</h4>
									<h5 class="text-center">¡Escríbenos!</h5>
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

							<br>

							<!-- G-Map Section Start Here -->
					        <div class="gmaps-section">
					            <div class="map-area">
					                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7976.5005521777675!2d-75.6028967!3d1.6064028000000068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMzYnMjMuMCJOIDc1wrAzNicxMC41Ilc!5e0!3m2!1ses!2sco!4v1625866633960!5m2!1ses!2sco" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					            </div>
					        </div>
					        <!-- G-Map Section Ending Here -->								
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Email Contact Mobile Section Ending Here -->

		<!-- Recent Case Section Start Here -->
		<section class="recent-case padding-tb" id="themplate">
			<div class="container">
				<div class="section-header">
					<h2>Plantillas</h2>
					<p>Tú Próximo WebSite Aquí! Seleccione la plantilla que más te guste y se acomode a tu presupuesto o contáctenos para más información.</p>
				</div>
				<div class="section-wrapper">
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/blog/junior/juniorp1.png" alt="Plantilla Junior P1">
							</div>
							<div class="lab-content">
								<h5><a href="juniorp1.php" target="_blank">Plantilla Junior P1</a></h5>
								<span>$15000 | <a href="shoptemplate.php" target="_blank">Comprar</a></span></span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/blog/junior/juniorp2.png" alt="Plantilla Junior P2">
							</div>
							<div class="lab-content">
								<h5><a href="portfolio-single.html">Plantilla Junior P2</a></h5>
								<span>$20000 | <a href="shoptemplate.php" target="_blank">Comprar</a></span></span>
							</div>
						</div>
					</div>
					<div class="lab-item-3">
						<div class="lab-inner">
							<div class="lab-thumb">
								<img src="assets/images/blog/junior/juniorp3.png" alt="Plantilla Junior P2">
							</div>
							<div class="lab-content">
								<h5><a href="portfolio-single.html">Plantilla Junior P3</a></h5>
								<span>$25000 | <a href="shoptemplate.php" target="_blank">Comprar</a></span></span>
							</div>
						</div>
					</div>
				</div>
					<div class="text-center">
						<a href="https://api.whatsapp.com/send?phone=573213323387&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20promociones%20de%20plantillas,%20planes%20y%20personalizados%20de%20p%C3%A1ginas%20web." class="lab-btn" target="_blank"><span>Contactar</span></a>
					</div>
			</div>
		</section>
		<!-- Recent Case Section Ending Here -->

		<!-- Pricing Table Section Start Here -->
		        <section class="pricing-table padding-tb bg_size" style="background-image: url(assets/css/bg-image/pricing-bg.jpg)" id="combo">
            <div class="container">
                <div class="section-header">
                    <h2>Nuestros Combos</h2>
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
                                    <h2>$125000 </h2>
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
                                    <a href="juniorp1.php" class="lab-btn" target="_blank"><span>Comprar</span></a>
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
                                    <h2>$205000 </h2>
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
                                    <a href="juniorp1.php" class="lab-btn" target="_blank"><span>Comprar</span></a>
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
                                    <h2>$275000 </h2>
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
                                    <a href="juniorp1.php" class="lab-btn" target="_blank"><span>Comprar</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- Pricing Table Section Ending Here -->

		<!-- Sponsor Section Start Here -->
		<div class="sponsor-section padding-tb">
			<div class="container">
			</div>
		</div>
		<!-- Sponsor Section Ending Here -->

		

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