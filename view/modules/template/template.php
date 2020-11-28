<?php

if (isset($_SESSION['nombre'])) {
  $sesion = $_SESSION['nombre'];
}else{
  echo "Usted no esta autorizado para estar aqui";
  header("Location: ../../../index.php");
  exit();
}

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Evenorg Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
     </ul>

    <!-- SEARCH FORM -->
    <form method="post" action="index.php?pag=eventosDinamicos" class="form-inline ml-3">
    
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name ="evento" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
        
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
        
    </li>
    <li class="nav-item">
      <a href="../../../controller/userController.php?var=cerrarSesion" class="nav-link">Cerrar sesion</a>

    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../../index.php" class="brand-link">
      <img src="../../img/evenorg.png" alt="Evenorg Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Evenorg</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
	<a href="#" class="d-block"><?php echo $sesion?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
	       with font-awesome or any other icon font library -->
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Roll
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Usuario
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="index.php?pag=crearEvento" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Crear Evento</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?pag=crearEvento" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Crear Evento</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?pag=consultarEvento" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Consultar Evento</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?pag=modificarEvento" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Modificar Evento</p>
                    </a>
                  </li>
		  <li class="nav-item">
                    <a href="index.php?pag=eliminarEvento" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Eliminar Evento</p>
                    </a>
                  </li>
                  </li>
		  <li class="nav-item">
                    <a href="index.php?pag=asiste" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Eventos a los que Asiste</p>
                    </a>
                  </li>
                </ul>
		<li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
		    Proveedor
		    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="../../../controller/proveedorController.php?pag=formServicios" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Registrar Servicio</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?pag=formConsultarservicio" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Consultar Servicio</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?pag=actualizarServicio" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Actualizar Servicio</p>
                    </a>
                  </li>
             </li>
             
            </ul>
          </li>

	</ul>
     </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!--Contenido cargado por el controlador-->

<?php

$mvt = new templateController();
$mvt -> PaginasTemplate();

?>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
