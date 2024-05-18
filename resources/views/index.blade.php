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
    {{-- <link rel="stylesheet" href="{{ asset('assets/style.css') }}"> --}}
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
    <title>Flavy - Pharmacie Digital</title>
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
                                <img class="logo-default" srcset="{{ asset('assets/images/lo.jpeg') }}, {{ asset('assets/images/lo.jpeg') }} 6x"
                                    src="{{ asset('assets/images/lo.jpeg') }}" alt=" Logo" style="border-radius:50px;">
                                <img class="logo-dark" srcset="{{ asset('assets/images/lo.jpeg') }}, {{ asset('assets/images/lo.jpeg') }} 6x"
                                    src="{{ asset('assets/images/lo.jpeg') }}" alt=" Logo" style="border-radius:50px;">
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

        <!-- Slider
      ============================================= -->
        <section id="slider accueil" class="slider-element min-vh-60 min-vh-md-100 include-header"
            style="background: url('{{ asset('assets/images/hero-bg.png') }}') center right no-repeat; background-size: cover;">
            <div class="slider-inner">

                <div class="vertical-middle">
                    <div class="container py-5">
                        <div class="emphasis-title dark m-0">

                            <h2 class="home_title"
                                style="font-size: 40px; line-height: 1.4; font-weight: 600; text-shadow: 1px 1px 1px rgba(0,0,0,0.5);">
                                Votre <b>Pharmacie Digital</b>,<br><em><b>Flavy</b></em>.</span></h2>
                            <p class="fw-light d-none d-md-block" style="font-size: 16px; opacity: .9; margin:0;">
                                Bienvenue sur le site de Flavy, votre destination en ligne pour des soins de <br> santé
                                de
                                qualité, des conseils d'experts et une gamme complète de produits pharmaceutiques.</p>
                            <a href="#guide" class="button button-large button-rounded ms-0">Savoir Plus<i
                                    class='bx bx-chevrons-down'></i></a></i>
                            <a href="#" class="button bg-transparent shadow-none" style="margin:0;">
                                <div class="load"> <span></span></div> <i class='bx bx-download'
                                    style="width: 40px; font-size: 40px; top: 60px; right:25px;  position:absolute; z-index:10"></i>
                            </a>
                            <br><em><small style="opacity: 0.7;">Télécharger rapidement ici <br>l'application
                                    mobile.</small></em>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Content
  ============================================= -->
        <section id="content apropos">
            <div class="content-wrap pt-0">

                <div class="section m-0" style="background-color: #eef2f5;">
                    <div class="container" id="apropos">

                        <div class="heading-block text-center border-bottom-0 mb-5 mt-4 mx-auto"
                            style="max-width: 640px">
                            <h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">A propos
                                de nous
                                !!!</h3>
                            <span><b style="font-size: 20px;">Chez FLAVY, notre engagement envers votre santé et votre
                                    bien-être
                                    est au cœur de tout ce que nous faisons. Nous sommes fiers d'être votre pharmacie
                                    numérique
                                    de confiance, offrant des solutions de santé en ligne pratiques et
                                    fiables.</b></span>
                            <span><b style="font-size: 20px;">Notre mission est de rendre l'accès aux soins de santé
                                    plus
                                    pratique que jamais. Nous croyons que tout le monde mérite des soins de santé de
                                    qualité et
                                    des produits pharmaceutiques fiables. C'est pourquoi nous nous efforçons de rendre
                                    votre
                                    expérience de magasinage en ligne agréable, sûre et sans tracas.</b></span>

                        </div>

                        <!-- Features colomns
      ============================================= -->
                        <div class="row align-items-stretch g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box media-box fbox-bg h-100">
                                    <div class="fbox-media">
                                        <a href="#"><img src="{{ asset('assets/images/service.jpg') }}" alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content border-0">
                                        <h3 class="text-transform-none ls-0 fw-semibold">Ordonnance en ligne<span
                                                class="subtitle fw-light ls-0">Scanner et Mettez en ligne votre
                                                ordonnance pour
                                                la faire parvenir à votre pharmacie.</span></h3>
                                        <a href="#" class="button-link border-0 color">Lire plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box media-box fbox-bg h-100">
                                    <div class="fbox-media">
                                        <a href="#"><img src="{{ asset('assets/images/service1.jpg') }}"
                                                alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content border-0">
                                        <h3 class="text-transform-none ls-0 fw-semibold">Conseils<span
                                                class="subtitle fw-light ls-0">Créer votre compte client et Recevez des
                                                conseils
                                                de votre pharmacien à distance.</span></h3>
                                        <a href="#" class="button-link border-0 color">Lire Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box media-box fbox-bg h-100">
                                    <div class="fbox-media">
                                        <a href="#"><img src="{{ asset('assets/images/service2.jpeg') }}"
                                                alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content border-0">
                                        <h3 class="text-transform-none ls-0 fw-semibold">Application Mobile<span
                                                class="subtitle fw-light ls-0">Fini les recherches interminables de
                                                medicaments
                                                en pharmacie Téléchargez l'application <b>Flavy</b> et rendez plus
                                                flexible
                                                votre expérience.</span></h3>
                                        <a href="#" class="button-link border-0 color">Lire Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box media-box fbox-bg h-100">
                                    <div class="fbox-media">
                                        <a href="#"><img src="{{ asset('assets/images/service3.jpg') }}"
                                                alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content border-0">
                                        <h3 class="text-transform-none ls-0 fw-semibold">Service Livraison<span
                                                class="subtitle fw-light ls-0">fini les longues files d'attentes,
                                                Faites vous
                                                livrer dans un délai très court vos produits.</span></h3>
                                        <a href="#" class="button-link border-0 color">Lire Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-5" id="temoignages">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading-block border-bottom-0 mt-4 mb-0">
                                <h2 class="font-secondary ls-1 text-transform-none fw-normal">FLAVY, ma pharmacie en
                                    ligne !!!
                                </h2>
                                <span> Nous nous engageons à répondre à vos besoins en matière de santé. La sécurité de
                                    vos
                                    données personnelles et de vos transactions est notre priorité absolue.</span>
                                <a href="#" class=" button-large button-rounded mt-4 ms-0"><img
                                        src="{{ asset('assets/images/dowload_g.png') }}" alt="download" srcset=""> <img
                                        src="{{ asset('assets/images/download_a.png') }}" alt="download" srcset=""></a>
                                <div class="line line-sm"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <div class="counter counter-small color"><span data-from="10" data-to="1136"
                                                data-refresh-interval="50" data-speed="1000"></span>+</div>
                                        <h5 class="color fw-semibold text-transform-none mt-0"
                                            style="font-size: 16px;">
                                            Utilisateur Mobile</h5>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <div class="counter counter-small" style="color: #22c1c3;"><span
                                                data-from="10" data-to="145" data-refresh-interval="50"
                                                data-speed="700"></span>+</div>
                                        <h5 class="fw-semibold text-transform-none mt-0"
                                            style="color: #22c1c3; font-size: 16px;">Satisfactions</h5>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <div class="counter counter-small" style="color: #BD3F32;"><span
                                                data-from="10" data-to="50" data-refresh-interval="85"
                                                data-speed="1200"></span>+</div>
                                        <h5 class="fw-semibold text-transform-none mt-0"
                                            style="color: #BD3F32; font-size: 16px;">Professionels</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget"
                                data-nav="false" data-animate-in="slideInUp" data-animate-out="slideOutUp"
                                data-autoplay="5000" data-loop="true" data-stage-padding="5" data-margin="10"
                                data-items-sm="1" data-items-md="1" data-items-xl="1">

                                <div class="oc-item">
                                    <div class="card border-light shadow-sm mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <img class="rounded-circle" width="60" height="60"
                                                        src="{{ asset('assets/images/11.png') }}" alt="Customer Testimonails">
                                                </div>
                                                <div class="col">
                                                    <p class="mb-3 fw-medium"></p>
                                                    <h5 class="ls-1 text-uppercase mb-0">
                                                        <small class="op-07 fw-normal text-capitalize"></small>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-light shadow-sm mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <img class="rounded-circle" width="60" height="60"
                                                        src="{{ asset('assets/images/22.jpg') }}" alt="Customer Testimonails">
                                                </div>
                                                <div class="col">
                                                    <p class="mb-3 fw-medium"></p>
                                                    <h5 class="ls-1 text-uppercase mb-0">
                                                        <small class="op-07 fw-normal text-capitalize"></small>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="card border-light shadow-sm mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <img class="rounded-circle" width="60" height="60"
                                                        src="{{ asset('assets/images/33.jpg') }}" alt="Customer Testimonails">
                                                </div>
                                                <div class="col">
                                                    <p class="mb-3 fw-medium"></p>
                                                    <h5 class="ls-1 text-uppercase mb-0">
                                                        <small class="op-07 fw-normal text-capitalize"></small>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-light shadow-sm mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <img class="rounded-circle" width="60" height="60"
                                                        src="{{ asset('assets/images/44.jpg') }}" alt="Customer Testimonails">
                                                </div>
                                                <div class="col">
                                                    <p class="mb-3 fw-medium"></p>
                                                    <h5 class="ls-1 text-uppercase mb-0">
                                                        <small class="op-07 fw-normal text-capitalize"></small>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="section mb-0" id="guide">

                    <div class="m-0"
                        style="background-color:#25b69e; padding: 80px 0;color: whitesmoke; justify-content: center;">
                        <div id="particles-line"></div>
                        <div class="container_process" style="max-width: 600px;text-align: center;">

                            <div class="text-center dark">

                                <div class="heading-block border-bottom-0 mb-0 mx-auto " style="max-width: 640px">
                                    <h3 class="text-transform-none text-center font-secondary fw-normal"
                                        style="font-size: 36px;">Comment ça fonctionne <b></b>?</h3>

                                </div>
                                <span class="border-bottom-0 mb-0 mx-auto" style="padding: 1rem;">L'application FLAVY
                                    est
                                    extrêmement conviviale, conçue pour simplifier la vie de nos parents en leur
                                    permettant de
                                    se retrouver aisément et de commander leurs médicaments dans leur pharmacie fidèle
                                    en toute
                                    simplicité, sans avoir à fournir un effort considérable. C'est pourquoi elle est
                                    claire et
                                    facile à comprendre, sans la moindre ambiguïté.</span>

                            </div>

                            <div class="tables_process">
                                <div class="table">
                                    <div class="table_header">
                                        <h3>1.Télécharger L'application mobile.</h3>
                                    </div>
                                    <div class="table_containt">
                                        <p>L'application flavy est telechargeable sur playstore et apple store, legere,
                                            securiser, conviviale et facile à uiliser. <br>
                                            Une veritable application de mise en relation du patient à sa pharmacie.<br>
                                            Ameliorant ainsi la qualité de service.<br>
                                        </p>
                                    </div>
                                </div>

                                <div class="table">
                                    <div class="table_header">
                                        <h3>2. Création de compte client.
                                        </h3>
                                    </div>
                                    <div class="table_containt">
                                        <p>L'inscription a l'application comprend vos information suivants : nom,
                                            taille, poids,
                                            assurance, ... pour permet l'indentification du compte et par la suite se
                                            renseigner
                                            au pres de votre pharmacien ou phamarcie pour le code unique de la pharmacie
                                            pour
                                            permet le rattachement a votre pharmacie ainsi vous pouvez effectuez toutes
                                            vos
                                            transaction en toute securite et chiffré.</p>
                                    </div>
                                </div>

                                <div class="table">
                                    <div class="table_header">
                                        <h3>3.Passer commande dans ça pharmacie avec ou sans ordonnance.</h3>
                                    </div>
                                    <div class="table_containt">
                                        <p>fini les attentes interminable! Votre application Flavy vous permet de passer
                                            commande dans votre pharmacie apres inscription en scannant votre ordonnance
                                            et
                                            l'envoyer a votre pharmacie fidèle ainsi vous recevez une facture de
                                            celle-ci en
                                            vous confiment la disponibilité du produit avec les prix en temps réel;
                                            possibilité
                                            de payer en ligne.</p>
                                    </div>
                                </div>

                                <div class="table">
                                    <div class="table_header">
                                        <h3>4.Rechercher des medicaments en pharmacie.</h3>
                                    </div>
                                    <div class="table_containt">
                                        <p>Surement la question sur la disponibilité du produit se pose? <br>
                                            Raison pour laquelle il ya cette fonctionnalité Rechercher des medicaments
                                            en
                                            pharmacie, elle permet juste en scannant votre ordonnance ou ecrire le nom
                                            du
                                            produit, de Rechercher le produit pharmaceutique à votre place et vous
                                            indique où
                                            est ce que vous pouvez trouver le produit.
                                        </p>
                                    </div>
                                </div>

                                <div class="table">
                                    <div class="table_header">
                                        <h3>5.Voir les pharmacies de garde dans sa communes.</h3>
                                    </div>
                                    <div class="table_containt">
                                        <p>Avec votre application mobile Flavy c'est tres facile de trouver la pharmacie
                                            de
                                            garde au milieu de la nuit pour vos urgence. <br>un guain de temps.</p>
                                    </div>
                                </div>

                                <div class="table">
                                    <div class="table_header">
                                        <h3>6.Payer et se faire livrer ses produits en toutes sécurités.</h3>
                                    </div>
                                    <div class="table_containt">
                                        <p>fini les monnaies en pharmacie !!!, fini les erruptions, les imprevus en
                                            pharmacie;
                                            L'application favy vous offre un moyen de paiement en ligne et la
                                            possibilité de se
                                            faire livrer le produit si vous le voulez bien sûr.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section m-0 bg-transparent">
                    <div class="container">
                        <div class="heading-block text-center border-bottom-0 mx-auto" style="max-width: 640px">
                            <h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">Nos
                                Partenaires.
                            </h3>
                            <span><b>Ces partenariats renforcent notre engagement envers la qualité, l'accessibilité et
                                    la
                                    commodité, tout en vous offrant une variété d'options pour prendre en charge votre
                                    santé et
                                    votre bien-être.</b></span>
                        </div>
                        <div class="row mt-5">
                            <div class="partnaire_slider">
                                <div class="slide-track">
                                    <!-- ===SLIDE DES PARTENAIRE -->
                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/uta.jpeg') }}" alt="" srcset="">
                                    </div>
                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/part1.png') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/part2.png') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/iscat.jpeg') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset("assets/images/ro.jpeg") }}" alt="" srcset="">
                                    </div>

                                    <!-- DOUBLON DES SLIDES DES PARTENAIRE -->

                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/uta.jpeg') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/part1.png') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/part2.png') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset('assets/images/iscat.jpeg') }}" alt="" srcset="">
                                    </div>

                                    <div class="part_slide">
                                        <img src="{{ asset("assets/images/ro.jpeg") }}" alt="" srcset="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-6">
                    <div class="heading-block text-center border-bottom-0 mx-auto" style="max-width: 640px">
                        <h3 class="text-transform-none font-secondary fw-normal" style="font-size: 36px;">Besoin
                            d'aide?</h3>
                        <span>N'hésitez pas à contacter nos différentes adresse ci-dessous pour plus de guide au niveau
                            de notre
                            application mobile.<br><b>fiable et securisée.</b></span>
                    </div>
                    <div class="row contact-properties">
                        <div class="col-md-4">
                            <a href="#"
                                style="background: url('{{ asset('assets/images/adresse.png') }}') no-repeat center center; background-size: cover;">
                                <div class="vertical-middle dark text-center">
                                    <div class="heading-block m-0 border-0">
                                        <h3 class="text-capitalize fw-normal font-secondary">Localisation Géographique
                                        </h3>
                                        <span style="margin-top: 50px; font-size: 7Opx; font-weight: 500;">
                                            Abidjan<br>
                                            COCODY
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"
                                style="background: url('{{ asset('assets/images/tel.jpeg') }}') no-repeat center center; background-size: cover;">
                                <div class="vertical-middle dark text-center">
                                    <div class="heading-block m-0 border-0">
                                        <h3 class="text-capitalize fw-normal font-secondary">Appel Téléphonique</h3>
                                        <span style="margin-top: 50px; font-size: 18px; font-weight: 100;">
                                            Appele Nous<br>
                                            +225 07-07-29-36-37
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"
                                style="background: url('{{ asset('assets/images/mail.png') }}') no-repeat center center; background-size: cover;">
                                <div class="vertical-middle dark text-center">
                                    <div class="heading-block m-0 border-0">
                                        <h3 class="text-capitalize fw-normal font-secondary">Courrier Electronique</h3>
                                        <span style="margin-top: 50px; font-size: 17px; font-weight: 100;opacity: .9;">
                                            Notre Adresse Email<br>
                                            groupflavy@gmail.com
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #content end -->

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
                                        <strong>DIGITAL</strong> basée en AFRIQUE.
                                    </p>
                                </b>

                                <div
                                    style="background: url('{{ asset('assets/images/adresse.png') }}') no-repeat center center; background-size: 100%;">
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
                                    <a href="#"><img src="{{ asset('assets/images/dowload_g.png') }}"
                                            alt="" srcset=""></a><!-- lien de techargement apk -->
                                    Sur Android <span style="font-size: 40px;">30%</span> Off*
                                </h3>
                                <em style="color: #999;"><small>(Chap Chap)</small></em><br>
                                <img src="{{ asset('assets/images/download_a.png') }}" alt="" srcset="">
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
