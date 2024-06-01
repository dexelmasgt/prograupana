<?php

session_start();
                          

//Aquí capturamos el contenido del formulario en anterior página y lo guardamos en variables
$nombre_lista = $_GET['nombre_lista'];
$id_creador_lista = $_SESSION['id_usuario'];
$id_propietario_lista = $_SESSION['id_usuario'];

//Aquí mandamos a llamar el archivo conexion.php que tiene nuestros parámetros para conectarnos a la base de datos
include("conexion.php");

//Realizamos la consulta y guardamos el contenido en una variable $resultado
$consulta = "
INSERT INTO `lista` (`nombre_lista`,`creador_lista`,`propietario_lista`) 
VALUES ('" . $nombre_lista ."','" . $id_creador_lista ."','" . $id_propietario_lista ."')";

//Nuestra variable de control resultado nos va a generar la consulta o nos dice que algo salió mal
$resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

//Si todo sale bien nos regresa a la página donde están las tareas listadas
//echo $id_creador_lista;
header("Location: listas.php");
    
//Cerramos nuestra conexión a la base de datos
mysqli_close($conexion);


?>