<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="token" id="token" value="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="icon" type="image/x-icon" href="images/logo.jpg" />
  <title>@yield('titulo')</title>

  <!-- Font Awesome Icons -->
  <script src="{{asset('js/vue.js')}}" type="text/javascript"></script>

  <link rel="stylesheet" href="css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <meta name="token" id="token" value="{{ csrf_token() }}">

</head>

<body class="hold-transition sidebar-mini">
<div class="card_content">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar butttons -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block btn btn-space">
        <a href="home" class="btn btn-outline-success btn-sm">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block btn btn-space">
        <a href="#" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline col-sm-8 btn btn-space">
      <a>
      <h4 class="text-center text-primary">COLEGIO DE BACHILLERES DEL ESTADO DE YUCATÁN</h3>
      <h5 class="text-center text-primary">PLANTEL TEMAX</h4>
      </a>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!--Correo-->
      <li>
      <a href="https://www.facebook.com/search/top?q=cobay%20temax" data-widget="control-sidebar" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
<i class="btn btn-space"></i></a>
      </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar elevation-4"  style="background:navy;">
    <!-- Brand Logo -->
      <a>
      <img src="images/cobay_logo.png" alt="Cobay Logo" class="brand-imagen img-circle elevation-3"
           style="opacity: .8" width="50" height="50">
      <span class="brand-text font-weight-light text-white">COBAY TEMAX</span>
      </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-white">David Canul Herrera</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="text-white">
                Administración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="docen" class="nav-link active">
                  <i class="fa fa-address-book btn-space"></i>
                  <p class="text-white">Docentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="alumn" class="nav-link">
                  <i class="fa fa-users"></i>
                  <p class="text-white">Alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mate" class="nav-link">
                  <i class="fa fa-puzzle-piece"></i>
                  <p class="text-white">Materias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="califs" class="nav-link">
                  <i class="fa fa-clipboard"></i>
                  <p class="text-white">Calificaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="doc" class="nav-link">
                  <i class="fa fa-folder"></i>
                  <p class="text-white">Documentos</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Control Escolar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pagina activa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card_content">
      <div class="row mb-12">
          @yield('contenido')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Contactos</h5>
      <p>Correos</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Derechos reservados
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io"></a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@stack('scripts')

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
