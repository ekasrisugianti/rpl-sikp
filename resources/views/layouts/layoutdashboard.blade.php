<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en" id="html-toggle">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/logo-sikp.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('admin/img/logo-sikp.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SIKP
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
  @yield('head-script')
  @yield('style')

  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }
  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-active-color="info">
      <div class="logo">
        <a href="/admin/dashboard" class="simple-text logo-normal">
              <img src="{{ asset('admin/img/logo-sikp.png') }}">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ (request()->is('dashboard/dosen*')) ? 'active' : '' }}">
            <a href="javascript:;">
              <i class="nc-icon nc-paper"></i>
              <p>DOSEN</p>
            </a>
          </li>
          <li class="{{ (request()->is('dashboard/mahasiswa*')) ? 'active' : '' }}">
            <a href="/dashboard/mahasiswa">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>MAHASISWA</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle" id="div-toggle">
              <button type="button" class="navbar-toggler" id="btn-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">SIKP</a>
          </div>

          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="/admin/dashboard" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Setting</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-bottom: 10px;">
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="preloader">
        <div class="loading">
          <img src="{{ asset('admin/img/loading.gif') }}" width="100%">
        </div>
      </div>
      <div class="content" style="min-height: 80vh;">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <footer class="footer" style="bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://api.whatsapp.com/send?phone=6285600985557" target="_blank"><i class="fa fa-whatsapp text-success"></i> Hubungi Admin</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> for you
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>


  @yield('script')

  <!--   Core JS Files   -->
  <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
  <!-- Chart JS -->
  <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('admin/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".preloader").fadeOut();
      $('#btn-toggler').on('click', function() {
        $('#div-toggle').toggleClass('toggled');
        $('#html-toggle').toggleClass('nav-open');
        // g = document.createElement('div');
        // g.setAttribute("id","bodyClick");
        // document.body.appendChild(g);
      });
    });
  </script>

  @yield('footer-script')

</body>

</html>