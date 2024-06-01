<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Compartir lista</title>

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
            <h1>Compartir Lista</h1>
            <p>Seleccione el usuario con el que desea compartir la lista actual.</p>
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
              <h3 class="card-title">Compartir lista</h3>
            </div>
            <div class="card-body">
              <div class="row-md-12">
              
              <form action="compartir_lista2.php">
                <div class="form-group col-md-5">
                  <label for="nombre_lista">Seleccione Usuario:</label>
                  
            
                    <select style="height: 35px;" name="usuario_compartir" id="usuario_compartir">
                    <option value="seleccione">Seleccione</option>
                    
                    <?php
                    include("conexion.php");
                    
                    //Realizamos la consulta y guardamos el contenido en una variable $resultado
                    $consulta = "SELECT * FROM usuario";
                                
                    $resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

                    while($columna = mysqli_fetch_array($resultado)){
                    echo "<option value=" . $columna['id_usuario'] ."> ".$columna['nombre_usuario']." </option> ";
                    
                        
                        
                        }


                    //Cerramos nuestra conexión a la base de datos
                    mysqli_close($conexion);
                    
                ?>


                    
                
                    </select>
                    <input class="btn btn-primary" type="submit" value="Compartir" />
          </form>
                </div>
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
