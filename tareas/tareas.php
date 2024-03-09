<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mis tareas</title>

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
 

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tareas<b>PRO</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li><i class="fa fa-user"></i>&nbsp &nbsp</li>
              <li>Nombre de Usuario</li>
            </ol>
          </div>
        </div>
        <a class="btn btn-success" href="crear_tarea.php"><i class="fa fa-plus"></i> Nueva Tarea</a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mis tareas</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">#</th>
                      <th style="width: 20%">Titulo</th>
                      <th style="width: 30%">Responsable</th>
                      <th>Progreso</th>
                      <th style="width: 8%" class="text-center">Estado</th>
                      <th style="width: 20%" class="text-center">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                      <?php
                        include("conexion.php");
                        
                        //Realizamos la consulta y guardamos el contenido en una variable $resultado
                        $consulta = "SELECT * FROM tarea";
                        $resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

                        //Mostramos el resultado que ya traemos de la BD


                            //Ciclo para mostrar el contenido de la base de datos en la tabla
                            while($columna = mysqli_fetch_array($resultado)){
                            echo "<tr>";
                                echo "<td>" . $columna['id_tarea'] . "</td>
                                    <td>
                                      <a>" . $columna['titulo_tarea'] . "</a>
                                      <br/>
                                      <small>Creada el " . $columna['fec_crea_tarea'] . "</td>

                                      <td>
                                        <ul class='list-inline'>
                                            <li class='list-inline-item'>
                                                <img alt='Avatar' class='table-avatar' src='./AdminLTE-3.2.0/dist/img/avatar.png'>
                                            </li>
                                            <li class='list-inline-item'>
                                                <img alt='Avatar' class='table-avatar' src='./AdminLTE-3.2.0/dist/img/avatar2.png'>
                                            </li>
                                            <li class='list-inline-item'>
                                                <img alt='Avatar' class='table-avatar' src='./AdminLTE-3.2.0/dist/img/avatar3.png'>
                                            </li>
                                            <li class='list-inline-item'>
                                                <img alt='Avatar' class='table-avatar' src='./AdminLTE-3.2.0/dist/img/avatar4.png'>
                                            </li>
                                        </ul>
                                      </td>
                                    
                                    
                                    <td class='project_progress'>
                                      <div class='progress progress-sm'>
                                        <div class='progress-bar bg-green' role='progressbar' aria-valuenow='57' aria-valuemin='0' aria-valuemax='100' style='width: 57%'>
                                        </div>
                                      </div>
                                      <small>
                                        57% Completada
                                      </small>
                                    </td>
                                    <td class='project-state'>";
                                      if ($columna['estado_tarea']=="No iniciada") {
                                        echo "<span class='badge badge-danger'>".$columna['estado_tarea']."</span>";
                                      }elseif ($columna['estado_tarea']=="En Proceso") {
                                        echo "<span class='badge badge-warning'>".$columna['estado_tarea']."</span>";
                                      }
                                      
                                    echo "</td>
                                    
                                    <td class='project-actions text-right'>
                                      <a class='btn btn-primary btn-sm' href='ver_tarea.php?id=" . $columna['id_tarea'] . "'>
                                          <i class='fas fa-eye'></i> Ver
                                      </a>
                                      <a class='btn btn-info btn-sm' href='editar_tarea.php?id=" . $columna['id_tarea'] . "'>
                                          <i class='fas fa-pencil-alt'></i> Editar
                                      </a>
                                      <a class='btn btn-danger btn-sm' href='borrar_tarea.php?id=" . $columna['id_tarea'] . "'>
                                          <i class='fas fa-trash'></i> Borrar
                                      </a>
                                    </td>"; 
                            echo "</tr>" ;
                            }


                        //Cerramos nuestra conexión a la base de datos
                        mysqli_close($conexion);

                    ?>


              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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

 

<!-- jQuery -->
<script src="./AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./AdminLTE-3.2.0/dist/js/demo.js"></script>


</body>
</html>
