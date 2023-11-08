<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laboratorio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <!--<img src="/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <span class="brand-text font-weight-light">Progra UPANA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
           
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ejercicio 1</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laboratorio 21-10-2023</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">INSERTAR EN BASE DE DATOS</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insertar en base de datos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">  
                <?php
                  $nombre = $_POST['nombre'];
                  $apellido = $_POST['apellido'];
                  $fecnac = $_POST['fecnac'];
                  $grado = $_POST['grado'];
                  $carrera = $_POST['carrera'];
                
                 
                
                  //CODIGO PARA GUARDAR EN BASE DE DATOS
                  
                    //Ejemplo de insertar registro en base de datos MySQL con PHP.

                    //Guardamos en viariables los parámetros de la base de datos
                    $usuario = "root";
                    $password = "";
                    $servidor = "localhost";
                    $basededatos = "prograupana2";

                    //Creamos la conexión a la base de datos. Usamos la función mysqli_connect()
                    $conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar.");

                    //Después de que creamos la conexión seleccionamos la base de datos
                    $db = mysqli_select_db($conexion, $basededatos) or die ("No se encontro la base de datos");

                    //Realizamos la consulta y guardamos el contenido en una variable $resultado
                    $consulta = "INSERT INTO `estudiante` (`id_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `fec_nac_estudiante`, `grado_estudiante`, `carrera_estudiante`) 
                    VALUES (NULL,'" . $nombre ."','" . $apellido ."','". $fecnac ."','" . $grado ."','" . $carrera ."')";
                    
                    $resultado = mysqli_query($conexion, $consulta) ;
                    
                    $respuesta = "Se inserto el registro: $nombre $apellido" or die ("Algo salio mal con la consulta");
                    echo $respuesta;


                    //Cerramos nuestra conexión a la base de datos
                    mysqli_close($conexion);

                    ?>
                  
                
              </div>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2023 <a href="index.php">PrograUPANA</a>.</strong> Todos los derechos reservados
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/AdminLTE-3.2.0/dist/js/demo.js"></script>
</body>
</html>
