<?php

function est_nuevo($nombre_estudiante, $apellido_estudiante, $edad_estudiante, $carrera_estudiante){
    echo '<br>';
    echo 'Se ha agregado un nuevo estudiante:';
    echo '<br>';
    echo 'Nombre: ' . $nombre_estudiante . ' ' . $apellido_estudiante;
    echo '<br>';
    echo 'Tiene ' . $edad_estudiante . ' anios';
    echo '<br>';
    echo 'Y es de la carrera: ' . $carrera_estudiante;
}

function suma($n1, $n2){
    return $n1 + $n2;
}

function saludar($nombre){
    echo 'Hola ' . $nombre . '<br>';
} 

function suma2($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}