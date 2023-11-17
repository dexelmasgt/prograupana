<?php
                  $nombre = $_POST['nombre'];
                  $apellido = $_POST['apellido'];
                  $fecnac = $_POST['fecnac'];
                  $grado = $_POST['grado'];
                  $carrera = $_POST['carrera'];
                  $id = $_POST['id'];
                 
                
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
                    $consulta = "UPDATE estudiante SET nombre_estudiante='$nombre', apellido_estudiante='$apellido', fec_nac_estudiante='$fecnac', grado_estudiante='$grado', carrera_estudiante='$carrera' WHERE id_estudiante=$id";
                    
                    $resultado = mysqli_query($conexion, $consulta) ;
                    
                    $respuesta = "Se actualizo el registro: $nombre $apellido" or die ("Algo salio mal con la consulta");
                    header("Location: consultar.php");
                    echo $respuesta;


                    //Cerramos nuestra conexión a la base de datos
                    mysqli_close($conexion);

                    ?>