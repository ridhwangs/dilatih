<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>dilatih.co | Explore Our Program</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{!! asset('assets/vendor/swiper/swiper-bundle.min.css') !!}">
    <!-- Modal Video-->
    <link rel="stylesheet" href="{!! asset('assets/vendor/modal-video/css/modal-video.min.css') !!}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Nunito:400,600,800">
    <!-- Device Mockup-->
    <link rel="stylesheet" href="{!! asset('assets/css/device-mockups.css') !!}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{!! asset('assets/css/style.default.css') !!}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('favicon.ico') !!}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
      <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

  </head>
  <body>
    @include('theme.header')
    @yield('content')
    @include('theme.footer')
    <!-- JavaScript files-->
    <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/modal-video/js/modal-video.js') !!}"></script>
    <script src="{!! asset('assets/js/front.js') !!}"></script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  

  
  </body>
</html>