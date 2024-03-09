<?php

//Ejemplo de conexión a base de datos MySQL con PHP.

                        //Guardamos en viariables los parámetros de la base de datos
                        //$usuario = "prograupana";
                        //$password = "Pr0graUpana!";
                        //$servidor = "vuxmysql11";
                        //$basededatos = "tareasupana";

                        //Guardamos en viariables los parámetros de la base de datos
                        $usuario = "root";
                        $password = "";
                        $servidor = "localhost";
                        $basededatos = "tareasupana";

                        //Creamos la conexión a la base de datos. Usamos la función mysqli_connect()
                        $conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar.");

                        //Después de que creamos la conexión seleccionamos la base de datos
                        $db = mysqli_select_db($conexion, $basededatos) or die ("No se encontro la base de datos");

?>