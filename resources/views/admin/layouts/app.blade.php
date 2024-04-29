
<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtrans/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 11:43:45 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="{{ URL::to('/') }}/assets1/images/fav_icon.png" type="image/png" />
  <!--plugins-->
  <link href="{{ URL::to('/') }}/assets1/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{ URL::to('/') }}/assets1/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="{{ URL::to('/') }}/assets1/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="{{ URL::to('/') }}/assets1/plugins/bs-stepper/css/bs-stepper.css') !!}" rel="stylesheet" />
  <link href="{{ URL::to('/') }}/assets1/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- loader-->
  <link href="{{ URL::to('/') }}/assets1/css/pace.min.css" rel="stylesheet" />
  <script src="{{ URL::to('/') }}/assets1/js/pace.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="{{ URL::to('/') }}/assets1/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets1/css/bootstrap-extended.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets1/css/app.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets1/css/icons.css" rel="stylesheet">
  
  <title>Eudyoga.com</title>
</head>

<body class="bg-theme bg-theme2">
  <!--wrapper-->
  <div class="wrapper">

</head>
<body class="bg-theme bg-theme2">

	<div class="wrapper">
 @include('admin.layouts.sidebar')
 
@include('admin.layouts.header')




 @yield('admin.content')
 
 




  <!--end wrapper-->
  <!--start switcher-->
  <div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
      <div class="d-flex align-items-center">
        <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
        <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
      </div>
      <hr/>
      <p class="mb-0">Gaussian Texture</p>
      <hr>
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>
      <hr>
      <p class="mb-0">Gradient Background</p>
      <hr>
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
        <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
        </ul>
    </div>
  </div>
  <!--end switcher-->
  <!-- Bootstrap JS -->
  <script src="{{ URL::to('/') }}/assets1/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="{{ URL::to('/') }}/assets1/js/jquery.min.js"></script>
  <script src="{{ URL::to('/') }}/assets1/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ URL::to('/') }}/assets1/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{ URL::to('/') }}/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{ URL::to('/') }}/assets1/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="{{ URL::to('/') }}/assets1/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="{{ URL::to('/') }}/assets1/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#Transaction-History').DataTable({
        lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
      });
      } );
  </script>
  <script src="{{ URL::to('/') }}/assets1/js/index.js"></script>
  <!--app JS-->
  <script src="{{ URL::to('/') }}/assets1/js/app.js"></script>
  <script>
    new PerfectScrollbar('.product-list');
    new PerfectScrollbar('.customers-list');
  </script>