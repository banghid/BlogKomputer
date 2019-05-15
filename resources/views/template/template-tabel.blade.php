<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <!-- JavaScript files-->
    <script src="{{asset('/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"> </script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/js/Chart.min.js')}}"></script>
    <script src="{{asset('/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/charts-home.js')}}">

    </script>
    <!-- Main File-->
    <script src="{{asset('/js/front.js')}}"></script>
  </head>
  <body>
    @yield('konten')
  </body>
</html>
