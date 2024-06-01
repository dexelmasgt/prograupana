<?php

session_start();
                          

//Aquí capturamos el contenido del formulario en anterior página y lo guardamos en variables

$usuario_compartir = $_GET['usuario_compartir'];


//Aquí mandamos a llamar el archivo conexion.php que tiene nuestros parámetros para conectarnos a la base de datos
include("conexion.php");

//Realizamos la consulta y guardamos el contenido en una variable $resultado
$consulta = "";

//Nuestra variable de control resultado nos va a generar la consulta o nos dice que algo salió mal
$resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

//Si todo sale bien nos regresa a la página donde están las tareas listadas
//echo $id_creador_lista;
header("Location: listas.php");
    
//Cerramos nuestra conexión a la base de datos
mysqli_close($conexion);


?>