<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@isset( $seo ){{$seo["title"]}}@endif</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="@isset( $seo ){{$seo["title"]}}@endif" name="title" />
        <meta content="@isset( $seo ){{$seo["description"]}}@endif" name="description" />


        <meta content="@isset( $seo ){{$seo["title"]}}@endif" property="og:title" />
        <meta content="@isset( $seo ){{$seo["description"]}}@endif" property="og:description" />

        <meta content="@isset( $seo ){{$seo["keywoards"]}}@endif" name="keywoards"/>


        <title>@isset( $seo ){{$seo["title"]}}@endif</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="shortcut icon" href="favicon.ico">
        <script src="{{ asset('js/jquery-2.1.3.min.js')}}"></script>
{{--        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('/css/fontawesome/all.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('/css/normalize.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('/css/main.min.css')}}" type="text/css">--}}
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}" type="text/css">

        @stack('styles')





    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="preloader">
              <div class="preloader-animation">
                <div class="dot1"></div>
                <div class="dot2"></div>
              </div>
            </div>




            <div id="page" class="page">
                {{--

                {{--          <!-- Main Content -->--}}
                <div id="main" class="site-main">
                    <!-- Page changer wrapper -->
                    <div class="pt-wrapper">
                        <div class="mobile-menu-toggle">
                            <div class="menu-icon open" id="menuToggle">
                            </div>
                        </div>
                        <!-- Navigation & Social buttons -->
                        <div class="site-nav mobile-menu-hide" id="mobileMenu">
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
                                <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
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
                                <p>© CSS-TOOL.COM - All rights reserved</p>
                                <p>2020</p>
                            </div>
                        </footer>
                <!-- /Main Content -->
            </div>

        </div>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
       <script src="{{ asset('js/bootstrap.min.js')}}"></script>
       <script src="{{ asset('js/main.js')}}"></script>


        @stack('scripts')



    </body>
</html>
