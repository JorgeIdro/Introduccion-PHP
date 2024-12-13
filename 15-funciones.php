<?php 
declare(strict_types=1); // declaramos que los valores ingresados sean exactamente el tipo de dato que pide la función
// hacemos que el tipado de nuestros código sea mas fuerte y por lo tanto código de mejor calidad
include 'includes/header.php';

// Funciones
// la función solo aceptara enteros y por default sera 0
echo 'Funciones<br>';
function sumar(int $num1 = 0, int $num2 = 0) {
    echo $num1 + $num2;
}

sumar(1, 2);
echo '<br>';
sumar(1);
echo '<br>';
sumar();
echo '<br>';
//sumar(1.9, 2.9); solo detecta el entero, mas no el decimal, tampoco strings o booleanos

echo '<br>';

// Parámetros nombrados
// Cambia el orden de pasar los valores a las funciones
echo 'Parámetros nombrados<br>';
function num(int $num1, int $num2) {
    echo $num1;
}

num(10, 20);
echo '<br>';
num(num2: 10, num1: 20);

include 'includes/footer.php';