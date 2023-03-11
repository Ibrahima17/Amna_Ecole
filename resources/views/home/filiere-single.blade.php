<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>Educenter</title>

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
                        <a class="text-color mr-3" href="callto:+221 78 145 12 72"><strong>CALL</strong> +221 78 145 12 72</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li> -->
                            @if (Route::has('login'))

                            @auth
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
                    <a class="navbar-brand" href="{{url('/')}}"><img src="home/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item @@home">
                                <a class="nav-link" href="{{url('/')}}">Accueil</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('about')}}">A propos de nous</a>
                            </li>
                            <li class="nav-item @@courses">
                                <a class="nav-link" href="{{url('filiere')}}">Filieres</a>
                            </li>
                            <li class="nav-item @@courses">
                                <a class="nav-link" href="{{url('ecoles')}}">Ecoles</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- page title -->
    <section class="page-title-section overlay" data-background="home/images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Votre Filiere</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{$filiere->nom}}</li>
                    </ul>
                    <p class="text-lighten"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- section -->
    <section class="section-sm">
        <div class="container">

            <!-- course info -->
            <div class="row align-items-center mb-5">
                <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
                    <h2>{{$filiere->nom}}</h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-book text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">COURS</h6>
                                    <p class="mb-0">09 Mois</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">

                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- course details -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h3>A propos de la Filiere</h3>
                    <p>
                    {{$filiere->desc}}
                    </p>
                </div>
                <div class="col-12 mb-4">
                    <h3>Debouchés</h3>
                    <pre><p style="margin-bottom: 2em;">{{$filiere->debouche}}</p></pre> 
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->

    

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
    <script src="home/https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="home/plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="home/js/script.js"></script>

</body>

</html>