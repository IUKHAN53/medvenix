<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script id="service-bell-script" src="{{asset('landing/assets/js/main.js')}}" async=""></script>
  <script async="" src="{{asset('landing/assets/js/clarity.js')}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Medvenix</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="{{asset('landing/assets/js/lottie.min.js')}}" id="lottie-js"></script>
  <noscript>
    <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
        display: none !important;
      }</style>
  </noscript>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  @yield('styles')
</head>
<body
  class="home page-template-default page page-id-6395 wp-custom-logo wp-embed-responsive hyro-page_homepage group-blog elementor-default elementor-kit-5 elementor-page elementor-page-6395 e--ua-blink e--ua-edge e--ua-webkit"
  data-elementor-device-mode="widescreen">
<div class="site" id="page">
  @include('layouts.landing.nav')
  @yield('content')
  @include('layouts.landing.footer')
  @include('layouts.landing.scripts')
</div>
</body>
</html>
