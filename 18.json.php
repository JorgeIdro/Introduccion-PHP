<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo 20"',
        'precio' => 400,
        'disponible' => false
    ]
];

echo '<pre>';
var_dump($productos);

echo '<br>';

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // convertimos un array en string, el siguiente argumento es el tipo de conversion para que las tildes no tenga un error
var_dump($json);

echo '<br>';

$json_array = json_decode($json); // Convertimos un string en array
var_dump($json_array);
echo '</pre>';

// Util en caso de enviar el array y comunicar php con otras plataformas como javascript, react, vue.js


include 'includes/footer.php';