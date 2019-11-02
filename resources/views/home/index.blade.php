<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Feroudja</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/home/style.css')}}">
</head>
<body>
<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}"><h2>feroudja</h2> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home')}}">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">Qui somme nous ?</a>
                            </li>
                            <li class="d-none d-lg-block">
                                <a class="btn_1" href="#">S'abonner au service</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>votre etudiant est notre trésor</h5>
                        <h1>Feroudja ! le clé de succés</h1>
                        <p>La premiére plateforme en ligne en algerie pour l'accompagnement de votre etudiant á distance </p>
                        <a href="#" class="btn_1">Voir video </a>
                        <a href="#services" class="btn_2">Commencer la magie </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part" id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-user"></i></span>
                        <a href="{{route('student.index')}}"><h4>Parent d'éleve</h4></a>
                        <p>Accéder au compte délivrer par l'école de votre éleve et controller ses résultats</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-user"></i></span>
                        <a href="{{route('prof.landing')}}"><h4>Enseignant</h4></a>
                        <p>Délivrez les notes de vos etudiants et suivez leurs progression scolaire en ligne</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-home"></i></span>
                        <a href="{{route('school.classes')}}"><h4>Administrateur d'ecole</h4></a>
                        <p>Accédez au plateforme pour la gestion de votre école</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- learning part start-->
<section class="learning_part" id="about-us" style="margin-top: 10%">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7">
                <div class="learning_img">
                    <img src="{{asset('assets/img/learning_img.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>Qui sommes nous !</h5>
                    <h2>L'equipe feroudja</h2>
                    <p>Une equipe jeune et talentueuse pour but d'améliorer l'interaction entre enseignant et parent d'éleve afin de progresser le niveau d'éleve et rassurer une génération d'avenir.</p>
                    <a href="#" class="btn_1">Abonnez á notre service</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->

<!-- member_counter counter start -->
<section class="member_counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">25</span>
                    <h4>Ecoles</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">1024</span>
                    <h4>Etudiants</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">1020</span>
                    <h4>Enseignants</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                    <p>La premiére plateforme en ligne en algerie pour l'accompagnement de votre etudiant á distance</p>
                    <p>Abonnez notre service et avoir accées á la magie</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Notre corrier</h4>
                    <p>Entrer votre adresse mail pour savoir de nos nouvelles .
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Entrer votre addresse email'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span> Bainem Alger, Algerie </p>
                        <p><span> Phone :</span> +213 0 00 00 00 00</p>
                        <p><span> Email : </span>info@feroudja.com </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droits reservés
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{asset('assets/js/home/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('assets/js/home/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/home/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{asset('assets/js/home/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('assets/js/home/swiper.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('assets/js/home/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{asset('assets/js/home/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/home/jquery.nice-select.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('assets/js/home/slick.min.js')}}"></script>
<script src="{{asset('assets/js/home/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/home/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/home/custom.js')}}"></script>
</body>

</html>