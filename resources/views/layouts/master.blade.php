<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ashion Template">
        <meta name="keywords" content="Ashion, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home | TRODWE</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__close">+</div>
            <ul class="offcanvas__widget">
                <li><span class="icon_search search-switch"></span></li>
                <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
                <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            </ul>
            <div class="offcanvas__logo">
                <a href="./index.html"><img src="imag/logo.png" alt=""></a>
            </div>
            <div id="mobile-menu-wrap"></div>
            <div class="offcanvas__auth">
                <a href="#">Login</a>
                <a href="#">Register</a>
            </div>
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-2">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Accueil</a></li>
                                <li><a href="#">Femmes</a></li>
                                <li><a href="#">Hommes</a></li>
                                <li><a href="#">Enfants</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Garçons</a></li>
                                        <li><a href="#">Filles</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="./shop.html">Shop</a></li> --}}
                                {{-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./product-details.html">Product Details</a></li>
                                        <li><a href="./shop-cart.html">Shop Cart</a></li>
                                        <li><a href="./checkout.html">Checkout</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="./blog.html">Blog</a></li> --}}
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__right">
                            <div class="header__right__auth">
                                <a href="#">Login</a>
                                <a href="#">Register</a>
                            </div>
                            <ul class="header__right__widget">
                                <li><span class="icon_search search-switch"></span></li>
                                <li><a href="#"><span class="icon_heart_alt"></span>
                                    <div class="tip">2</div>
                                </a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span>
                                    <div class="tip">2</div>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->


        @yield('content')


        <!-- Services Section Begin -->
        <section class="services spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fa fa-car"></i>
                            <h6>Livraison garantie</h6>
                            <p>Pour tout achat > 50000 F</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fa fa-money"></i>
                            <h6>Remboursement</h6>
                            <p>en cas de non satisfaction</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fa fa-support"></i>
                            <h6>Assistance 24/7</h6>
                            <p>dédiée à nos clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fa fa-credit-card-alt"></i>
                            <h6>Payement Securisé</h6>
                            <p>pour vos transactions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            cilisis.</p>
                            <div class="footer__payment">
                                <a href="#"><img src="{{asset('images/payment/payment-1.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/payment/payment-2.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/payment/payment-3.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/payment/payment-4.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/payment/payment-5.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer__widget">
                            <h6>Liens rapides</h6>
                            <ul>
                                <li><a href="#">Mode homme</a></li>
                                <li><a href="#">Mode femme</a></li>
                                <li><a href="#">Mode Garçon</a></li>
                                <li><a href="#">Mode Fille</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="footer__widget">
                            <h6>Mes comptes</h6>
                            <ul>
                                <li><a href="#">Mon espace</a></li>
                                <li><a href="#">Mon panier</a></li>
                                <li><a href="#">Mon historique</a></li>
                                <li><a href="#">Mes favoris</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="footer__newslatter">
                            <h6>NEWSLETTER</h6>
                            <form action="#">
                                <input type="text" placeholder="Votre Email">
                                <button type="submit" class="site-btn">Souscrire</button>
                            </form>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">VAKA</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Search Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Saisissez le mot clé ici">
                </form>
            </div>
        </div>
        <!-- Search End -->
        </div>

        <!-- Js Plugins -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/mixitup.min.js')}}"></script>
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
