<?php include 'includes/header.php';

// Arreglos asociativos

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'información' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo '<br>';
var_dump($cliente['nombre']);
echo '<br>';
var_dump($cliente['información']);
echo '<br>';
var_dump($cliente['información']['tipo']);
echo '<br>', '<br>';

echo $cliente['nombre'];
echo '<br>';
echo $cliente['información'];
echo '<br>';
echo $cliente['información']['disponible'];
echo '<br>';

// Agregar mas propiedades al arreglo

$cliente['código'] = 1823938;

echo '<br>';
var_dump($cliente['código']);
echo '<br>';

$cliente['información_2'] = [
    'premium' => '2 meses',
    'disponible' => true
];

echo '<br>';
var_dump($cliente['información_2']);
echo '<br>';

include 'includes/footer.php';