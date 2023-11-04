<?php
//Ejemplo de conexión a base de datos MySQL con PHP.

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
$consulta = "SELECT * FROM estudiante";
$resultado = mysqli_query($conexion, $consulta) or die ("Algo salio mal con la consulta");

//Mostramos el resultado que ya traemos de la BD
//Encabezado de la tabla
echo "<table border='1'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombres</th>";
        echo "<th>Apellidos</th>";
        echo "<th>Fecha de Nacimiento</th>";
        echo "<th>Grado</th>";
        echo "<th>Carrera</th>";
    echo "</tr>";

    //Ciclo para mostrar el contenido de la base de datos en la tabla
    while($columna = mysqli_fetch_array($resultado)){
    echo "<tr>";
        echo "<td>" . $columna['id_estudiante'] . "</td>
            <td>" . $columna['nombre_estudiante'] . "</td>
            <td>" . $columna['apellido_estudiante'] . "</td>
            <td>" . $columna['fec_nac_estudiante'] . "</td>
            <td>" . $columna['grado_estudiante'] . "</td>
            <td>" . $columna['carrera_estudiante'] . "</td>"; 
    echo "</tr>" ;
    }
echo "</table>";

//Cerramos nuestra conexión a la base de datos
mysqli_close($conexion);

?>