<?php include 'includes/header.php';

// While
// Verifica que se cumpla la condición y se ejecuta
echo 'While<br>';

$i = 0; // Inicializador

while($i < 10) {
    echo $i, '<br>';

    $i++; // Incremento
}

// Do while
// Ejecuta y luego verifica la condición
echo '<br>Do while<br>';

$i = 10;

do {
    echo $i, '<br>';

    $i++;
} while($i < 10);

// For loop
// es igual a While pero se inicializa, la condición y el incremento en una misma linea

/*
divisibles
3 imprime FIZZ
5 imprime BUZZ
3 y 5 imprime FIZZ BUZZ
*/
echo '<br>For loop<br>';

for($i = 1; $i <= 30; $i++):
    // el caso de 3 y 5 debe ir primero para que sea la primea opción de imprimir, si va de ultimo no imprimirá
    if($i % 15 === 0): // para 3 y 5, de otra forma if($i % 3 === 0 && $i % 5 === 0)
        echo $i, ' - FIZZ BUZZ<br>';
    elseif($i % 3 === 0):
        echo $i, ' - FIZZ<br>';
    elseif ($i % 5 === 0):
        echo $i, ' - BUZZ<br>';
    else:
        echo $i, '<br>';
    endif;
endfor; // aplicando la alternativa de las llaves, recomendable cuando se hace muy largo

echo '<br>';

// For Each

$clientes = ['Jorge', 'Macias', 'Juliana'];

echo '<br>';
echo count($clientes); // con sizeof tendremos el mismo resultado
echo ' elementos en el array<br><br>';

// con Foreach iteramos en el array, este detectara cuando termine automáticamente
echo 'For Each<br>';
foreach($clientes as $cliente) {
    echo $cliente, '<br>';
}

// otra forma de iterar, en este caso usamos count para establecer un limite según el array y tenemos que darle una posición
echo '<br>For Loop<br>';
for ($i=0; $i < count($clientes); $i++):
    echo $clientes[$i] . '<br>';
endfor; // esta es una alternativa a las llaves

echo '<br>';

// For Each para arreglos asociativos

$cliente = [
    'nombre' => 'Jorge',
    'saldo' => 200,
    'tipo' => 'premium'
];
echo 'For each para arreglos asociativos<br>';
foreach($cliente as $valor) {
    echo $valor, '<br>';
}

echo '<br>';

foreach ($cliente as $key => $valor) {
    echo $key . ' - ' . $valor . '<br>';
}

include 'includes/footer.php';