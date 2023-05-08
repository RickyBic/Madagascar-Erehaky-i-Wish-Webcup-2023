<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Meet Particle Blog, one of the Best Modern Blog Designs and an Awesome HTML Theme. See it live now!">
	<meta name="author" content="Skilltech Web Design">
	<meta name="keywords" content="particle, blog html template, blog html theme, modern blog, beautiful blog, html, theme, template, particle html, modern, best html templates, skilltech, skilltech web design, creative html, skilltechwebdesign.com"/>

	<meta property="og:title" content="Meet Particle Blog, one of the Best Modern Blog Designs and an Awesome HTML Theme. See it live now!"/>
	<meta property="og:description" content="Perfectly Designed Beautiful, Clean and Modern Blog Designed for the Future. The Best Modern & Technology HTML Theme is here. Meet Particle!"/>
	<meta property="og:image" content="assets/images/facebook-post-img-1200x630-2021.jpg"/>
	<meta property="og:site_name" content="SkilltechWebDesign.com"/>

	<title>i-Wish - Prédictions.</title>

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
	<link href="{{ asset('assets/css/particle-blog.css') }}" rel="stylesheet">

	<!-- jQuery -->
	<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

	<!-- Simple Forms -->
	<!-- <link rel="stylesheet" href="assets/vendor/simple-forms/css/simple-forms-skilltech-mod.css"> -->

</head>

