
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/sneat/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>SIMPP | Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/sneat/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/sneat/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/sneat/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="/sneat/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/sneat/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card ">
            <div class="card-body">
              
              <h4 class="mb-2">Form Register</h4>
              <p class="mb-4">Silahkan Register terlebih Dahulu untuk membuat Akun</p>

              <form id="formAuthentication" class="mb-3" action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"> Name</label>
                    <input
                      type="text"
                      class="form-control @error('name')
                          is-invalid
                      @enderror"
                      id="name"
                      name="name"
                      placeholder="Masukkan Nama"
                      autofocus
                      value="{{ old('name') }}"
                      required
                    />
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input
                      type="text"
                      class="form-control @error('email')
                          is-invalid
                      @enderror"
                      id="email"
                      name="email"
                      placeholder="Masukkan Email"
                      autofocus
                      value="{{ old('email') }}"
                      required
                    />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="mb-3">
                  <label for="username" class="form-label"> Username</label>
                  <input
                    type="text"
                    class="form-control @error('username')
                        is-invalid
                    @enderror"
                    id="username"
                    name="username"
                    placeholder="Masukkan Username"
                    autofocus
                    value="{{ old('username') }}"
                    required
                  />
                  @error('username')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    {{-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a> --}}
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password')
                          is-invalid
                      @enderror"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror 
                  </div>
                </div>
                <div class="mb-3">
                  {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div> --}}
                </div>
                <div class="mb-3">
                  <button class="btn btn-success d-grid w-100" type="submit">Register</button>
                </div>
              </form>

              <p class="text-center">
                <span>Sudah Punya Akun?</span>
                <a href="/login">
                  <span>Login</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/sneat/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
