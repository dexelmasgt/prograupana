<?php
$cursos = array('python<br>', 'Visual Basic<br>', 'php<br>', 'html<br>', 'c++<br>', 'C#<br>');
$cursos[6] = 'javascript<br>';
echo $cursos[3];
print_r($cursos);

echo '<br><br>--------------------------<br><br>';

$semana[0] = 'lunes<br>';
$semana[1] = 'martes<br>';
$semana[2] = 'miercoles<br>';
$semana[3] = 'jueves<br>';
$semana[4] = 'viernes<br>';
$semana[5] = 'sabado<br>';
$semana[6] = 'domingo';

print_r($semana);

echo '<br><br>--------------------------<br><br>';

echo count($semana);

echo '<br><br>--------------------------<br><br>';
for ($i=0; $i < count($semana); $i++) { 
    echo 'Hoy es ' . $semana[$i] . ' y es dia de ' . $cursos[$i];
}

echo '<br><br>--------------------------<br><br>';

$posicion = count($semana)-2;
echo $posicion;
echo $semana[$posicion];

echo '<br><br>--------------------------<br><br>';
echo 'FUNCIONES CON ARRAYS';

arsort($semana);

print_r($semana);

echo '<br><br>--------------------------<br><br>';

array_
?>

Crear un arreglo que sea para los estudiantes del curso, utilizar nombres en los indices, por ejemplo
[nombre] JuanCarlos
[apellido] Perla
edad
direccion
fechanacimiento.


Mostrar el contenido de este array de manera alfabeticamente ascendente.

Ordenar de la edad mas grande a la mas pequena.
