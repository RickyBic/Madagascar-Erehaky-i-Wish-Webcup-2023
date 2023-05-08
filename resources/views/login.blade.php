<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Meet Particle Dark, one of the Best Dark HTML Templates with Modern, Tech & Startup Style. See it live now!">
    <meta name="author" content="Skilltech Web Design">
    <meta name="keywords"
        content="particle, youtube video background, html template, hero youtube video, dark html themes, dark html templates, technology html, modern html, dark, theme, template, skilltech web design, creative html, youtube video html theme, skilltechwebdesign.com" />

    <meta property="og:title" content="This Dark YouTube Video Background Particles HTML Theme will blow your mind!" />
    <meta property="og:description"
        content="Meet Particle Dark, one of the Best Dark HTML Templates with Modern, Tech & Startup Style. See it live now!" />
    <meta property="og:image" content="{{ asset('assets/images/facebook-post-img-1200x630-2021.jpg') }}" />
    <meta property="og:site_name" content="SkilltechWebDesign.com" />

    <title>i-Wish - Se connecter.</title>

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Play:wght@400;700&family=Source+Sans+Pro:ital,wght@0,300;1,300&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,700;0,900;1,200;1,300;1,400&family=Blinker:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">
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

    <!-- Contact Us Section
	================================================== -->
    <section id="contact-us" class="pa-contact-us" data-parallax="scroll" data-speed="0"
        data-image-src="{{ asset('assets/images/contact-hero.jpg') }}">

        <div class="container">
            <!-- Section Header -->
            <div class="row text-center">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <h1 class="pa-h1-v2 pa-bright fadeInDelay00Duration10">Se <strong>Connecter</strong></h1>
                    <p class="pa-p-v1 pa-white fadeInDelay03Duration10">
                        i-Wish , rêvons plus grand.
                    </p>
                    <div class="pt-0 pt-sm-3 pt-md-3 pt-lg-4 pt-xl-5"></div>
                </div>
            </div>
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-md-6 col-xl-5 offset-xl-1 pa-contact-info d-flex">
                    <div class="pa-glass pa-left">
                        <h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10">Nos <strong>Infos</strong></h1>
                        <p class="pa-p-v1 pa-white fadeInDelay03Duration10"><span><i
                                    class="material-icons">mail_outline</i></span>e-rehaky@gmail.com</p>
                        <p class="pa-p-v1 pa-white fadeInDelay06Duration10"><span><i
                                    class="material-icons">call</i></span>+261349472576</p>
                        <p class="pa-p-v1 pa-white fadeInDelay10Duration10"><span><i
                                    class="material-icons">business</i></span>LOT AK07 Ilafy</p>
                        <p class="pa-p-v1 pa-white fadeInDelay10Duration10"><span><i
                                    class="material-icons">location_on</i></span>Ankadikely Ilafy</p>
                        <div class="pa-social-section">
                            <h1 class="pa-h1-v3 pa-bright fadeInDelay03Duration10"><strong>Trouvez-nous</strong> sur
                            </h1>
                            <a class="pa-social-icons" href="#" target="_blank"><span class="fadeInDelay03Duration10"><i
                                        class="fa fa-facebook"></i></span></a>
                            <a class="pa-social-icons" href="#" target="_blank"><span class="fadeInDelay03Duration10"><i
                                        class="fa fa-behance"></i></span></a>
                            <a class="pa-social-icons" href="#" target="_blank"><span class="fadeInDelay03Duration10"><i
                                        class="fa fa-dribbble"></i></span></a>
                            <a class="pa-social-icons" href="#" target="_blank"><span class="fadeInDelay03Duration10"><i
                                        class="fa fa-instagram"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-12 col-md-6 col-xl-5 pa-contact-form d-flex justify-content-end">
                    <div class="pa-glass pa-right">

                        <!-- Real Working Form - Simple Forms V3 -->
                        <div class="sf-wrapper">
                            <form id="contact-form-1" method="POST" action="{{ route('utilisateur.login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="admin@gmail.com" class="validate-email" value="">
                                </div>

                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" value="admin" name="motdepasse" value="">
                                </div>

                                @if(session()->has("error"))
                                    <div>
                                        <label style="color: red;">{{ session()->get("error") }}</label>
                                    </div>
                                @endif

                                <div>
                                    <label>Vous n'avez pas de compte ? <a style="color:#9300F5" onclick="signup()">S'inscrire.</a></label>
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="pa-hvr-sweep-to-right">Se Connecter</button>
                                </div>

                                <div class="form-submit">
                                    <button type="button" onclick="accueil()" class="pa-hvr-sweep-to-right">Accueil</button>
                                </div>

                                <div class="server-response"></div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.pa-contact-us -->

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
    <script>
        function signup() {
            window.location.href="{{ route('signup') }}";
        }
        function accueil() {
            // change the button action here
            window.location.href="{{ route('index') }}";
        }
    </script>

</body>

</html>