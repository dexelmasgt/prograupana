<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tarea nueva</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="tareas.php" class="nav-link">Inicio</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar Tarea</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ingrese la información de la tarea nueva</h3>
            </div>
            <div class="card-body">
              <div class="row-md-12">
                <form action="crear_tarea2.php">
                <div class="form-group col-md-5">
                  <label for="nombre_tarea">Nombre de la tarea:</label>
                  <input type="text" id="nombre_tarea" name="nombre_tarea" class="form-control">
                </div>
                <div class="form-group col-md-5">
                  <label for="fecha_vencimiento_tarea">Fecha de vencimiento:</label>
                  <input type="date" id="fecha_vencimiento_tarea" name="fecha_vencimiento_tarea" class="form-control">
                </div>
              </div>  
              <div class="form-group">
                <label for="descripcion_tarea">Descripción de la tarea:</label>
                <textarea id="descripcion_tarea" name="descripcion_tarea" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="estado_tarea">Estado:</label>
                <select id="estado_tarea" name="estado_tarea" class="form-control custom-select">
                  <option selected disabled>Seleccione</option>
                  <option>Sin iniciar</option>
                  <option>En proceso</option>
                  <option>Completado</option>
                </select>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <a href="tareas.php" class="btn btn-danger">Cancelar</a>
          <input type="submit" value="Aceptar" class="btn btn-success float-right">
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
