<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CoBoard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ route('vendor', ['file' => 'fontawesome-free/css/all.min.css']) }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ route('css', ['file' => 'sb-admin-2.css']) }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ route('css', ['file' => 'siteBoard.css']) }}" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <!--<i class="fas fa-laugh-wink"></i>-->
          <img src="{{ route('img', ['file' => 'logo.svg']) }}" style="height:50px; width:50px;">
        </div>
        <div class="sidebar-brand-text mx-3">CoBoard</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('home') }}">
         <i class="fas fa-laugh-wink"></i>
          <span>Board</span></a>
          <a class="nav-link" href="{{ route('users') }}">
            <i class="fas fa-laugh-wink"></i>
             <span>Liste utilisateur</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ array_key_exists('login', $_SESSION) ? $_SESSION['login'] : 'Non connecté' }}</span>
                <img class="img-profile rounded-circle" src="{{ route('img', ['file' => array_key_exists('pp', $_SESSION) ? $_SESSION['pp'] : 'user.png']) }}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item"
                  @if (array_key_exists("login", $_SESSION)))
                    {{ 'href=' . route('logout') . '?redirect=' . request()->path() }}
                  @endif >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- ___________________________________________________________________________ -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        @yield('content')

        </div>
        <!-- End of Main Content -->

        <!-- ___________________________________________________________________________ -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ route('vendor', ['file' => 'jquery/jquery.min.js']) }}"></script>
    <script src="{{ route('vendor', ['file' => 'bootstrap/js/bootstrap.bundle.min.js']) }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ route('vendor', ['file' => 'jquery-easing/jquery.easing.min.js']) }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ route('js', ['file' => 'sb-admin-2.min.js']) }}"></script>

</body>

</html>