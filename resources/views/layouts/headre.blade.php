<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog - laravel </title>
    <link rel = "icon" href = "{{asset('logo.png')}}" type = "image/x-icon">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link data-optimized="2" rel="stylesheet"  href="https://themeger.shop/wordpress/katen/catalog/wp-content/litespeed/css/7/590d5b52775d1c70ec414de2a3f55c5a.css?ver=b3da9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <script src="https://themeger.shop/wordpress/katen/catalog/wp-includes/js/jquery/jquery.min.js?ver=3.6.3" id="jquery-core-js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>



<link rel="stylesheet" href="style.css"> 


<link rel="stylesheet" data-asynced="1" data-optimized="2" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://themeger.shop/wordpress/katen/wp-content/litespeed/css/1/69f63d4303c529251d384d763f9f63d6.css?ver=f6b07"><script>!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);</script> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="https://themeger.shop/wordpress/katen/xmlrpc.php">

<meta name="generator" content="WordPress 6.2.2">
<meta name="generator" content="WooCommerce 7.7.2">
<link rel="canonical" href="https://themeger.shop/wordpress/katen/">
<link rel="shortlink" href="https://themeger.shop/wordpress/katen/">
<link rel="alternate" type="application/json+oembed" href="https://themeger.shop/wordpress/katen/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemeger.shop%2Fwordpress%2Fkaten%2F">
<link rel="alternate" type="text/xml+oembed" href="https://themeger.shop/wordpress/katen/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthemeger.shop%2Fwordpress%2Fkaten%2F&amp;format=xml">
<!-- <noscript>
    <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
</noscript>
<meta name="generator" content="Elementor 3.13.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto"><link rel="icon" href="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/09/favicon-48x48.png" sizes="32x32"><link rel="icon" href="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/09/favicon.png" sizes="192x192"><link rel="apple-touch-icon" href="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/09/favicon.png"><meta name="msapplication-TileImage" content="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/09/favicon.png"><script src="https://themeger.shop/wordpress/katen/wp-includes/js/wp-emoji-release.min.js?ver=6.2.2" type="text/javascript" defer=""></script><style type="text/css">undefined</style></head>
 -->





    @vite('resources/js/app.js')
</head>

<body >
    <!-- reading-bar-wrapper -->
    <div class="reading-bar-wrapper">
        <div class="reading-bar" style="width: 99.9955%;"></div>
    </div>
    <!-- switcher-button -->
    <div class="switcher-button active">
        <div class="switcher-button-inner-left"></div>
        <div class="switcher-button-inner"></div>
    </div>
    <div class="site-wrapper">
        <div class="main-overlay">
        </div>
        @include('layouts.navbar' )
        @yield('content')
    </div>
    {{-- search-popup --}}
    <div class="search-popup">
        <button type="button" class="btn-close " aria-label="Close"></button>
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <form class="d-flex search-form" method="get" action=" ">
                <input class="form-control me-2" placeholder="Search and press enter ..." type="text" name="s"
                    id="search" value="" aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>


    <!-- footer -->
    @include('layouts.footer')


    <script data-optimized="1"
    src="https://themeger.shop/wordpress/katen/wp-content/litespeed/js/1/de1f7c039821bf695814f4e6db714ac9.js?ver=f6b07"></script>
  <span id="elementor-device-mode" class="elementor-screen-only"></span>



 <script>
            // $('ul li a').click(function(){
            //     $('li a').removeClass("active");
            //     $(this).addClass("active");
            // });
    </script>

</body>

</html>
