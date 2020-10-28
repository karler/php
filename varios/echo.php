<?php
//header('Content-type: text/plain');
echo "Hola mundo";

echo "Esto abarca
multiple líneas. Los saltos de línea también
se mostrarán";

echo nl2br("Esto abarca\nmúltiples líneas. Los saltos de línea también\nse mostrarán.");

echo "Para escapar caracteres se hace \"así\".";

// Se pueden usar variables dentro de una sentencia echo
$foo = "foobar";
$bar = "barbaz";
$variable = "Jose Luis";

echo "foo es $foo"; // foo es foobar

// También se pueden usar arrays
$baz = array("valor" => "foo");

echo "Esto es {$baz['valor']} !"; // Esto es foo !

// Si se utilizan comillas simples, se mostrará el nombre de la variable, no su valor
echo 'foo es $foo'; // foo es $foo

// Si no usan otros caracteres, se puede utilizar echo para mostrar el valor de las variables.
echo $foo;          // foobar
echo $foo,$bar;     // foobarbarbaz

// Las cadenas pueden ser pasadas individualmente como varios argumentos o
// concatenadas como un único argumento
echo 'Esta ', 'cadena ', 'está ', 'hecha ', 'con múltiple parámetros.', chr(10);
echo 'Esta ' . 'cadena ' . 'está ' . 'hecha ' . 'con concatenación.' . "\n";

echo <<<END
Aquí se utiliza la sintaxis de "here document" para mostrar
múltiples líneas con interpolación de $variable. Nótese
que el finalizador de here document debe aparecer en una 
línea con solamente un punto y coma. ¡Nada de espacios extra!
END;

?>