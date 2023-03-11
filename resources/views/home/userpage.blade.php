<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>AmnaEcole</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="home/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="home/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="home/plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="home/plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="home/plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="home/plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="home/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="home/images/favicon.ico" type="image/x-icon">

</head>

<body>


    <!-- header -->
    <header class="fixed-top header">
        <!-- top header -->
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="callto:+221 78 145 12 72"><strong>CALL</strong> +221 78 145 12 72 </a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <form action="{{ url('search_all') }}" method="get">
                                    @csrf
                                    <input type="text" style="color: black; width: 200px;" name="search" placeholder="Recherche">
                                    <input type="submit" value="Rechercher">
                                </form>
                            </li>
                            @if (Route::has('login'))

                                @auth
                                    <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{url('dossier')}}">Dossier</a></li> -->
                                    <li class="list-inline-item">
                                        <x-app-layout>
                
                                        </x-app-layout>   
                                    </li>
                                @else
                                <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{ route('login') }}">connexion</a></li>
                                <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{ route('register') }}" >s'inscrire</a></li>
                                @endauth

                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href=""><img src="home/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Accueil</a>
                            </li>
                            <li class="nav-item @@about">
                                <a class="nav-link" href="{{url('about')}}">A propos de nous</a>
                            </li>
                            <li class="nav-item @@courses">
                                <a class="nav-link" href="{{url('filiere')}}">Filieres</a>
                            </li>
                            <li class="nav-item @@ecoles">
                                <a class="nav-link" href="{{url('ecoles')}}">Ecoles</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- Modal -->
 
    <!-- Modal -->
   

    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="home/images/banner/banner-1.jpg">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Votre brillant avenir est notre mission</h1>

                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Votre brillant avenir est notre mission</h1>

                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Votre brillant avenir est notre mission</h1>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /hero slider -->

   
  <!-- courses -->
  <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Nos Filieres</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="{{url('filiere')}}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach($filiere as $filiere)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="home/images/courses/course-1.jpg" alt="course thumb">
                            <div class="card-body">
                                <a href="">
                                    <h4 class="card-title">{{$filiere->nom}}</h4>
                                </a>
                                <a href="{{url('filiere_single', $filiere->id)}}" class="btn btn-primary btn-sm">Consulter</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->
     <!-- teachers -->
     <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Nos Ecoles</h2>
                </div>
                <!-- teacher -->
                @foreach($ecole as $ecoles)
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="ecole/{{$ecoles->image}}" alt="teacher">
                        <div class="card-body">
                            <a href="{{url('ecoles_single', $ecoles->id)}}">
                                <h4 class="card-title">{{$ecoles->nom}}</h4>
                            </a>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <span style="padding-top: 20px;">
                {!!$ecole->withQueryString()->links('pagination::bootstrap-5')!!}
                </span>
            </div>
        </div>
    </section><br><br><br>
    <!-- /teachers -->
 <!-- banner-feature -->
 <section class="bg-gray">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">
                    <img class="img-fluid w-100" src="home/images/banner/banner-feature.png" alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between">
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Admissions</h3>
                            <p>Pour avoir une admission rendez vous sur l'onglet des <a href="{{url('ecoles')}}">Ecoles</a> choisissez votre etablissement et consultez les filieres
                                ci-dessous puis cliquez sur le boutton Envoyer une demande
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->

    <!-- about us -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">A propos de Amna Ecole</h2>
                    <p>Anna école est le premier service de placement universitaire au Sénégal. 
                        Notre objectif c’est de pouvoir aider nos étudiants dans les processus de choix de leurs futurs universités et obtenir l’acceptation au sein de ces dernières afin de réaliser leurs projets d’études dans les meilleures conditions que cela puisse être. 
                        Chef de fil cette matière, nous accompagnons nos clients dans la suivi de la réalisation de leurs dits projets.
                        Fort de son expérience dans le domaine et de son expertise, Notre équipe vous facilite la création et la réussite de votre propre avenir parmi une infinité de programmes!
                    </p>
                    <p> Anna école, Anna Avenir ?</p>
                    <a href="{{url('about')}}" class="btn btn-primary-outline">Apprendre encore plus</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="home/images/about/about-us.jpg" alt="about image">
                </div>
            </div>
        </div>
    </section>
    <!-- /about us -->

  
    <!-- success story -->
    <section class="section bg-cover" data-background="home/images/backgrounds/success-story.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">
                    <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                        <i class="ti-control-play"></i>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Success Stories</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

           
    <!-- footer -->
    <footer>
        <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                        <h3 class="text-white">Subscribe Now</h3>
                        <form action="#">
                            <div class="input-wrapper">
                                <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
                                <button type="submit" value="send" class="btn btn-primary">Join</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <div class="footer bg-footer section border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                        <!-- logo -->
                        <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="home/images/logo.png" alt="logo"></a>
                        <ul class="list-unstyled">
                            <li class="mb-2">+221 78 145 12 72</li>
                            <li class="mb-2">amnacontact@gmail.com</li>
                        </ul>
                    </div>
                    <!-- company -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">COMPANY</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="{{url('about')}}">A propos de Nous</a></li>
                            <li class="mb-3"><a class="text-color" href="{{url('ecoles')}}">Nos Ecoles</a></li>
                        </ul>
                    </div>
                    <!-- links -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">LINKS</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="{{url('filiere')}}">Filieres</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright py-4 bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-sm-left text-center">
                        <p class="mb-0">Copyright
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>
                            © Theme By <a href="#">themefisher.com</a></p> . All Rights Reserved.
                    </div>
                    <div class="col-sm-5 text-sm-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-dribbble text-primary"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
    <!-- jQuery -->
    <script src="home/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="home/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="home/plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="home/plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="home/plugins/venobox/venobox.min.js"></script>
    <!-- mixitup filter -->
    <script src="home/plugins/mixitup/mixitup.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="home/plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="home/js/script.js"></script>

</body>

</html>