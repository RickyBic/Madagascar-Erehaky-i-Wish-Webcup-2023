<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Meet Particle Dark, one of the Best Dark HTML Templates with Modern, Tech & Startup Style. See it live now!">
	<meta name="author" content="Skilltech Web Design">
	<meta name="keywords" content="particle, youtube video background, html template, hero youtube video, dark html themes, dark html templates, technology html, modern html, dark, theme, template, skilltech web design, creative html, youtube video html theme, skilltechwebdesign.com"/>

	<meta property="og:title" content="This Dark YouTube Video Background Particles HTML Theme will blow your mind!"/>
	<meta property="og:description" content="Meet Particle Dark, one of the Best Dark HTML Templates with Modern, Tech & Startup Style. See it live now!"/>
	<meta property="og:image" content="assets/images/facebook-post-img-1200x630-2021.jpg"/>
	<meta property="og:site_name" content="SkilltechWebDesign.com"/>

	<title>i-Wish - Accueil.</title>

	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Play:wght@400;700&family=Source+Sans+Pro:ital,wght@0,300;1,300&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,700;0,900;1,200;1,300;1,400&family=Blinker:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
	<!-- Icon Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Animate.css -->
	<link href="{{ asset('assets/vendor/animate/animate.min.css') }}" rel="stylesheet">
	<!-- Off Canvas Menu - Default Theme -->
	<link href="{{ asset('assets/vendor/offcanvas-nav/hc-offcanvas-nav.css') }}" rel="stylesheet" />

	<!-- Particle Theme CSS -->
	<link href="{{ asset('assets/css/particle-theme.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/particle-colors.css') }}" rel="stylesheet">

	<!-- jQuery -->
	<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

	<!-- Simple Forms -->
	<!-- <link rel="stylesheet" href="assets/vendor/simple-forms/css/simple-forms-skilltech-mod.css"> -->

</head>

