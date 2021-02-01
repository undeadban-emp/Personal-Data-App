<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
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
                    <h1>Personal Data</h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <form method="POST" class="form-validate" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" style="font-weight:bolder; font-size:16px;">{{ __('Username:') }}</label>
                            <div class="col-md-12">
                                <input style="border-radius:10px;" placeholder="Enter Your Username Here!" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bolder; font-size:16px;" for="password">{{ __('Password:') }}</label>

                            <div class="col-md-12">
                                <input style="border-radius:10px;" placeholder="Enter Your Password Here!" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <button type="submit" class="pull-right btn btn-primary">
                        {{ __('Login') }}
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('/js/front.js')}}"></script>
  </body>
</html>
