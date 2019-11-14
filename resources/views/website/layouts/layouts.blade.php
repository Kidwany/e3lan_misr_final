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

    <title>{{@$setting->{'setting_'.currentLang()}->website_name }} - @yield('title')</title>

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
        <div id="loader-overlay">
            <div class="loader">
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                    <rect x="20" y="50" width="4" height="10" fill="#BF0731">
                        <animateTransform attributeType="xml"
                                          attributeName="transform" type="translate"
                                          values="0 0; 0 20; 0 0"
                                          begin="0" dur="0.6s" repeatCount="indefinite"/>
                    </rect>
                    <rect x="30" y="50" width="4" height="10" fill="#BF0731">
                        <animateTransform attributeType="xml"
                                          attributeName="transform" type="translate"
                                          values="0 0; 0 20; 0 0"
                                          begin="0.2s" dur="0.6s" repeatCount="indefinite"/>
                    </rect>
                    <rect x="40" y="50" width="4" height="10" fill="#BF0731">
                        <animateTransform attributeType="xml"
                                          attributeName="transform" type="translate"
                                          values="0 0; 0 20; 0 0"
                                          begin="0.4s" dur="0.6s" repeatCount="indefinite"/>
                    </rect>
                </svg>
            </div>
        </div>
        <div class="wrapper">
            <!--== Loader End ==-->
            @include('website.layouts.header')
            @yield('content')
            @include('website.layouts.footer')
        </div>

    </main>
</div>







<!--== Javascript Plugins ==-->
<script src="{{assetPath('website/assets/js/jquery.min.js')}}"></script>
<script src="{{assetPath('website/assets/js/smoothscroll.js')}}"></script>
<script src="{{assetPath('website/assets/js/plugins.js')}}"></script>
<script src="{{assetPath('website/assets/js/master.js')}}"></script>

<!-- Revolution js Files -->
<script type="text/javascript" src="{{assetPath('website/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/revolution/js/revolution.extension.video.min.js')}}"></script>

<!-- WhatsHelp.io widget -->
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "656667041413984", // Facebook page ID
            whatsapp: "+201118816000", // WhatsApp number
            call_to_action: "", // Call to action
            button_color: "#000000", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
@yield('customizedScript')


</body>
</html>
