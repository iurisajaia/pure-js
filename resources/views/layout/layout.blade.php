<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sunshine - Responsive vCard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Sunshine - Responsive vCard Template" />
        <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
        <meta name="author" content="lmtheme" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/transition-animations.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/main.css')}}" type="text/css">

        @stack('styles')



{{--        <script src="{{ asset('/js/jquery-2.1.3.min.js')}}"></script>--}}
{{--        <script src="{{ asset('/js/modernizr.custom.js')}}"></script>--}}


    </head>
    <body>
        <div class="flex-center position-ref full-height">
{{--            <div class="preloader">--}}
{{--              <div class="preloader-animation">--}}
{{--                <div class="dot1"></div>--}}
{{--                <div class="dot2"></div>--}}
{{--              </div>--}}
{{--            </div>--}}
            <div id="page" class="page">
                {{--

                {{--          <!-- Main Content -->--}}
                <div id="main" class="site-main">
                    <!-- Page changer wrapper -->
                    <div class="pt-wrapper">
                        <!-- Navigation & Social buttons -->
                        <div class="site-nav mobile-menu-hide">
                            <!-- Main menu -->
                            <ul id="nav" class="site-main-menu">
                                <li>
                                    <a href="/" >Home</a>
                                </li>
                                <li>
                                    <a href="/about">About</a>
                                </li>
                                <li>
                                    <a href="/terms-of-services">Terms Of Services</a>
                                </li>
                                <li>
                                    <a href="/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                            <!-- /Main menu -->

                            <!-- Social buttons -->
                            <ul class="social-links">
                                <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                                <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
                                <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                                <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                            </ul>
                            <!-- /Social buttons -->
                        </div>
                        <!-- Navigation & Social buttons -->
                        <div class="container">
                                @yield('content')
                        </div>


                    </div>
                    <!-- /Page changer wrapper -->
                </div>
                        <footer class="pt-2">
                            <div class="text-center">
                                <p>2020</p>
                            </div>
                        </footer>
                <!-- /Main Content -->
            </div>

        </div>

{{--        <script src="{{ asset('js/page-transition.js')}}"></script>--}}
{{--        <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>--}}
{{--        <script src="{{ asset('js/validator.js')}}"></script>--}}
{{--        <script src="{{ asset('js/jquery.shuffle.min.js')}}"></script>--}}
{{--        <script src="{{ asset('js/masonry.pkgd.min.js')}}"></script>--}}
{{--        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>--}}
{{--        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>--}}
{{--        <script src="{{ asset('js/jquery.hoverdir.js')}}"></script>--}}
{{--        <script src="{{ asset('js/main.js')}}"></script>--}}


            @stack('scripts')


    </body>
</html>
