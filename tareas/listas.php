<?php
session_start();
                          
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mis listas</title>
  
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
              <li><?php echo $_SESSION['nombre_usuario'];?></li>
            </ol>
          </div>
        </div>
        <a class="btn btn-success" href="crear_lista.php"><i class="fa fa-plus"></i> Nueva Lista</a>
        <a class="btn btn-warning" href="tareas.php"><i class="fa fa-eye"></i> Mis Tareas</a>
        <div class="pull-right">
        <div class="pull-right">
          
        </div>  
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mis listas </h3>
                    
          <div class="card-tools">  
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
            
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">#</th>
                      <th style="width: 40%">Nombre de la lista</th>
                      <th style="width: 20%">Creada por</th>
                      <th style="width: 20%">Propietario</th>
                      <th style="width: 15%" class="text-center">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                      <?php
                        include("conexion.php");                                        
                             
                        //Realizamos la consulta y guardamos el contenido en una variable $resultado
                        $consulta = "SELECT * FROM lista WHERE propietario_lista =" . $_SESSION['id_usuario'] ." ";
                        
                        $resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

                        //Mostramos el resultado que ya traemos de la BD
                            //Ciclo para mostrar el contenido de la base de datos en la tabla
                            $contador = 0;
                            while($columna = mysqli_fetch_array($resultado)){
                            $contador ++;  
                            echo "<tr>";
                                echo "<td>" . $contador  . "</td>
                                    <td>
                                      <a><b>" . $columna['nombre_lista'] . "</b></a>
                                      
                                     
                                    </td>
                                      
                                      
                                    
                                    <td>
                                      ".$columna['creador_lista']."
                                    </td>
                                    <td>"
                                    .$columna['propietario_lista'].
                                    "</td>
                                    
                                    <td class='project-actions text-right'>
                                      <a class='btn btn-primary btn-sm' href='ver_lista.php?id=" . $columna['id_lista'] . "'>
                                          <i class='fas fa-eye'></i> Ver
                                      </a>
                                      <a class='btn btn-info btn-sm' href='compartir_lista.php?id=" . $columna['id_lista'] . "'>
                                          <i class='fas fa-pencil-alt'></i> Compartir
                                      </a>
                                      <a class='btn btn-danger btn-sm' href='borrar_lista.php?id=" . $columna['id_lista'] . "'>
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