<body class="pa-homepage pa-dark">

	<!-- Page Transitions
	================================================== -->
	<div class="pa-page-transition pa-page-transition-1 is-active"></div>
	<div class="pa-overlay" style="position: fixed; top: 0; left: 0; z-index: 10002; width: 100vw; height: 100vh; pointer-events: none; background: #091019;"></div>

	<!-- Navigation Menu
	================================================== -->
	<a class="pa-mobile-main-logo" href="#"><img alt="" src="{{ asset('assets/images/I-Wish (Blanc).png') }}"></a>

	<nav id="main-nav" class="pa-menu navbar pa-navbar navbar-expand-lg navbar-dark bg-transparent static-top">

		<!-- Desktop Menu Logo -->
		<a class="navbar-brand" href="#" style="margin-left: 50px;"><img alt="" src="{{ asset('assets/images/I-Wish (Blanc).png') }}"></a>

		<!-- The Menu -->
		<ul class="navbar-nav ml-auto">

			<!-- Mobile Menu Logo (only use if "close" buttons are set to false in JS) -->
			<li data-nav-custom-content class="custom-content pa-mobile-menu-logo"> 
				<a class="pa-mobile-navbar-brand" href="#"><img alt="" src="{{ asset('assets/images/I-Wish (Blanc mobil).png') }}"></a>
			</li>

			<!-- Regular Menu Items Start -->
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="{{ route('index') }}">Accueil</a>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="#services">Onirix</a>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="#about-us">À Propos</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="#portfolio">Produits</a>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="{{ route('login') }}">Se Connecter</a>
			</li>

			<!-- Regular Menu Items End -->

		</ul>
	</nav>
	<!-- /.pa-menu -->


	<!-- Hero Section
	================================================== -->
	<section id="top" class="pa-hero pa-centered-section pa-full-height pa-image-back pushable-content bg-transparent">

		<div class="pa-youtube-container">
			<div class="pa-pattern-overlay" style="opacity: 37%;"></div>
			<div class="pa-absolute-fill pa-gradient-back-v1" style="opacity: 0;"></div>
			<div id="pa-yt-video-background" class="youtube-video mute" data-youtube-video-id="EP_GjzLq4WY"></div>
		</div>
		<div id="particles-js"></div>

		<div class="container pa-hero-content text-center position-relative">
			<div class="row pa-hero-typed-text">
				<div class="col-12">
					<div class="typed-text mega-typed">
						<span class="animated-text-effect">
							<!-- <span class="typed-cursor">|</span> -->
						</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="max-width: 976px; margin: 0 auto;">
					<h2 class="pa-h2-v2-hero-subhead pa-white">L'avenir se trouve dans votre tête. Faites connaisance avec <strong>Onirix</strong> pour le décoder.</h2>
				</div>
			</div>
			<a href="#services" class="pa-show-more-arrow fadeInDelay15Duration10">
				<span><i class="fa fa-angle-down bounceDelay35Duration12"></i></span>
			</a>
		</div>

	</section>
	<!-- /.pa-hero -->


	<!-- CTA Section
	================================================== -->
	<section class="pa-cta-v1" data-parallax="scroll" data-speed="0.2" data-image-src="{{ asset('assets/images/shutterstock_1569244930-scaled-1.jpg') }}">
			<div class="container  col-11 col-xl-7 offset-xl-2">
				<h1 class="pa-h1-v1 pa-bright fadeInLeftDelay03Duration10" style="color: aquamarine;"><strong> Onirix</strong></h1>
				<span class="animated-text-effect2" style="color: white;font-size: x-large;font-style: italic;">
					<!-- <span class="typed-cursor">|</span> -->
				</span>
			
			</div>
	</section>
	<!-- /.pa-cta-v1 -->
	
	<section id="portfolio" class="pa-portfolio">
		<!-- Portfolio header -->
		<div class="container-fluid text-center p-0">
			<div class="row m-0">
				<div class="col-12 p-0">
					<div class="pa-stripe-heading">
						<h1 class="pa-h1-v1 pa-bright fadeInLeftDelay03Duration10"><strong>Nos Produits disponibles</strong></h1>
					</div>
					<div class="pa-stripe-subheading">
						<p class="pa-p-v2 pa-bright fadeInLeftDelay03Duration10">L'invention du <strong>DreamER</strong> fut un pas de géant dans l'évolution technologique et surtout dans le domaine du rêve et des prédictions. Elle consiste à stocker vos rêves dans un fichier au format <string>".dream"</string><br>
						Voici nos modèles.</p>
					</div>	
				</div>
			</div>
		</div>
		<!-- Portfolio thumbnails -->
		<div class="container-fluid">
			<div class="row pa-row-max2560">
                @foreach($produits as $produit)
				<div class="col-12 col-sm-6 col-lg-3 p-0">
					<div class="pa-portfolio-thumb m-0 text-center fadeInDelay00Duration10" style="background-image: url(assets/images/{{ $produit->image }});">
						<div class="pa-portfolio-thumb-background-overlay"></div>
						<div class="pa-portfolio-thumb-deco-1"></div>
						<div class="pa-portfolio-thumb-deco-2"></div>
						<div class="pa-portfolio-thumb-centered-content w-100">
							<a href="{{ route('produit.details', ['produit'=>$produit->id]) }}" class="pa-portfolio-thumb-icon-link">
								<span class="pa-portfolio-thumb-hover-icon"><i class="fa fa-eye"></i></span>
							</a>
							<a href="{{ route('produit.details', ['produit'=>$produit->id]) }}">
								<h4 class="pa-portfolio-thumb-heading">{{ $produit->titre }}</h4>
							</a>
							<p class="pa-portfolio-thumb-desc"><strong>{{ $produit->prix }}</strong> $</p>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>	


	<!-- About Us Section
	================================================== -->
	<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">

		<div class="container">
			<!-- Section Header -->
			<div class="row">
				<div class="col-12 col-xl-10 offset-xl-1">

					<div class="post-image">
						<i class="fa pa-pformat-icon fa-play-circle"></i>
						<div class="post-image-inner">
							<video controls style="width: 1000px;">
								<source src="{{ asset('assets/video/I-I-Reve.mp4') }}" type="video/mp4">
								Votre navigateur ne supporte pas l'élément vidéo.
							</video>
						</div>
					</div>
					<br/>
					<h1 class="pa-h1-v2 pa-bright fadeInDelay00Duration10"><strong>Institut Internationnal des Rêves</strong>?</h1>
					<p style="font-size: larger;color: white;">
						L'Institut International des Rêves est un projet passionnant qui vise à explorer le monde fascinant de nos rêves 
						et à comprendre leur impact sur nos vies. Ce centre de recherche innovant sera dédié à l'étude de la science 
						des rêves, à la découverte des symboles oniriques et à la recherche de moyens de mieux comprendre et 
						d'interpréter nos rêves.</p>
						
						<p style="font-size: larger;color: white;">Notre institut sera un lieu de rassemblement pour les chercheurs, les professionnels de la santé mentale et 
						les passionnés de rêves du monde entier. Nous offrirons des programmes de recherche avancés, des conférences 
						et des séminaires pour aider à élargir la compréhension du domaine des rêves et de la psychologie du sommeil. 
						Nous travaillerons également en étroite collaboration avec des centres de recherche de renom dans le monde 
						entier pour mener des projets de recherche interdisciplinaires sur les rêves.</p>
						
						<p style="font-size: larger;color: white;">En plus de nos programmes de recherche, l'Institut International des Rêves offrira des services de conseil et 
						de formation pour aider les individus à comprendre et à interpréter leurs propres rêves. Nous offrirons 
						également des programmes éducatifs pour les professionnels de la santé mentale, les éducateurs et les personnes 
						intéressées par le domaine des rêves.</p>
						
						<p style="font-size: larger;color: white;">Notre institut sera doté d'une équipe de chercheurs de renom, de conseillers et d'enseignants qui travailleront 
						ensemble pour aider à améliorer notre compréhension des rêves et leur impact sur notre 
						bien-être mental et physique. Nous sommes impatients d'ouvrir les portes de l'Institut International des Rêves 
						et d'accueillir des personnes du monde entier pour partager leur passion pour les rêves et leur désir d'en savoir 
						plus sur leur signification.</p>
				
				</div>
			</div>
			<div class="row">
				<!-- Icon list (no column) -->
				<ul class="pa-icon-list-horizontal-dark">
					<li>
						<span class="pa-icon-list-icon fadeInDelay03Duration10"><i class="material-icons">beenhere</i></span>
						<p class="pa-icon-list-text pa-p-v1 pa-bright fadeInDelay03Duration10">Mondialement connu</p>
					</li>
					<li>
						<span class="pa-icon-list-icon fadeInDelay06Duration10"><i class="material-icons">comment</i></span>
						<p class="pa-icon-list-text pa-p-v1 pa-bright fadeInDelay06Duration10">Support 24h/24</p>
					</li>
					<li>
						<span class="pa-icon-list-icon fadeInDelay10Duration10"><i class="material-icons">insert_chart</i></span>
						<p class="pa-icon-list-text pa-p-v1 pa-bright fadeInDelay10Duration10">Locaux à l'Océan Indien</p>
					</li>
				</ul>
			</div>
			<!-- Bottom Images -->
			<div class="row">
				<div class="col-12 pa-about-us-bottom-images">
					<img alt="" class="pa-about-img-left fadeInRight--Custom" src="{{ asset('assets/images/Tab-left.png') }}">
					<img alt="" class="pa-about-img-center slideup" src="{{ asset('assets/images/Tab-centre.png') }}">
					<img alt="" class="pa-about-img-right fadeInLeft--Custom" src="{{ asset('assets/images/Tab-right.png') }}">
				</div>
			</div>
		</div>

	</section>
	<!-- /.pa-about-us -->


	<!-- Stripe Tagline Section
	================================================== -->
	<!-- /.pa-stripe-tagline -->


	<!-- Services (What We Do) Section
	================================================== -->
	<section id="services" class="pa-what-we-do pa-standard-section pa-dark text-center">

		<div class="post-image">
			<i class="fa pa-pformat-icon fa-play-circle"></i>
			<div class="post-image-inner">
				<video controls style="width: 1000px;">
					<source src="{{ asset('assets/video/ONIRIX presentaion.mp4') }}" type="video/mp4">
					Votre navigateur ne supporte pas l'élément vidéo.
				</video>
			</div>
		</div>
		<div class="container">
			<!-- Section Header -->
			<div class="row">
				<div class="col-12 col-xl-10 offset-xl-1">

					<h1 class="pa-h1-v2 pa-bright fadeInDelay00Duration10">Qui est <strong>Onirix?</strong></h1>
					<p class="pa-p-v1 pa-bright fadeInDelay03Duration10">Découvrez ces caractéristiques hors norme.</p>
				
				</div>
			</div>
			<!-- Services with phone section -->
			<div class="row pa-services text-center">
				<div class="col-12 col-sm-10 offset-sm-1 col-md-4 offset-md-0 offset-lg-0 col-lg-4 order-2 order-md-1 text-center">
					<ul class="pa-services-ul pa-right text-md-right text-left">
						<li>
							<a href="service-item.html">
								<span class="pa-serv-list-icon fadeInDelay03Duration10"><i class="material-icons">create</i></span>
								<h3 class="pa-h3-v1 pa-bright fadeInDelay03Duration10">Apprentissage automatique</h3>
								<p class="pa-p-v1 pa-bright fadeInDelay03Duration10">Capable d'apprendre automatiquement, évolutif.</p>
							</a>
						</li>
						<li>
							<a href="service-item.html">
								<span class="pa-serv-list-icon fadeInDelay06Duration10"><i class="material-icons">screen_share</i></span>
								<h3 class="pa-h3-v1 pa-bright fadeInDelay06Duration10">Prise de décision</h3>
								<p class="pa-p-v1 pa-bright fadeInDelay06Duration10">Capable de prendre des décisions.</p>
							</a>
						</li>
						<li>
							<a href="service-item.html">
								<span class="pa-serv-list-icon fadeInDelay10Duration10"><i class="material-icons">phonelink</i></span>
								<h3 class="pa-h3-v1 pa-bright fadeInDelay10Duration10">Système expert</h3>
								<p class="pa-p-v1 pa-bright fadeInDelay10Duration10">Efficacité du système et du moteur intelligente.</p>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-md-4 order-1 order-md-2">
					<img alt="" class="pa-services-image" src="{{ asset('assets/images/exemple.png') }}">
				</div>
				<div class="col-12 col-sm-10 offset-sm-1 col-md-4 offset-md-0 offset-lg-0 col-lg-4 order-3 order-md-3 text-center">
					<ul class="pa-services-ul pa-left text-left">
						<li>
							<a href="service-item.html">
								<span class="pa-serv-list-icon fadeInDelay03Duration10"><i class="material-icons">linked_camera</i></span>
								<h3 class="pa-h3-v1 pa-bright fadeInDelay03Duration10">Reconnaisance des images et des sons</h3>
								<p class="pa-p-v1 pa-bright fadeInDelay03Duration10">Reconnait les images et les sons.</p>
							</a>
						</li>
						<li>
							<a href="service-item.html">
								<span class="pa-serv-list-icon fadeInDelay06Duration10"><i class="material-icons">mic</i></span>
								<h3 class="pa-h3-v1 pa-bright fadeInDelay06Duration10">Reconnaisance vocale</h3>
								<p class="pa-p-v1 pa-bright fadeInDelay06Duration10">Reconnait les données audios</p>
							</a>
						</li>
						<li>
							<a href="service-item.html">
								<span class="pa-serv-list-icon fadeInDelay10Duration10"><i class="material-icons">play_circle_filled</i></span>
								<h3 class="pa-h3-v1 pa-bright fadeInDelay10Duration10">Automatisation</h3>
								<p class="pa-p-v1 pa-bright fadeInDelay10Duration10">Agit automatiquement sans besoin d'instruction</p>
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>

		<div class="container">
			<!-- Section Header -->
			<div class="row">
				<div class="col-12 col-xl-10 offset-xl-1 text-center">
					<h5 class="pa-h1-v3 pa-bright pt-4 pb-1 mb-4 fadeInDelay03Duration10">Ses <strong>Compétences</strong></h5>
					<p class="pa-p-v1 pa-bright fadeInDelay03Duration10" style="font-style: italic;">"Voyez l'évolution de mes compétences."</p>
				</div>
			</div>

			<div class="row pa-skills-row">
				<div class="col-12">
					<div class="pa-skill-warp">
						<p class="pa-skill-name pa-skill-el">Apprentissage automatique</p>
						<div class="pa-skill-area pa-skill-el">
							<div class="pa-skill-bar progressBar" style="width: 80%;"></div>
						</div>
						<p class="pa-skill-number pa-skill-el"><span class="pa-counterskills">80</span><span class="fadeInDelay10Duration10">%</span></p>
					</div>
					<div class="pa-skill-warp">
						<p class="pa-skill-name pa-skill-el">Prise de décision</p>
						<div class="pa-skill-area pa-skill-el">
							<div class="pa-skill-bar progressBar" style="width: 60%;"></div>
						</div>
						<p class="pa-skill-number pa-skill-el"><span class="pa-counterskills">60</span><span class="fadeInDelay10Duration10">%</span></p>
					</div>
					<div class="pa-skill-warp">
						<p class="pa-skill-name pa-skill-el">Système expert</p>
						<div class="pa-skill-area pa-skill-el">
							<div class="pa-skill-bar progressBar" style="width: 75%;"></div>
						</div>
						<p class="pa-skill-number pa-skill-el"><span class="pa-counterskills">75</span><span class="fadeInDelay10Duration10">%</span></p>
					</div>
					<div class="pa-skill-warp">
						<p class="pa-skill-name pa-skill-el">Reconnaisance des images et des sons</p>
						<div class="pa-skill-area pa-skill-el">
							<div class="pa-skill-bar progressBar" style="width: 95%;"></div>
						</div>
						<p class="pa-skill-number pa-skill-el"><span class="pa-counterskills">95</span><span class="fadeInDelay10Duration10">%</span></p>
					</div>
					<div class="pa-skill-warp">
						<p class="pa-skill-name pa-skill-el">Reconnaisance vocale</p>
						<div class="pa-skill-area pa-skill-el">
							<div class="pa-skill-bar progressBar" style="width: 95%;"></div>
						</div>
						<p class="pa-skill-number pa-skill-el"><span class="pa-counterskills">95</span><span class="fadeInDelay10Duration10">%</span></p>
					</div>
				</div>
			</div>
			
		</div>
	</section>


	<!-- Second CTA Section
	================================================== -->
	<section class="pa-cta-v2 pa-centered-section pa-image-back" style="background-image: url({{ asset('assets/images/low-poly.jpg') }});">

		<div class="pa-absolute-fill pa-gradient-back-v1"></div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-10 offset-xl-1 text-center">
					<h1 class="pa-h1-v2 pa-bright fadeInDelay00Duration10">Essayez <strong>Onirix</strong> dès-maintenant!</h1>
					<p class="pa-p-v1 pa-white fadeInDelay03Duration10">Mettez à sa disposition vos rêves et laissez-le vous prédire l'avenir. Connectez-vous ou inscrivez-vous dès maintenant!</p>
					<a class="pa-button-secondary pa-hvr-sweep-to-right fadeInRightDelay11Duration10" href="{{ route('login') }}" target="_blank">Se Connecter</a>
				</div>
				<img alt="Animation GIF" class="pa-about-img-left fadeInRight--Custom" src="{{ asset('assets/images/bot.gif') }}" style="margin-left: 140px;">
			</div>
		</div>

	</section>
	<!-- /.pa-cta-v2 -->


	<!-- Helper div for inserting before scripts
	================================================== -->
	<div class="pa-body-end"></div>


	<!-- Scripts / Body End
	================================================== -->
	<!-- Vendor Scripts -->
	<script src="{{ asset('assets/vendor/jquery/jquery-migrate.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/offcanvas-nav/hc-offcanvas-nav.js') }}"></script>
	<script src="{{ asset('assets/vendor/parallax/parallax.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/typed/typed.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/particles/particles.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/waypoints/waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/counterup/jquery.counterup.min.js') }}"></script>

	<!-- Delivery Form Scripts -->
	<!-- <script src="assets/vendor/simple-forms/js/simple-forms-translations.js"></script> -->
	<!-- <script src="assets/vendor/simple-forms/js/simple-forms.min.js"></script> -->
	<!-- <script src="assets/js/form.js"></script> -->

	<!-- Theme Scripts and Inits -->
	<script src="{{ asset('assets/js/particle-theme.js') }}"></script>
	<script src="{{ asset('assets/js/youtube-video.js') }}"></script>
	<script src="{{ asset('assets/js/page-home-dark.js') }}"></script>

</body>

</html>