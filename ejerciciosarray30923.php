<?php
//Ejercicios con array

$cursos = array('python<br>', 'java<br>', 'php<br>', 'html<br>', 'css<br>');
$cursos[3] = 'javascript<br>';

$cursos[5] = 'C#<br>';
print_r($cursos);
//echo $cursos[3];

echo count($cursos);

echo '<br><br><br>';

$semana[0] = 'lunes<br>';
$semana[1] = 'martes<br>';
$semana[2] = 'miercoles<br>';
$semana[3] = 'jueves<br>';
$semana[4] = 'viernes<br>';
$semana[5] = 'sabado<br>';
$semana[6] = 'domingo<br>';

for ($i=0; $i < count($semana) ; $i++) { 
   echo $semana[$i];
   if ($semana[$i] == 'jueves<br>') {
    echo 'Este es el curso de PHP';
   }
}

echo '<br><br><br>';

$amigos = array('jose<br>','maria<br>','raul<br>','sara<br>','pedro<br>','camila<br>','david<br>');

$posicion = count($amigos) -2;
asort($amigos);
print_r($amigos);

echo '<br><br><br>';

arsort($amigos);
print_r($amigos);


?>