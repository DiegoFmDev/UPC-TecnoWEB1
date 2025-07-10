<?php
function leerDesdeConsola($mensaje) {
    echo $mensaje;
    return trim(fgets(STDIN));
}

function mayorDeTres($a, $b, $c) {
    return max($a, $b, $c);
}

function esPrimo($numero) {
    if ($numero < 2) return false;
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

$n1 = (int) leerDesdeConsola("Ingresa el primer número: ");
$n2 = (int) leerDesdeConsola("Ingresa el segundo número: ");
$n3 = (int) leerDesdeConsola("Ingresa el tercer número: ");

$mayor = mayorDeTres($n1, $n2, $n3);
echo "El mayor de los tres números es: $mayor\n";

$numPrimo = (int) leerDesdeConsola("Ingresa un número para verificar si es primo: ");

if (esPrimo($numPrimo)) {
    echo "$numPrimo es un número primo.\n";
} else {
    echo "$numPrimo no es un número primo.\n";
}
?>
