<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog - laravel </title>
    <link rel = "icon" href = "{{asset('logo.png')}}" type = "image/x-icon">

    <script src="https://themeger.shop/wordpress/katen/catalog/wp-includes/js/jquery/jquery.min.js?ver=3.6.3" id="jquery-core-js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


{{-- ----------------------   Dynamic link ------------------------ --}}
 <link rel="stylesheet" data-asynced="1" data-optimized="2" as="style"
 onload="this.onload=null;this.rel='stylesheet'"
 href="https://themeger.shop/wordpress/katen/wp-content/litespeed/css/1/efe34045949be87753c90680441e9bf5.css?ver=8af77">






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




  <script data-optimized="1" src="https://themeger.shop/wordpress/katen/wp-content/litespeed/js/1/a9368b9a73f8c439f832c1d98447a175.js?ver=8af77"></script>

 <script>
            // $('ul li a').click(function(){
            //     $('li a').removeClass("active");
            //     $(this).addClass("active");
            // });
    </script>

</body>

</html>
