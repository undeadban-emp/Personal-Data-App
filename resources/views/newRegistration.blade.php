<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('/css/fontastic.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Register New Account</h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="form-validate">
                    <div class="form-group">
                      <input id="register-username" type="text" name="registerUsername" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="registerEmail" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Email Address      </label>
                    </div>
                    <div class="form-group">
                      <input id="register-password" type="password" name="registerPassword" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">password        </label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">Agree the terms and policy</label>
                    </div>
                    <div class="form-group">
                      <button id="regidter" type="submit" name="registerSubmit" class="btn btn-primary">Register</button>
                    </div>
                  </form><small>Already have an account? </small><a href="/new-login" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src=" {{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src=" {{asset('/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src=" {{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src=" {{asset('/vendor/chart.js/Chart.min.js')}}"></script>
    <script src=" {{asset('/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('/js/front.js')}}"></script>
  </body>
</html>
