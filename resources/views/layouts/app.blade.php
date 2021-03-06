<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">        
        <script src="https://kit.fontawesome.com/cecf7fd386.js" crossorigin="anonymous"></script>
        <title>PortFolio Cédric Lima</title>
    </head>
    <body class="antialiased">
      <header class="sticky-top" id="nav">
         @include('layouts.nav')
      </header>


      <video loop id="bgvid">
         <source  src="{{ asset('storage/video/fond.mp4') }}" type="video/mp4"/>
      </video>


      <div>
         @yield('content')
      </div>

      <button id="vidpause" class="btn btn-dark">
         Lecture
    </button>

      <script src="{{ asset('js/video.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="{{ asset('js/script.js') }}"></script>
   </body>
</html>
