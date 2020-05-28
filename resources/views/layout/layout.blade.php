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

{{--        <script src="{{ asset('js/jquery-2.1.3.min.js')}}"></script>--}}



        @stack('styles')
        <link rel="preload" href="{{ asset('/css/bootstrap/default.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preload" href="{{ asset('/css/layout.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">




{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>--}}
{{--        <script data-ad-client="ca-pub-8724175326124727" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
{{--        <meta name="google-site-verification" content="zWEFSHiIMdFojNswX_eIQINmRA-w-ZrwSGNGXSUHcbo" />--}}
<!-- Global site tag (gtag.js) - Google Analytics -->
{{--        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156256604-4"></script>--}}
{{--        <script>--}}
{{--            window.dataLayer = window.dataLayer || [];--}}
{{--            function gtag(){dataLayer.push(arguments);}--}}
{{--            gtag('js', new Date());--}}

{{--            gtag('config', 'UA-156256604-4');--}}
{{--        </script>--}}







    </head>
    <body id="document-body">





    @if (!\Request::is('/'))
        <div class="open-modal">
            <img src="{{asset('/images/svg/menu.svg')}}" class="modalChanger" alt="menu icon" title="menu"/>
        </div>
    @endif


        <div class="flex-center position-ref full-height">


        @include('components.menu')


        <div id="page" class="page">

                <div id="main" class="site-main">
                    <div class="pt-wrapper">
                        <div class="mobile-menu-toggle">
                            <div class="menu-icon open" id="menuToggle">
                            </div>
                        </div>

                        @include('components.header')

                        <div class="container">
                            <section>

                                @yield('content')

                            </section>
                        </div>
                    </div>
                </div>


                    @include('components.footer')
            </div>

        </div>


{{--       <script src="{{ asset('js/bootstrap.min.js')}}"></script>--}}
       <script src="{{ asset('js/main.js')}}"></script>


        @stack('scripts')


    </body>
</html>