<body class="pa-blog pa-dark-mode">

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
			<li class="nav-item menu-item-has-children">
				<a class="nav-link hvr-underline-from-center" href="{{ route('indexuser') }}">Accueil</a>
				<ul class="pa-submenu-ul">
					<li class="nav-item"><a class="nav-link" href="{{ route('indexuser') }}#services">Onirix</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('indexuser') }}#about-us">À Propos</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('indexuser') }}#portfolio">Produits</a></li>
				</ul>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="{{ route('prediction') }}">Prédictions</a>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="#about-us">Abonnements</a>
			</li>

			<li class="nav-item">
				<a class="nav-link hvr-underline-from-center" href="{{ route('index') }}">Se Déconnecter</a>
			</li>
			<!-- Regular Menu Items End -->

		</ul>
	</nav>
	<!-- /.pa-menu -->


	<!-- Pushable Content
	================================================== -->	
	<div class="pushable-content">


		<!-- Hero Section
		================================================== -->
		<section id="top" class="pa-hero pa-blog-hero pa-centered-section pa-image-back position-relative" style="background-image: url(assets/images/hero-background.jpg);">

			<div class="pa-absolute-fill pa-gradient-back-v1"></div>

			<div class="container pa-supercontainer text-left">
				<div class="row pa-hero-typed-text">
					<div class="col-12 fadeInDelay03Duration10">
						<div class="typed-text">
							<span class="animated-text-effect2">
								<!-- <span class="typed-cursor">|</span> -->
							</span>
						</div>
						<h4 class="pa-h4-v1 pa-bright">Commencez la simulation</h4>
					</div>
				</div>
			</div>

		</section>
		<!-- /.pa-hero -->

			

			
		<!-- Posts Ticker & Top Search
		================================================== -->
		<section class="pa-blog-content pa-blog-ticker">
			<div class="container pa-supercontainer">
				<div class="row position-relative pa-ticker-wrapper">

                    <p><a class="moretag pa-hvr-sweep-to-right" href="#" onclick="show(1);">Description</a> <a class="moretag pa-hvr-sweep-to-right" href="#" onclick="show(0);" style="right: auto;">Fichier dream</a></p>


				</div>
			</div>
		</section>
		<!-- /.pa-blog-ticker -->

			
		<!-- Blog - Featured Content
		================================================== -->
		<section class="pa-blog-content pa-blog-featured">
			<div class="container pa-supercontainer">

				<!-- Featured Posts -->
				<div class="row">

					<!-- Featured - Headliner Post -->
					<div class="col-12 col-lg-6">
						<!-- Article -->
						<div class="pa-blog-article-flex-wrapper pa-featured pa-featured-headliner">
							<div class="pa-article-magazine">
								<h6 id="title" class="widget_title">Décrivez votre rêve :</h6>
								<br/>
								<form id="contact-form-1" class="pa-form-on-white" enctype='multipart/form-data' action="{{ route('predire') }}" method="post">
									@csrf
									<div id="desc" class="form-group">
										<textarea name="name" class="validate-name" style="height: 200px;"></textarea>
									</div>

									<div id="file" class="form-group" style="display: none;">
										<div class="post-excerpt">
											<p>Un fichier ".dream" est un fichier qui provient de votre appareil "Dreamer". Il stocke votre rêve dans ce fichier et grâce à Onirix, vous pouvez, non seulement prédire vos rêves mais aussi le décoder et le retranscrire en vidéo.</p>
										</div>
										<input id="mon-input-file" type="file" name="avatar" value="" class="validate-name">
									</div>

									<div class="form-submit">
										<button type="submit" class="pa-hvr-sweep-to-right">Prédire</button>
									</div>

									<div class="server-response"></div>

								</form>
								<br/>
								<div style="display: none;" id="video">
									<a class="moretag pa-hvr-sweep-to-right" href="#" onclick="verif();">Voir la vidéo</a>
								</div>
								
							</div>
							<div class="post-image" id="videoPlay" style="display: none;">
								<div class="post-image-inner">
									<video controls style="width: 1100px;height: 500px;">
										<source src="{{ asset('assets/video/rêve.mp4') }}" type="video/mp4">
										Votre navigateur ne supporte pas l'élément vidéo.
									</video>
								</div>
							</div>
						</div><!-- pa-blog-article-flex-wrapper -->
					</div>

				</div>

				<!-- Decoration -->
				<hr class="pa-divider pa-gradient-back-v1 mb-4">

			</div>
		</section>
		<!-- /.pa-blog-featured -->

		@if(session()->has("success"))
		<!-- Main - Blog Feed and Sidebar
		================================================== -->
		<section class="pa-blog-content pa-blog-main-content pa-blog-feed pa-blog-style-v3-classic">
			<div class="container pa-supercontainer">
				<div class="row">
				

					<!-- Blog Feed Column
					================================================== -->
					<div class="col-12 col-md-8 col-xl-9 pa-feed-col">


						<!-- Articles Wrapper
						================================================== -->
						<div class="d-flex pa-articles-wrapper">


							<!-- Article
							================================================== -->
							<div class="pa-blog-article-flex-wrapper">
								<div class="pa-article-magazine">
									<article class="post type-post format-standard has-post-thumbnail hentry">

										
										<h4 id="title" class="widget_title" style="font-size: xx-large;color: aqua;">Texte</h4>

										<div class="pa-post-info">

											<div class="post-excerpt">
												<br/>
												<p>Bonjour Sarah! En analysant votre rêve, si je pars sur le fait que vous éprouvez des sentiments amoureuses pour Mathieu en ce moment, alors j'en déduis que vous et Mathieu allez prochainement vous rencontrer dans un endroit que vous connaissez très bien et que vous allez passer de bons moments ensemble tous les deux. Ceci étant dis, dans le cas où vous n'éprouvez aucuns sentiments pour lui, alors votre rêve signifie juste que Mathieu pense sûrement à un plan pour vous emmener quelques part dans un futur proche.</p>
											</div>
										</div>
										
									</article>
								</div>
							</div>
							<!-- /.pa-blog-article-flex-wrapper -->
							<br/>


							<!-- Article
							================================================== -->
							<div class="pa-blog-article-flex-wrapper">
								<div class="pa-article-magazine">
									<article class="post type-post format-video has-post-thumbnail hentry">

										<h4 id="title" class="widget_title" style="font-size: xx-large;color: aqua;">Video</h4>
										<br/>
										<div class="post-image">
											<i class="fa pa-pformat-icon fa-play-circle"></i>
											<div class="post-image-inner">
												<video controls style="width: 1060px;">
													<source src="{{ asset('assets/video/Prédict.mp4') }}" type="video/mp4">
													Votre navigateur ne supporte pas l'élément vidéo.
												</video>
											</div>
										</div>

										

									</article>
								</div>
							</div>
							<!-- /.pa-blog-article-flex-wrapper -->
							<br/>

							<!-- Article
							================================================== -->
							<div class="pa-blog-article-flex-wrapper">
								<div class="pa-article-magazine">
									<article class="post type-post format-audio has-post-thumbnail hentry">

										<h4 id="title" class="widget_title" style="font-size: xx-large;color: aqua;">Audio</h4>
										<br/>
										<div class="post-image">
											<i class="fa pa-pformat-icon fa-headphones"></i>
											<div class="post-image-inner">
												<audio controls>
													<source src="{{ asset('assets/audio/rêve.mp3') }}" type="audio/mpeg">
													Votre navigateur ne supporte pas l'élément audio.
												</audio>
											</div>
										</div>

										

									</article>
								</div>
							</div>
							<!-- /.pa-blog-article-flex-wrapper -->

						</div>
						<!-- /.pa-articles-wrapper -->
						
					</div>
					<!-- /.pa-feed-col -->


					<!-- Sidebar Column
					================================================== -->
					<aside class="col-12 col-md-4 col-xl-3">
						
					</aside>
					<!-- /Sidebar -->
				
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container .pa-supercontainer .pa-blog -->

		</section>
		<!-- /.pa-blog-main-content -->
        @endif

	</div>
	<!-- /.pushable-content -->

	<!-- Helper div for inserting before scripts
	================================================== -->
	<div class="pa-body-end"></div>


	<!-- Scripts / Body End
	================================================== -->
	<!-- Vendor Scripts -->
	<script>
		function show($var)
		{
			if($var === 0)
			{
				document.getElementById('desc').style.display='none';
				document.getElementById('file').style.display='block';
				document.getElementById('video').style.display='block';
				document.getElementById('title').innerHTML='Fichier (.dream)';
			}
			else if($var === 1)
			{
				document.getElementById('desc').style.display='block';
				document.getElementById('file').style.display='none';
				document.getElementById('video').style.display='none';
				document.getElementById('title').innerHTML='Description';
			}
		}
		function verif()
		{
			let input = document.getElementById("mon-input-file");
			if (input.files.length === 0) {
			alert("Le champ input est vide");
			} else {
				document.getElementById('video').style.display='none';
				input = document.getElementById("videoPlay").style.display='block';
			}
		}
	</script>
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
	<script src="{{ asset('assets/js/page-blog.js') }}"></script>

</body>

</html>