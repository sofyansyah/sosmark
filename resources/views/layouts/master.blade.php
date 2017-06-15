<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

<!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  @yield('css_styles')

<!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

  <div class="container">
    <div class="panel panel-default">

     @include('header')

     @yield('content')
   </div>
 </div>
 <!-- End Container -->



 
    <!-- JS
    ================================================== -->
    <script src="{{asset('js/jquery.3.2.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
   
    @yield('javascript')
    


  </body>



  </html>