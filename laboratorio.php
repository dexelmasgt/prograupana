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
?>