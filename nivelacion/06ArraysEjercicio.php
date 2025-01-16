<?php

// Contador de palabras en una frase
/*
Declara una variable que contenga una frase (ejemplo: "Hola mundo, aprendiendo PHP es divertido").
Convierte la frase en un array, separando las palabras por espacios, utilizando la función explode().
Cuenta cuántas palabras hay en el array y muestra el total.
Recorre el array con un foreach e imprime cada palabra en una lista HTML (<ul>).
*/

$frase = "Hola mundo, aprendiendo PHP es divertido";
//Convertir en array frase
$texto_convertido = explode(" ", $frase);
//Contar los elementos e imprimir
$num_palabras = count($texto_convertido);
echo "La frase tiene " . $num_palabras . " palabras";

echo "<ul>";
foreach ($texto_convertido as $f) {
    echo "<li>" . $f  . "</li>";
}
echo "</ul>";
