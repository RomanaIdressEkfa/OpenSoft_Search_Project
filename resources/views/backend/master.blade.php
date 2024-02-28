<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OPEN_SOFT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('ui/backend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('ui/backend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('ui/backend')}}/https://fonts.gstatic.com" rel="preconnect">
  <link href="{{asset('ui/backend')}}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ui/backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('ui/backend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('ui/backend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('ui/backend')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('ui/backend')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('ui/backend')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('ui/backend')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('ui/backend')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('backend.partials.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('backend.partials.sidebar')
 <!-- End Sidebar-->

  <main id="main" class="main">


    <section class="section dashboard">
     @yield('content_page')
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('backend.partials.footer')
  <!-- End Footer -->

  <a href="{{asset('ui/backend')}}/#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('ui/backend')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ui/backend')}}/assets/js/main.js"></script>

</body>

</html>