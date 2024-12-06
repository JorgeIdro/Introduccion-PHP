<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

// Comparadores

var_dump($numero1 > $numero2);
echo "<br>";
var_dump($numero1 < $numero2);
echo "<br>";
var_dump($numero1 >= $numero2);
echo "<br>";
var_dump($numero1 <= $numero2);
echo "<br>";
var_dump($numero2 == $numero3);
echo "<br>";
var_dump($numero2 == $numero4);
echo "<br>";
var_dump($numero2 === $numero4);
echo "<br>";
echo "<br>";

// -1  si el izquierdo es menor, 0 si son iguales, 1 si el izquierdo es mayor

var_dump($numero1 <=> $numero2);
echo "<br>";
var_dump($numero2 <=> $numero3);
echo "<br>";
var_dump($numero2 <=> $numero1);

include 'includes/footer.php';