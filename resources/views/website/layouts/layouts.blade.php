<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Point Blank Communications">
    <!-- description -->
    <meta name="description" content="E3lan Misr is creative agency, corporate, simple and clean , Based on Marketing Campaigns responsive multipurpose agency and portfolio HTML5 template with 28 unique home page demos">
    <!-- keywords -->
    <meta name="keywords" content="creative, fullscreen, business, photography, portfolio, one page, bootstrap responsive, start-up, ui/ux, html5, css3, studio, branding, creative design, multipurpose, parallax, personal, masonry, grid, coming soon, carousel, career">
    <!-- description -->
    {{--<meta name="description"
          content="{{$setting->{'setting_' . currentLang()}->website_description }}">--}}
    <!-- keywords -->
    <meta name="keywords"
          content="crop, creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$setting->{'setting_'.currentLang()}->website_name }} - @yield('title')</title>

    <!-- CSS ============================================ -->

    <link rel="shortcut icon" href="{{assetPath('website/assets/images/logo/favicon.png')}}">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{assetPath('website/assets/css/master.css')}}">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{assetPath('website/assets/css/responsive.css')}}">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="{{assetPath('website/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assetPath('website/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{assetPath('website/revolution/css/navigation.css')}}">


    @yield('customizedStyle')





</head>







<body>
<div id="app">
    <main>
        @include('website.layouts.header')
        @yield('content')
        @include('website.layouts.footer')
    </main>
</div>






{{--<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- JS
============================================ -->
<!-- javascript libraries -->
<!-- JQuery Min JS -->
<!-- end countdown section -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="{{asset('website/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/skrollr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/jquery.appear.js')}}"></script>
<!-- menu navigation -->
<script type="text/javascript" src="{{asset('website/js/bootsnav.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/jquery.nav.js')}}"></script>
<!-- animation -->
<script type="text/javascript" src="{{asset('website/js/wow.min.js')}}"></script>
<!-- page scroll -->
<!-- <script type="text/javascript" src="js/page-scroll.js"></script> -->
<!-- swiper carousel -->
<script type="text/javascript" src="{{asset('website/js/swiper.min.js')}}"></script>
<!-- counter -->
<script type="text/javascript" src="{{asset('website/js/jquery.count-to.js')}}"></script>
<!-- parallax -->
<script type="text/javascript" src="{{asset('website/js/jquery.stellar.js')}}"></script>
<!-- magnific popup -->
<script type="text/javascript" src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<!-- portfolio with shorting tab -->
<script type="text/javascript" src="{{asset('website/js/isotope.pkgd.min.js')}}"></script>
<!-- images loaded -->
<script type="text/javascript" src="{{asset('website/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- pull menu -->
<script type="text/javascript" src="{{asset('website/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/hamburger-menu.js')}}"></script>
<!-- counter  -->
<script type="text/javascript" src="{{asset('website/js/counter.js')}}"></script>
<!-- fit video  -->
<script type="text/javascript" src="{{asset('website/js/jquery.fitvids.js')}}"></script>
<!-- equalize -->
<script type="text/javascript" src="{{asset('website/js/equalize.min.js')}}"></script>
<!-- skill bars  -->
<!-- justified gallery  -->
<script type="text/javascript" src="{{asset('website/js/justified-gallery.min.js')}}"></script>
<!--pie chart-->
<script type="text/javascript" src="{{asset('website/js/jquery.easypiechart.min.js')}}"></script>
<!-- instagram -->
<!-- retina -->
<script type="text/javascript" src="{{asset('website/js/retina.min.js')}}"></script>
<!-- revolution -->
<script type="text/javascript" src="{{asset('website/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!-- setting -->
<script type="text/javascript" src="{{asset('website/js/main.js')}}"></script>

<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

@yield('customizedScript')


</body>
</html>
