<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description"
        content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">
    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&family=Chewy&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('assets/images/lo.jpeg') }}">
    <!-- Core Style -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{ asset('assets/css/pharma.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Flavy est une application mobile qui permet de trouver une pharmacie de garde à proximité de vous, acheter des médicaments en ligne et se faire livrer à domicile.">
    <meta name="keywords"
        content="pharmacie, pharmacie de garde, pharmacie en ligne, médicament, médicament en ligne, médicament à domicile, pharmacie à domicile, pharmacie en ligne en côte d'ivoire, pharmacie de garde en côte d'ivoire, pharmacie à domicile en côte d'ivoire, pharmacie en ligne en afrique, pharmacie de garde en afrique, pharmacie à domicile en afrique, côte d'ivoire pharmacie, pharmacie en ligne abidjan, pharmacie de garde abidjan, pharmacie à domicile abidjan, pharmacie en ligne afrique, pharmacie de garde afrique, pharmacie à domicile afrique">

    <meta property="og:title" content="Flavy - Pharmacie Digital">
    <meta property="og:description"
        content="Flavy est une application mobile qui permet de trouver une pharmacie de garde à proximité de vous, acheter des médicaments en ligne et se faire livrer à domicile.">
    <meta property="og:image" content="{{ asset('assets/images/lo.jpeg') }}">
    <meta property="og:url" content="https://flavy.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Flavy - Pharmacie Digital">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:locale:alternate" content="en_US">

    <link rel="canonical" href="https://flavy.com">
    <link rel="alternate" href="https://flavy.com" hreflang="fr">
    <link rel="alternate" href="https://flavy.com" hreflang="en">

    <!-- Document Title
 ============================================= -->
    <title>@yield('title', 'Flavy - Pharmacie Digital')</title>
    <style>
        [id^="particles-"] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }
    </style>


</head>

<body class="stretched">

    <!-- Document Wrapper ============================================= -->
    <div id="wrapper">
        <!-- Header ============================================= -->
        <header id="header" class="transparent-header dark" data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <div id="logo">
                            <a href="{{ route('index') }}">
                                <b></b>
                                <div></div>
                                <img class="logo-default" srcset="images/lo.jpeg, images/lo.jpeg 6x"
                                    src="{{ asset('images/lo.jpeg') }}" alt=" Logo" style="border-radius:50px;">
                                <img class="logo-dark" srcset="images/lo.jpeg, images/lo.jpeg 6x" src="{{ asset('images/lo.jpeg') }}" alt=" Logo" style="border-radius:50px;">
                            </a>
                        </div>
                        <!-- #logo end -->
                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation  ============================================= -->
                        <nav class="primary-menu">
                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link" href="{{ route('index') }}">
                                        <div><b>Accueil</b></div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#apropos">
                                        <div><b>A propos/Services</b></div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#temoignages">
                                        <div><b>Témoignage</b></div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#guide">
                                        <div><b>Guide</b></div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#contact">
                                        <div><b>Contact</b></div>
                                    </a></li>
                                <li class="menu-item bg-color h-bg-dark px-xl-3" style="padding:0;"><a
                                        class="menu-link" href="#">
                                        <div><i class='bx bx-mobile-alt'></i><b>Télécharger <strong
                                                    style="color:black;">APK</strong> <b></b><b>FLAVY</b></b></div>
                                    </a></li>
                                <!-- <li class="menu-item"><a class="menu-link" href="#"><div>Pharmacien<i class='bx bx-subdirectory-left'></i> <br> Connectez vous!</div></a></li> -->
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        @yield('content')
        <!-- Footer ============================================= -->
        <footer id="footer" class="dark">
            <div class="container">
                <!-- Footer Widgets ============================================= -->
                <div class="footer-widgets-wrap">
                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <b>
                                    <p><b>FLAVY</b> <strong>LA</strong>, <strong>PHARMACIE</strong> &amp;
                                        <strong>DIGITAL</strong> basée en AFRIQUE.</p>
                                </b>

                                <div
                                    style="background: url('{{ asset('assets/images/world-map.png') }}') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Siège:</strong><br>
                                        Abidjan, <br>
                                        COCODY<br>
                                    </address>
                                    <abbr title="Phone Number"><strong>Téléphone:</strong></abbr> (+225)
                                    07-07-29-36-37<br>
                                    <!-- <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br> -->
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> groupflavy@gmail.com
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget_links">

                                <h4><b>Politique et condition d'Utilisateur.</b></h4>

                                <ul>
                                    <li><a href="">Documentation</a></li>
                                    <li><a href="">Feedback</a></li>
                                    <li><a href=" ">Plugins</a></li>

                                </ul>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget_links">

                                <h4><b>Blog.</b></h4>

                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>

                                </ul>

                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget text-center" style="border: 2px dashed #AAA; padding: 30px">
                                <h3><b>TéLécharger Maintenant L'application.</b><br>
                                    <a href="#"><img src="{{ asset('assets/images/dowload_g.png') }}" alt=""
                                            srcset=""></a><!-- lien de techargement apk -->
                                    Sur Android <span style="font-size: 40px;">30%</span> Off*
                                </h3>
                                <em style="color: #999;"><small>(Chap Chap)</small></em><br>
                                <img src="images/download_a.png" alt="" srcset="">
                                <span>pour APPLE <b style="color:red;">Service momentanement
                                        indisponible.</b></span><br>

                            </div>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->
            </div>
            <div class="line m-0"></div>
            <!-- Copyrights ============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row justify-content-between align-items-center col-mb-30">
                        <div class="col-12 col-lg-auto text-center text-lg-start">
                            Copyrights &copy; <b><em>2024 All Rights Reserved by Charolite Technologie</em></b>.
                        </div>

                        <div class="col-12 col-lg-auto text-center text-lg-end">
                            <div class="d-flex">
                                <a href="#" class="social-icon si-small text-white bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-vimeo">
                                    <i class="fa-brands fa-vimeo-v"></i>
                                    <i class="fa-brands fa-vimeo-v"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-github">
                                    <i class="fa-brands fa-github"></i>
                                    <i class="fa-brands fa-github"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-yahoo">
                                    <i class="fa-brands fa-yahoo"></i>
                                    <i class="fa-brands fa-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-small text-white bg-linkedin">
                                    <i class="fa-brands fa-linkedin"></i>
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>
    <!-- JavaScripts
 ============================================= -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('assets/js/particles/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles/particles-line.js') }}"></script>

</body>

</html>
