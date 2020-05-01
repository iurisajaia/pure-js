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


        <link rel="shortcut icon" href="{{ asset('/images/svg/gear.svg') }}">
        <script src="{{ asset('js/jquery-2.1.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
        <script data-ad-client="ca-pub-8724175326124727" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <meta name="google-site-verification" content="zWEFSHiIMdFojNswX_eIQINmRA-w-ZrwSGNGXSUHcbo" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156256604-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-156256604-4');
        </script>

        @stack('styles')





    </head>
    <body id="document-body">




{{--    <div class="newsletter-modal">--}}
{{--        <div class="newsletter-content">--}}
{{--            <form>--}}
{{--                <input type="email" />--}}
{{--                <button>Subscribe</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}





    @if (!\Request::is('/'))
        <div class="open-modal">
            <img src="{{asset('/images/svg/menu.svg')}}" class="modalChanger" alt="menu icon" title="menu"/>
        </div>
    @endif


        <div class="flex-center position-ref full-height">




        <div id="menu-overlay">
            <div class="close-modal" >
                <img src="{{asset('images/svg/closered.svg')}}" alt="close" title="close" class="modalChanger" />
            </div>
            <div class="subpages">
                <!-- About Me Subpage -->
                <section class="pt-page-1" data-id="about_me">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/border-radius" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/radius.svg" alt="border radius" title="border radius" />
                                    <h4>Border Radius Generator</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/linear-gradient" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/gradient.svg" alt="css gradient" title="css gradient" />
                                    <h4>Linear Gradient Generator</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/box-shadow" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/shadow.svg" alt="box shadow" title="box shadow" />
                                    <h4>Box Shadow Generator</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/html-formater" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/format.svg" alt="html formatter" title="html formatter" />
                                    <h4>HTML Formater</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/minify-css" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/compressor.svg" alt="minify css" title="minify css" />
                                    <h4>Minify / Beautify CSS</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/minify-js" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/jscompressor.svg" alt="minify js" title="minify js" />
                                    <h4>Minify JS</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/json-encode" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/json-encode.svg" alt="json decode" title="json decode" />
                                    <h4>JSON Encode / Decode</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/json-formatter" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/json.svg" alt="json formatter" title="json formatter" />
                                    <h4>JSON Formatter</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/base64-decode" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/encoding.svg" alt="base64 decode" title="base64 decode" />
                                    <h4>BASE64 Encode / Decode</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <a href="/image-to-base64" class="service-block">
                                <div class="service-info">
                                    <img src="images/svg/converter.svg" alt="image to base64" title="image to base64" />
                                    <h4>Image To Base64</h4>
                                </div>
                            </a>
                        </div>


                    </div>
                    <!-- End of Services block -->
                </section>
                <!-- End of About Me Subpage -->



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
                                <li><a class="tip social-button" target="_blank" href="https://twitter.com/DexterSja" title="Twitter"><i class="fa fa-twitter"></i></a></li>
{{--                                <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>--}}
                            </ul>
                            <!-- /Social buttons -->
                        </div>
                        <!-- Navigation & Social buttons -->
                        <div class="container">
                            <section>
                                @yield('content')
                            </section>
                        </div>


                    </div>
                    <!-- /Page changer wrapper -->
                </div>
                        <footer class="pt-2">
                            <div class="text-center">
                                <a href="https://simgerebi.ge" target="_blank">simgerebi</a>
                            </div>
                            <div class="text-center">
                                <p>© CSS-TOOL.COM - All rights reserved</p>
                                <p>2020</p>
                            </div>
                        </footer>
                <!-- /Main Content -->
            </div>

        </div>


       <script src="{{ asset('js/bootstrap.min.js')}}"></script>
       <script src="{{ asset('js/main.js')}}"></script>


        @stack('scripts')



    </body>
</html>
