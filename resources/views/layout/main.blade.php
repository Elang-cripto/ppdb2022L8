<!DOCTYPE html>
<html lang="en">
  @include('layout/head')
<body class="sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
  @include('sweetalert::alert')
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('asset/dist/img/kemenag.png') }}" alt="ppdbonline" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layout/nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @section('sidebar')
  @show

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('layout/foot')

</body>
</html>
