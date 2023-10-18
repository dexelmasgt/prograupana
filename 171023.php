<?php
include "./librerias/librerias.php";



saludar('Jaomy');
saludar('Marlon');
saludar('Daniel');
saludar('Gema');
saludar('Guilson');
saludar('Juan Carlos');
saludar('Alessandro');

$hoy = date("d/F/y");
echo $hoy;


echo '<br><br>*****************<br><br>';


//forma 1
echo suma(4,3);

//forma 2
$res = suma(5,9);
echo $res;
?> 