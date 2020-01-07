

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>diigo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/home/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/home/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/home/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/home/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
{{--<div class="loader_bg">--}}
    {{--<div class="loader"><img src="images/loading.gif" alt="#" /></div>--}}
{{--</div>--}}
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div  class="head_top" id="home">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('assets/home/images/logo.png')}}" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#home"> Acceuil  </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">A propos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('login')}}">Mon compte</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
        <!-- end header -->
        <!-- banner -->
        <section class="banner_main">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-md-6">
                        <div class="text-bg">
                            <h1>Ferouja platforme, L'étudiant est notre trésor</h1>
                            <p>La premiére plateforme en ligne en algerie pour l'accompagnement de votre etudiant á distance</p>
                           <a href="{{route('login')}}">Utiliser le service</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-img">
                            <figure><img src="{{asset('assets/home/images/box_img.png')}}" alt="#"/></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
<!-- end banner -->
<!-- business -->
<div class="business" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <span>A propos de nous</span>
                    <h2>L'equipe feroudja</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="business_box ">
                            <figure><img src="{{asset('assets/home/images/business_img.jpg')}}" alt="#"/></figure>
                            <p>Une equipe jeune et talentueuse réuni pour le travail sur un objectif commun qui vise á  améliorer l'interaction entre enseignent et le parent d'éleve afin de progresser le niveau d'éleve et rassurer une génération d'avenir. Ferouja vous assure aussi la bonne gestion de votre école comme support de gestion interne pour organism scolaire</p>
                            <a class="read_more" href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end business -->
<!-- Projects -->
{{--<div class="projects">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="titlepage">--}}
                    {{--<span>Previous Projects</span>--}}
                    {{--<h2>Better position of Business</h2>--}}
                    {{--<p>It is a long established fact that a reader will be distracted by the readable content of a page </p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-10 offset-md-1">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6 offset-md-3">--}}
                        {{--<div class="projects_box ">--}}
                            {{--<figure><img src="{{asset('assets/home/images/projects_img.png')}}" alt="#"/></figure>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="projects_box ">--}}
                            {{--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>--}}
                            {{--<a class="read_more" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- end projects -->
<!-- Testimonial -->
<div class="section">
    <div class="container">
        <div id="" class="Testimonial">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Témoignage</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                    <div class="Testimonial_box">
                        <h4>Younes</h4>
                        <p>Á presque une année d'utilisation de cette platforme formidable, j'ai reussi á suivre le parcours de mon fils durant l'année scolaire á distance <br>
                            Merci Ferouja pour tous !
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end Testimonial -->
<!-- contact -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contacter nous</h2>
                    <span>Notre equipe Ferouja est toujours dans l'ecoute de vos questions et propositions</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <form class="main_form ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="form_contril" placeholder="Nom " type="text" name="Name ">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Numéro téléphone" type="text" name=" Phone Number">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="send_btn">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="cont">
                        <h3> <strong class="multi"> Nous sommes aussi présents</strong><br>
                            au reseaux sociaux
                        </h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('assets/home/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/home/js/popper.min.js')}}"></script>
<script src="{{asset('assets/home/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/home/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('assets/home/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assets/home/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/home/js/custom.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>

