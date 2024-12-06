<?php include 'includes/header.php';

// Arrays

$carrito = ['Tablet', 'Television', 'Computadora'];
var_dump($carrito);
// con la etiqueta <pre> de HTML podemos ver de una mejor forma el resultado
// Util para ver el contenido de un array, su tipo de dato y su extension
echo '<pre>';
var_dump($carrito);
echo '<pre>';

echo $carrito[1], '<br>'; // imprimimos solo un elemento del array según su posición

// Agregar mas elementos a un array
$carrito[3] = 'celular';
echo $carrito[3], '<br>';

// agregar un elemento nuevo al final
array_push($carrito, 'Audífonos');
echo $carrito[4], '<br>';

// Agregar un elemento al inicio
array_unshift($carrito, 'Laptop');
echo '<pre>';
var_dump($carrito);
echo '<pre>';


// Otra forma de crear Arrays

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
echo '<pre>';
var_dump($clientes);
echo '<pre>';

echo $clientes[1];

include 'includes/footer.php';