<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-content" content="{{ csrf_token() }}">

  <title>SURPEMAS - PAGIYANTEN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/images/surpemas1.png" rel="icon">
  <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="plugin/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="plugin/vendor/aos/aos.css" rel="stylesheet">
  <link href="plugin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="plugin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="plugin/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="plugin/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="plugin/css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>

<body>

  @include('landing.layouts.includes.navbar')
  <main id="main">
    @yield('content')
  </main>
  
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="plugin/vendor/aos/aos.js"></script>
  <script src="plugin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugin/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="plugin/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="plugin/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="plugin/vendor/php-email-form/validate.js"></script>
  <script src="plugin/js/main.js"></script>

</body>

</html>