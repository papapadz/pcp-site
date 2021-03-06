<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PCP Ilocos-Abra Chapter</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/css/hover-min.css') }}" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="{{ asset('lib/css/style.css') }}" rel="stylesheet">
  <style>
  .float{
    height:60px;
    bottom:40px;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
    
  }

  .my-float{
    margin-top:15px;
  }

  .back {
    left: 40px;
    position: absolute;
    top:100px;
    width:100px;
    background-color:#0C9;
  }

  .next {
    position:fixed;
    font-size: 4vmin;
    width: 100%;
    background-color:#dac527;
  }
  </style>
  @yield('styles')
</head>

<body>
  @include('partials.header')
  
  @yield('content')

  @include('partials.footer')

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->

  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('lib/js/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('lib/js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>
