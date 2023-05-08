<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Meet Particle, one of the Best HTML Templates with Modern & Tech Design. See it live now!">
	<meta name="author" content="Skilltech Web Design">
	<meta name="keywords" content="particle, particles js html, particle html, technology html, modern html, best project presentation, project design, portfolio item design, best websites, skilltech, skilltech web design, creative html, animated html, portfolio html, skilltechwebdesign.com"/>

	<meta property="og:title" content="This Modern, Tech & Startup HTML Theme will blow your mind!"/>
	<meta property="og:description" content="See the live interactive backgrounds react to your mouse movement and more. The Best Modern & Technology HTML Theme is here. Meet Particle!"/>
	<meta property="og:image" content="assets/images/facebook-post-img-1200x630-2021.jpg"/>
	<meta property="og:site_name" content="SkilltechWebDesign.com"/>

	<title>i-Wish - Achat produit.</title>

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
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- jQuery -->
	<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

	<!-- Simple Forms -->
	<!-- <link rel="stylesheet" href="assets/vendor/simple-forms/css/simple-forms-skilltech-mod.css"> -->

</head>

<body class="pa-project-item single">

	<!-- Page Transitions
	================================================== -->
	<div class="pa-page-transition pa-page-transition-1 is-active"></div>
	<div class="pa-overlay" style="position: fixed; top: 0; left: 0; z-index: 10002; width: 100vw; height: 100vh; pointer-events: none; background: #091019;"></div>

	<!-- Navigation Menu
	================================================== -->
	<a class="pa-mobile-main-logo" href="index.html"><img alt="" src="{{ asset('assets/images/logo-normal.png') }}"></a>

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
				<a class="nav-link hvr-underline-from-center" href="{{ route('index') }}#services">Onirix</a>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="{{ route('index') }}#about-us">À Propos</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="{{ route('index') }}#portfolio">Produits</a>
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
	<section id="top" class="pa-hero pa-blog-hero pa-centered-section pa-image-back position-relative" style="background-image: url({{ asset('assets/images/hero-background.jpg') }});">

		<div class="pa-absolute-fill pa-gradient-back-v1"></div>

		<div class="container pa-supercontainer text-left">
			<div class="row pa-hero-typed-text">
				<div class="col-12 fadeInDelay03Duration10">
					<div class="typed-text">
						<span class="animated-text-effect">
							<!-- <span class="typed-cursor">|</span> -->
						</span>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /.pa-hero -->


	<!-- Project Content Section
	================================================== -->
	<section id="project-info" class="pa-project-content" data-parallax="scroll" data-speed="0" data-image-src="{{ asset('assets/images/portrait-jeune-homme-afro-americain-lunettes-vr.jpg') }}">
		<div class="container">
			<div class="row">
				<!-- Left Side - About & Links -->
				<div class="col-12 col-xl-7 text-left">
					<h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong>{{ $produit->titre }}</strong></h1>
					<p class="pa-p-v1 pa-bright fadeInDelay03Duration10">{{ $produit->description }}</p>
					<div class="row pa-project-links">
						<!-- Use either FontAwesome or MaterialIcons icons (examples below) -->
						<div class="col-12 col-md-7">
							<h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong>Prix</strong> : {{ $produit->prix }} $</h1>
							<!-- Mind the "title" in icon links -->
						</div>
						<div class="col-12 col-md-5">
							<h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong>Quantité restante</strong> : {{ $produit->quantite }}</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row overflow-hidden">
				<div class="col slideDownDelay10Duration10">

					<!-- Real Working Form - Simple Forms V3 -->
					<div class="container">
						<div class="row">
							<div class="col-12 mt-4">
								<div class="card p-3">
									<p class="mb-0 fw-bold h4">Méthodes de paiement</p>
								</div>
							</div>
							<div class="col-12">
								<div class="card p-3">
									<div class="card-body border p-0">
										<p>
											<a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
												data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true"
												aria-controls="collapseExample1">
												<span class="fw-bold">PayPal</span>
												<span class="fab fa-cc-paypal">
												</span>
											</a>
										</p>
										<div class="collapse p-3 pt-0" id="collapseExample1">
											<div class="row">
												<div class="col-8">
													<p class="h4 mb-0">Résumé</p>
													<p class="mb-0"><span class="fw-bold">Produit:</span><span class="c-green">: Dreamer OPL-400 prime</span></p>
													<p class="mb-0"><span class="fw-bold">Prix:</span><span
															class="c-green">:320.00$</span></p>
													<p class="mb-0">Paiement par Paypal</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body border p-0">
										<p>
											<a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
												data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true"
												aria-controls="collapseExample2">
												<span class="fw-bold">Carte de crédit</span>
												<span class="">
													<span class="fab fa-cc-amex"></span>
													<span class="fab fa-cc-mastercard"></span>
													<span class="fab fa-cc-discover"></span>
												</span>
											</a>
										</p>
										<div class="collapse show p-3 pt-0" id="collapseExample2">
											<div class="row">
												<div class="col-lg-5 mb-lg-0 mb-3">
													<p class="h4 mb-0">Résumé</p>
													<p class="mb-0"><span class="fw-bold">Produit:</span><span class="c-green">: {{ $produit->titre }}</span>
													</p>
													<p class="mb-0">
														<span class="fw-bold">Prix:</span>
														<span class="c-green">:{{ $produit->prix }}$</span>
													</p>
													<p class="mb-0">Paiement par carte de crédit. Ajoutez vos informations.</p>
												</div>
												<div class="col-lg-7">
													<form action="{{ route('produit.buy', ['produit'=>$produit->id]) }}" method="GET" class="form">
														@csrf
														<div class="row">
															<div class="col-12">
																<div class="form__div">
																	<input type="text" class="form-control" placeholder=" ">
																	<label for="" class="form__label">Numéro de la carte</label>
																</div>
															</div>
				
															<div class="col-6">
																<div class="form__div">
																	<input type="text" class="form-control" placeholder=" ">
																	<label for="" class="form__label">MM / yy</label>
																</div>
															</div>
				
															<div class="col-6">
																<div class="form__div">
																	<input type="password" class="form-control" placeholder=" ">
																	<label for="" class="form__label">code cvv</label>
																</div>
															</div>
															<div class="col-12">
																<div class="form__div">
																	<input type="text" class="form-control" placeholder=" ">
																	<label for="" class="form__label">nom sur la carte</label>
																</div>
															</div>
															<div class="col-12">
																<input type="submit" class="btn btn-primary w-100" value="Valider">
															</div>
														</div>
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
		</div>
		
	</section>
	<!-- /.pa-project-content -->



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
	<script src="{{ asset('assets/js/page-portfolio-item.js') }}"></script>
	<script src="{{ asset('assets/js/page-blog.js') }}"></script>

</body>

</html>