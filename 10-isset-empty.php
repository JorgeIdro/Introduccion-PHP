<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - revisa si un arreglo esta vació
echo 'Empty', '<br>';
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($cliente3)); // true
echo '<br>', '<br>';

// Isset - Revisa si un arreglo esta creado a una propiedad esta definida
echo 'Isset', '<br>';
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));
var_dump(isset($clientes4)); // false
echo '<br>';

// Isset - permite revisar si una propiedad de un arreglo, arreglo asociativo existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['código']));
var_dump(isset($clientes3[1]));
var_dump(isset($clientes3[3]));

include 'includes/footer.php';