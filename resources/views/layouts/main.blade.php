<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">


    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">

  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->

          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="/home" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span></span><strong>Personal Data</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>PI</strong></div></a>
                <!-- Toggle Button-->
                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Logout    -->
                <a class="nav-item nav-link logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}<i class="fa fa-sign-out"></i>
                </a>
                <form id="logout-form" action="{{ route('custom.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{ Auth::user()->name }}</h1>
              <p>User</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="/home"> <i class="fa fa-home"></i>Dashboard </a></li>
            <li><a href="/add"> <i class="fa fa-plus"></i>Add Person Information</a></li>
            <li><a href="/view"> <i class="fa fa-eye"></i>View Person Information </a></li>
            <li><a href="/settings"> <i class="fa fa-cogs"></i>Settings </a></li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          @yield('content')
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <p>Copy Rights &copy; 2021</p>
                </div>
              </div>
            </div>
          </footer>
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
    <script src="{{asset('/js/charts-home.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('/js/front.js')}}"></script>
    <script>

        // ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);

        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});
    </script>


  </body>
</html>
