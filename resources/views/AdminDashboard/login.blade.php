<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon"  href="{{ asset('icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon"  href="{{ asset('icon.png') }}" type="image/x-icon">
    <title>WebCeylon</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('backend/assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">

  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 p-0">
          <div class="login-card login-dark">
            <div>
              <div><a class="logo text-start" href=""><img class="img-fluid for-light" style="height:80px;" src="{{ asset('webceylon.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('icon.png') }}" alt="loginpage"></a></div>
              <div class="login-main"> 
              <form class="theme-form" method="POST" action="">
                    @csrf  {{-- CSRF Protection --}}
                    
                    <h4>Sign in to account</h4>
                    <p>Enter your email & password to login</p>

                    {{-- Email Field --}}
                    <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" name="email" required placeholder="example@gmail.com" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                  <div class="form-group">
                      <label class="col-form-label">Password</label>
                      <div class="form-input position-relative">
                          <input class="form-control password-field" type="password" name="password" required placeholder="********">
                          <div class="show-hide"><span class="show"></span></div>
                      </div>
                      @error('password')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>

                    {{-- Remember Me & Forgot Password --}}
                    <!--<div class="form-group mb-0">
                        <div class="checkbox p-0">
                            <input id="checkbox1" type="checkbox" name="remember">
                            <label class="text-muted" for="checkbox1">Remember password</label>
                        </div>
                        <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>-->

                    {{-- Submit Button --}}
                    <div class="text-end mt-3">
                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>

      <script>
        $(document).on('click', '#error', function(e) {
          if($('.email').val() == '' || $('.pwd').val() == ''){
          swal(
            "Error!", "Sorry, looks like some data are not filled, please try again !", "error"           
          )
          }
        });
      </script>
      <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.show-hide').forEach(function(toggle) {
            toggle.addEventListener('click', function () {
                const input = this.closest('.form-input').querySelector('.password-field');
                const icon = this.querySelector('.show');
                
                if (input.type === "password") {
                    input.type = "text";
                    icon.textContent = ""; // you can use eye-off icon or custom style
                } else {
                    input.type = "password";
                    icon.textContent = "";
                }
            });
        });
    });
</script>

    </div>
  </body>
</html>