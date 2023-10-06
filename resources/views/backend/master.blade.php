<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Url Shortener System</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="url" />
    <meta name="author" content="" />
    <meta name="keywords" content="url" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('asset/backend')}}/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{ asset('asset/backend')}}/css/style.min.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      @include('backend.include.left_sidebar')
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        @include('backend.include.header')
        <!--  Header End -->
        <div class="container-fluid">
            @yield('content')
        </div>
      </div>
    </div>

    @include('backend.include.mobile_navbar')

    <!--  Import Js Files -->
    <script src="{{ asset('asset/backend')}}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('asset/backend')}}/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('asset/backend')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="{{ asset('asset/backend')}}/js/app.min.js"></script>
    <script src="{{ asset('asset/backend')}}/js/app.init.js"></script>
    <script src="{{ asset('asset/backend')}}/js/app-style-switcher.js"></script>
    <script src="{{ asset('asset/backend')}}/js/sidebarmenu.js"></script>
    <script src="{{ asset('asset/backend')}}/js/custom.js"></script>
    <!--  current page js files -->
    <script src="{{ asset('asset/backend')}}/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('asset/backend')}}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('asset/backend')}}/js/dashboard.js"></script>

  </body>

</html>
