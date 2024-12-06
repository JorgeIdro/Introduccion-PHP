<?php include 'includes/header.php';

// IF, ELSE IF, SWITCH

$autenticado = true;
$admin = false;

// IF ELSE

// Operadores lógicos
// OR ||

if($autenticado || $admin) { // debe cumplirse al menos una
    echo "Usuario autenticado correctamente<br>";
} else {
    echo "Usuario no autenticado, iniciar sesión<br>";
}

// AND &&

if($autenticado && $admin) { // debe cumplirse todas las condiciones
    echo "Usuario autenticado correctamente<br>";
} else {
    echo "Usuario no autenticado, iniciar sesión<br>";
}

echo '<br>';

// IF anidados ...
$cliente = [
    'nombre' => 'Jorge',
    'saldo' => 200,
    'información' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)) { // Con ! negamos la condición
    echo 'El arreglo del cliente no esta vació<br>';

    if ($cliente['saldo'] > 0) {
        echo 'EL cliente tiene saldo disponible<br>';
    } else {
        echo 'No hay saldo<br>';
    }
} else {
    echo 'El arreglo del cliente esta vació<br>';
}

echo '<br>';

// ELSE IF
if ($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo<br>';
} else if ($cliente['información']['tipo'] === 'Premium') {
    echo 'El cliente es Premium<br>';
} else {
    echo 'El cliente no tiene saldo o no es Premium<br>';
}

echo '<br>';

// SWITCH

$tecnología = 'JavaScript';

switch ($tecnología) {
    case 'PHP':
        echo 'PHP, es un excelente lenguaje<br>';
        break;
    case 'JavaScript':
        echo 'JavaScript, el lenguaje de la red';
        break;
    case 'HTML':
        echo 'HTML, la estructura de la red';
        break; 
    default:
        echo 'El lenguaje no esta registrado<br>';
        break;
}

include 'includes/footer.php';