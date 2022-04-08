<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <title><article></article></title>
    <link  href = " {{ asset('frontend/ css/bootstrap.css') }} "  rel = "stylesheet"  type = "text/css" /> 
<link  href = " {{ asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css' ) }} "  type = "texte/css" rel = "feuille de style" > 
<link  href = " {{ asset('frontend/plugins/fancybox/fancybox.min.css') }} "  type = "text/css"  rel = "stylesheet" > 
<link  href = " {{ asset('frontend/ plugins/owlcarousel/assets/owl.carousel.min.css') }} "  rel = "stylesheet" > 
<link  href = " {{ asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css' ) }} "  rel = "feuille de style" > 
<lien  href = "{{ asset('frontend/css/ui.css') }} "  rel = "stylesheet"  type = "text/css" /> 
<lien  href = " {{ asset('frontend/css/responsive.css') }} "  rel = "stylesheet"  media = "écran uniquement et (largeur max : 1200px)" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link  rel ="shortcut icon"  type="image/x-icon"  href="{{ asset('frontend/images/favicon.ico') }} "> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
    
    <script  src = " {{ asset('frontend/js/jquery-2.0.0.min.js') }} "  type="text/javascript"> </script> 
    <script  src = " {{ asset('frontend/js/bootstrap.bundle.min.js') }} "  type="text/javascript" > </script> 
    <script  src = " {{ asset('frontend/plugins/fancybox/fancybox.min.js') }} "  type="text/javascript"> </script> 
    <script  src = " {{ asset('frontend/plugins/owlcarousel/owl.carousel.min.js') }} " > </script> 
    <script  src = " {{ asset('frontend/js/script.js') }} "  type="text/javascript" > </script>

    @yield('css')
    <style>
    
    </style>
  </head>
  <body>
       @include('header')
    <main class="section">
      <div class="container">
        @yield('content')
      </div>
    </main>
    @yield('footer')
  </body>
</html>