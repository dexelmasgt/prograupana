<?php
//Funcion separador
function separador(){
    echo '<br><br>**************<br><br>';
}

// Realizar un programa que muestre si un número es par o impar.
function par_o_impar($numero){
    if (($numero % 2) == 0) {
        echo 'Es un numero par';
    }else {
        echo 'Es un numero impar';
    }
}

par_o_impar(14);

echo '<br><br>**************<br><br>';

//Realizar un programa que incremente un número pasado por valor.
function incrementar_uno($num){
    $res = $num + 1;
    return $res;
}

$numinc = incrementar_uno(50);
echo $numinc;

echo '<br><br>**************<br><br>';

//Realizar un programa que incremente un número pasado por referencia.
function incrementar_unoRef(&$num){
    $res = $num + 1;
    return $res;
}

$nume = 20;
$numinc = incrementar_uno($nume);
echo $numinc;

echo '<br><br>**************<br><br>';

//Crea una función para calcular el cuadrado de un número, ha de mostrar por pantalla el número y su cuadrado correspondiente.
function cuadrado($num){
    $cuadrado = $num * $num;
    return $cuadrado;
}

$num = 10;
$cuadradonum = cuadrado($num);

echo "El cuadrado de $num es $cuadradonum";

separador();

//multiplicacion
function multiplicar($num1, $num2){
    $resultado = $num1 * $num2;
    return $resultado;
}

$multi1 = 10;
$multi2 = 3;

echo multiplicar($multi1, $multi2);

separador();

function mostrarNumero($num){ 
	echo $num; 
} 
$num =50; 
mostrarNumero($num);

separador();

//Ejercicio 7

$num1 = 1;
$num2 = 2;
$num3 = 3;

function suma($num1, $num2, $num3){
    $num3 = $num1 + $num2;
    return $num3;
}

echo suma(1,1,3);

separador();

//Ejercicio 8

function meses($num){
    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio');
    foreach ($meses as $key => $value) {
        if ($key == $num-1) {
            echo "Encontramos el mes y es $value";
        }
    }
  
}
 $num = 6;
    meses($num);

separador();

//calcule iva

function calculariva1($base, $impuesto){
    if ($impuesto <= 0) {
        $impuesto = 12;
    }

    $resultado = $base * ($impuesto/100);
    return $resultado;


    
}

echo calculariva1(1000,0);

separador();

function calcularIVA($valor, $porcentaje = 12) { $iva = $valor * $porcentaje / 100; return $iva; } echo "IVA de 1000 es: " . calcularIVA(1000) . "\n"; echo "IVA de 1000 con el 8% es: " . calcularIVA(1000, 8) . "\n"; echo "IVA de 10 con el 0% es: " . calcularIVA(10, 0) . "\n";


separador();
//Ejercicio 10

function promedio($num1, $num2){
    $promedio = ($num1+$num2)/2;
    return $promedio;
}

echo promedio(4,6);
?>