<?php
                        include("conexion.php");

                        //Realizamos la consulta y guardamos el contenido en una variable $resultado
                        $consulta = "SELECT * FROM usuario";
                        $resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

                        //Mostramos el resultado que ya traemos de la BD


                            //Ciclo para mostrar el contenido de la base de datos en la tabla
                            $usuario = mysqli_fetch_array($resultado);

                            //VALIDO SI LO QUE TRAJE DE LA BASE DE DATOS COINCIDE CON MI FORMULARIO
                            $email = $_POST['email'];
                            $password = $_POST['pass'];
                           
                            if ($email==$usuario['correo_usuario'] && $password==$usuario['password_usuario']) {
                                header("Location: tareas.php");
                            }else{
                                header("Location: index.php");
                            }


                        //Cerramos nuestra conexión a la base de datos
                        mysqli_close($conexion);

                    ?>