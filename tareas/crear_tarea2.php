<?php

//Aquí capturamos el contenido del formulario en anterior página y lo guardamos en variables
$nombre_tarea = $_GET['nombre_tarea'];
$descripcion_tarea = $_GET['descripcion_tarea'];
$creacion_tarea = date("Y-m-d");
$vencimiento_tarea = $_GET['fecha_vencimiento_tarea'];
$estado_tarea = $_GET['estado_tarea'];

//Aquí mandamos a llamar el archivo conexion.php que tiene nuestros parámetros para conectarnos a la base de datos
include("conexion.php");

//Realizamos la consulta y guardamos el contenido en una variable $resultado
$consulta = "
INSERT INTO `tarea` (`titulo_tarea`,`descripcion_tarea`,`fec_crea_tarea`,`fec_venc_tarea`,`estado_tarea`) 
VALUES ('" . $nombre_tarea ."','" . $descripcion_tarea ."','" . $creacion_tarea ."','" . $vencimiento_tarea ."','" . $estado_tarea ."')";

//Nuestra variable de control resultado nos va a generar la consulta o nos dice que algo salió mal
$resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

//Si todo sale bien nos regresa a la página donde están las tareas listadas
header("Location: tareas.php");
    
//Cerramos nuestra conexión a la base de datos
mysqli_close($conexion);


?>