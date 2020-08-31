<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Riza - @yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/vendor/fontawesome/css/all.min.css') }}">

  <!-- Google fonts - Popppins for copy-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
  <!-- orion icons-->
  <link rel="stylesheet" href="{{ asset('backend/css/orionicons.css') }}">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{ asset('backend/css/style.sea.css') }}" id="theme-stylesheet">
  
  <!-- Favicon-->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/img/favicon.png') }}">

  @yield('css')
  
</head>
<body>
  <!-- navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
      <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a>
      <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">Hotel Riza</a>
      <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
        <li class="nav-item">
          <form id="searchForm" class="ml-auto d-none d-lg-block">
            <div class="form-group position-relative mb-0">
              <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0">
                <i class="o-search-magnify-1 text-gray text-lg"></i>
              </button>
              <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
            </div>
          </form>
        </li>

        <li class="nav-item dropdown mr-3">
          <a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
          <div aria-labelledby="notifications" class="dropdown-menu">
            <a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                <div class="text ml-2">
                  <p class="mb-0">You have 2 followers</p>
                </div>
              </div>
            </a>
            <a href="#" class="dropdown-item"> 
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                <div class="text ml-2">
                  <p class="mb-0">You have 6 new messages</p>
                </div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                <div class="text ml-2">
                  <p class="mb-0">Server rebooted</p>
                </div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="d-flex align-items-center">
                <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                <div class="text ml-2">
                  <p class="mb-0">You have 2 followers</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item text-center">
              <small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small>
            </a>
          </div>
        </li>

        <li class="nav-item dropdown ml-auto">
          <a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="{{ asset('backend/img/avatar-6.jpg') }}" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
          <div aria-labelledby="userInfo" class="dropdown-menu">
            <a href="#" class="dropdown-item">
              <strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Settings</a>
            <a href="#" class="dropdown-item">Activity log</a>
            <div class="dropdown-divider"></div>
            <a href="login.html" class="dropdown-item">Logout</a>
          </div>
        </li>

      </ul>
    </nav>
  </header>

  <div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
      
      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-3 font-weight-bold small headings-font-family">MAIN</div>

      <ul class="sidebar-menu list-unstyled">
        <li class="sidebar-list-item">
          <a href="index.html" class="sidebar-link text-muted active">
            <i class="fas fa-home mr-3"></i><span>Home</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="charts.html" class="sidebar-link text-muted">
            <i class="o-sales-up-1 mr-3 text-gray"></i><span>Charts</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="tables.html" class="sidebar-link text-muted">
            <i class="o-table-content-1 mr-3 text-gray"></i><span>Tables</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="forms.html" class="sidebar-link text-muted">
            <i class="o-survey-1 mr-3 text-gray"></i><span>Forms</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted">
            <i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span>
          </a>
          <div id="pages" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page one</a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
              <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
            </ul>
          </div>
        </li>
        <li class="sidebar-list-item">
          <a href="login.html" class="sidebar-link text-muted">
            <i class="o-exit-1 mr-3 text-gray"></i><span>Login</span>
          </a>
        </li>
      </ul>

      <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>

      <ul class="sidebar-menu list-unstyled">
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted">
            <i class="o-database-1 mr-3 text-gray"></i><span>Demo</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted">
            <i class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted">
            <i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" class="sidebar-link text-muted">
            <i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span>
          </a>
        </li>
      </ul>

    </div>

    <div class="page-holder w-100 d-flex flex-wrap">
      <div class="container-fluid px-xl-5">

        @yield('content')

      </div>

      <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 text-center text-md-left text-primary">
              <p class="mb-2 mb-md-0">Your company &copy; 2018-2020</p>
            </div>
            <div class="col-md-6 text-center text-md-right text-gray-400">
              <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>

            </div>
          </div>
        </div>
      </footer>
    </div> {{-- end of page-holder --}}
  </div>
  
  <!-- JavaScript files-->
  <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/vendor/popper.js/umd/popper.min.js') }}"> </script>
  <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
  <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="{{ asset('backend/js/charts-home.js') }}"></script>
  <script src="{{ asset('backend/js/front.js') }}"></script>

  @yield('script')

</body>
</html>