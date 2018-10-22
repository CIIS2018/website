<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
    
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">
    
    <link rel=StyleSheet href="{{asset('css/main_ciis.min.css')}}">
    <link rel=StyleSheet href="{{asset('css/frontend.min.css')}}">
    <link rel=StyleSheet href="{{asset('css/extra_style.css')}}">
    
    <meta name="description" content="Se concibe con la finalidad de actualizar, estimular y difundir los avances de la investigación científica y tecnológica">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="XIX Congreso Internacional de Informatica y Sistemas - CIIS 2018">
<meta itemprop="description" content="Se concibe con la finalidad de actualizar, estimular y difundir los avances de la investigación científica y tecnológica">
<meta itemprop="image" content="http://www.ciistacna.com/images/logo_face.jpg">

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.ciistacna.com/">
    <meta property="og:title" content="XIX Congreso Internacional de Informatica y Sistemas - CIIS 2018">
    <meta property="og:image" content="http://www.ciistacna.com/images/logo_face.jpg">
    <meta property="og:description" content="Se concibe con la finalidad de actualizar, estimular y difundir los avances de la investigación científica y tecnológica">
    <link rel="icon" href="images/logo2018.ico">
    

    <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
    <script>
        smoothScroll.init({
        selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
        selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
        speed: 2000, // Integer. How fast to complete the scroll in milliseconds
        easing: 'easeInOutCubic', // Easing pattern to use
        offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
        callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    </script>

    
    <title>@yield('title')</title>
    
    @yield('after-scripts')
</head>

<body>

<!--COMENSAMOS EL NAVEGADOR-->
@include('frontend.includes.navbar')
<!--TERMINADMOS E NAVEGADOR-->
<!--COMENSAMOS EL HEADER-->
@yield('content')

<!-- Footer -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        
@include('frontend.includes.footer')
<!-- Footer -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>        
<script src="https://buymyfuture.com/wp-content/themes/buymyfuture/js/vendor/jquery.countdown-2.1.0/jquery.countdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
<script src="{{asset('js/frontend6.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<!-- <script type="text/javascript" src="  https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.4/js/smooth-scroll.min.js"></script> -->
</body>

</html>