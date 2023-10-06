<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Url Shorten System</title>
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
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-xl-7 col-xxl-8">
              {{--  <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
              </a>  --}}
              <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
              <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div class="col-sm-8 col-md-6 col-xl-9">
                  <h2 class="mb-3 fs-7 fw-bolder">Welcome to Url Shorten System</h2>
                  <p class=" mb-9">Your Admin Dashboard</p>
                  <x-validation-errors class="mb-4" />

                  <form method="POST" action="{{ route('register') }}">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputtext" aria-describedby="textHelp" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" :value="old('email')" required autocomplete="username" >
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required autocomplete="new-password">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</button>
                    {{--  <a href="authentication-login.html" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</a>  --}}
                    <div class="d-flex align-items-center">
                      <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                      <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Sign In</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

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
  </body>

</html>
