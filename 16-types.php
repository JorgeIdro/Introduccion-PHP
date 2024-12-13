<?php 
declare(strict_types=1);
include 'includes/header.php';

// Funciones que retornan valores

function usuarioAutenticado(bool $autenticado) : string { // lo que debe retornar solo es un string
    if ($autenticado) {
        return 'El usuario esta autenticado'; // es obligatorio el returns
    } else {
        return 'El usuario no esta autenticado';
    }
}

$autenticado = false;
$usuario = usuarioAutenticado($autenticado);
echo $usuario;

echo '<br>';

function usuarioAutenticado2(bool $autenticado) : void { // con void damos a entender que vamos a imprimir y no retornar como el caso anterior
    if ($autenticado) {
        echo 'El usuario esta autenticado'; // es obligatorio el returns
    } else {
        echo 'El usuario no esta autenticado';
    }
}

$autenticado = true;
$usuario = usuarioAutenticado2($autenticado);
echo $usuario;

echo '<br>';

function usuarioAutenticado3(bool $autenticado) : string|int { // lo que debe retornar es un string o entero
    if ($autenticado) {
        return 'El usuario esta autenticado'; // es obligatorio el returns
    } else {
        return 20;
    }
}

$autenticado = false;
$usuario = usuarioAutenticado3($autenticado);
echo $usuario;

include 'includes/footer.php';