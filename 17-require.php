<?php include 'includes/header.php'; // En vez de Include también se puede usar "require"
// ¿La diferencia?
// Con Include si la ruta es errónea el código no para dependiendo de su configuración, pero con Require si
// En caso de que "include" pare el código mostrara en pantalla una alerta mientras que "require" mostrara un "Fatal error"

// ¿En que momentos usar cada una?
// Include podemos usar para "cosas menos importante" como código de diseño
// Require para código mas importante como funciones y mas aun si estas se conectan con la base de datos

// ¿Para que nos sirve include?
// Include incluye un archivo sobre otro archivo
// Con esto podemos crear el header y footer una sola vez para todas las paginas ahorrando código y tiempo
// Util para paginas grandes, por ejemplo en Facebook en casi todas paginas, perfiles tiene el mismo header
// Entonces si queremos hacer un cambio en el header ya no tendríamos que cambiar uno por uno, solo en un archivo cambia para todos

echo "Después de include<br>";

// También tenemos "require_once" este añadirá el archivo una sola vez, en caso de que lo añadamos otra vez lo omitirá

require 'funciones.php';

iniciarApp();



include 'includes/footer.php';