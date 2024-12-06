<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo

$carrito = ['Tablet', 'Computadora', 'Television'];

echo 'in_array', '<br>';
var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Chocolate', $carrito));

// Ordenar elementos de un arreglo

$numeros = array(1,3,4,5,1,2);
sort ($numeros); // Ordena los numeros de menor a mayor

echo '<pre>', 'sort', '<br>';
var_dump($numeros);
echo '<pre>';

rsort($numeros); // Ordena los numeros de mayor a menor

echo '<pre>', 'rsort', '<br>';
var_dump($numeros);
echo '<pre>';

// Ordenar arreglo asociativo

$cliente = [
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Juan'
];

// La 'a' es para indicar que el arreglo que se ingrese es asociativo
asort($cliente); // Ordena primero numeros y luego strings en orden alfabético

echo '<pre>', 'asort', '<br>';
var_dump($cliente);
echo '<pre>';

arsort($cliente); // Ordena primero los string en al revés del orden alfabetizo y asi mismo después los numeros

echo '<pre>', 'arsort', '<br>';
var_dump($cliente);
echo '<pre>';

ksort($cliente); // Ordena por llaves en orden alfabético

echo '<pre>', 'ksort', '<br>';
var_dump($cliente);
echo '<pre>';

krsort($cliente); // Ordena por llaves en orden alfabético al revés

echo '<pre>', 'krsort', '<br>';
var_dump($cliente);
echo '<pre>';

include 'includes/footer.php';