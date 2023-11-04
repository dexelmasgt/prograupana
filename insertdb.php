<?php
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
$consulta = "INSERT INTO `estudiante` (`id_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `fec_nac_estudiante`, `grado_estudiante`, `carrera_estudiante`) VALUES (NULL, 'Juan Carlos', 'Cruz Pinelo', '2000-12-10', 'Segundo', 'Ingeniería en Sistemas')";
$resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");



//Cerramos nuestra conexión a la base de datos
mysqli_close($conexion);

?>