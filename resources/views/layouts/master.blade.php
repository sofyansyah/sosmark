<!doctype html>
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
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/demo.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/component.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/bootstrap-toggle.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/bootstrap-toggle.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">



</head>
<body>

  <div class="container">
    <div class="panel panel-default">

     @include('header')

     @yield('content')
   </div>
 </div>
 <!-- End Container -->



 @yield('javascript')
    <!-- JS
    ================================================== -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom-file-input.js')}}"></script>
    <script src="{{asset('js/bootstrap-toggle.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.highchartTable.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.highchartTable-min.js')}}" type="text/javascript"></script>


  </body>



  </html>