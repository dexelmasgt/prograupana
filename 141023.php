<?php

function dividir($num1, $num2){
    $resultado = $num1 / $num2;
    return $resultado;
}

function verificarMultiplo2($num){
    if($num % 2 == 0){
        return true;
    }else{
        return false;
    }
}
//ESTE COMENTARIO ES NUEVO
function dividir_y_verificar_multiplo_2($num1, $num2){
    $resultado = dividir($num1, $num2);
    $multiplo = verificarMultiplo2($resultado);
    return $multiplo;
}

$otrores = dividir_y_verificar_multiplo_2(50,10);
echo $otrores;

echo "otro texto";
?>