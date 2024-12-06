<?php include 'includes/header.php';

// Funciones para Strings

$nombreCliente = 'Maria Fernanda';

// Ver extension de un string

// Solo nos mostrara su extension
echo strlen($nombreCliente);
echo '<br>';
// Nos mostrara el tipo de dato, su extension y la información que contenga
var_dump($nombreCliente);
echo '<br>';

// Eliminar espacios en blanco de un string
$nombre = ' Jose ';
echo $nombre, strlen($nombre), '<br>';
$texto = trim($nombre); // eliminamos los espacios en blanco
echo $texto, strlen($texto), '<br>';

// Convertir a mayúsculas
echo strtoupper($nombreCliente), '<br>';

// Convertir en minúsculas
echo strtolower($nombreCliente), '<br>';

// ¿De que nos sirve convertir en mayúsculas o minúsculas?
// por ejemplo cuando alguien crea o se registra con un correo ya existente pero en mayúsculas
// Para la base de datos este sera diferente, pero en realidad es el mismo correo

$correo1 = 'correo@correo.com';
$correo2 = 'Correo@correo.com';

var_dump($correo1 === $correo2);

// Comparamos ambos strings y el resultado es que no son iguales ya que uno lleva mayúsculas
// ¿como hacemos para que salga true y asi un usuario no se registre con el mismo correo?

var_dump(strtoupper($correo1) === strtoupper($correo2));
echo '<br>';

// Convertimos ambos correos en minúsculas y comprábamos, el resultado es true
// Entonces cuando alguien se registre con su correo, debemos convertirlo a minúsculas y asi detectar fácilmente si el correo ya esta creado o registrado

// Reemplazar palabras temporalmente
echo str_replace('Maria', 'Josefina', $nombreCliente), '<br>';
echo $nombreCliente, '<br><br>';

// Revisa si un string existe o no
echo strpos($nombreCliente, 'Maria'), '<br>'; // existe y nos muestra su posición 0
echo strpos($nombreCliente, 'Mario'), '<br>'; // no existe y no muestra nada
echo strpos($nombreCliente, 'Fernanda'), '<br>'; // existe y muestra su posición 6

// Concatenar
$tipoCliente = 'Premium';
echo 'El cliente ', $nombreCliente, ' es ', $tipoCliente;
echo '<br>';
echo 'El cliente ' . $nombreCliente . ' es ' . $tipoCliente;
echo '<br>';
echo "El cliente {$nombreCliente} es {$tipoCliente}"; // Solo funciona con llaves dobles
echo '<br>';
echo "El cliente $nombreCliente es $tipoCliente"; // Solo funciona con llaves dobles

// Para concatenar constantes debemos hacerlo con punto o coma, la dos ultimas formas no lo admiten

include 'includes/footer.php';