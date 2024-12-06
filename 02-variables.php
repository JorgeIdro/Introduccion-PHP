<?php include 'includes/header.php';

// variable parecida a let de JavaScript

$nombre = "Jorge";

$_nombre = "Jorge";

$nombre = "Jose";

echo $nombre, "<br>";

var_dump($nombre);

echo "<br>";

// Constante parecida a const de JavaScript
// Define es mas usado debido que puede ser declarada en cualquier punto de ejecución, mientras que const solo en el nivel mas alto, no en funciones ni en estructuras de control
define("constante", "Esto es una constante");
echo constante;

echo "<br>";
// Es la menos usada
const constante2 = "Esta es la segunda constante";
echo constante2;

echo "<br>";

// Por si las dudas, la forma en como nombremos las variables es similar como en Javascript y la mayoría de lenguajes de programación

$nombreCliente = "Juan"; // Mas usada
$nombre_cliente = "Julian";


include 'includes/footer.php';