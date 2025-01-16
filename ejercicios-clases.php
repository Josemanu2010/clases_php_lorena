<?php

// Tienda de electrodomésticos
// Objetivo: Crear un sistema de electrodomésticos usando abstracción y condiciones

/*
    Define una clase abstracta Electrodomestico con:
    Propiedades nombre y precio.
    Un método abstracto calcularGarantia() recibe como parámetro las 2 propiedades creadas, 
    este método se usará para determinar la garantía basada en el precio:
        Si el precio es mayor a $1000, la garantía es de 2 años.
        Si no, es de 1 año.
    Crea clases concretas Televisor y Lavadora que extiendan Electrodomestico.
    Implementa el método calcularGarantia() en cada clase y retorna el mensaje:
    "El [nombre] tiene una garantía de X años."
    Instancia las clases hijas y muestra el método calcularGarantia.
*/

abstract class Electrodomestico
{
    public $nombre;
    public $precio;

    public abstract function calcularGarantia($nombre, $precio);
}

class televisor extends Electrodomestico
{


    public function calcularGarantia($nombre, $precio)
    {
        return ($precio > 1000)
            ? 'El (' . $nombre . ') tiene una garantía de 2 años.'
            : 'El (' . $nombre . ') tiene una garantía de 1 años.';
    }
}

class lavadora extends Electrodomestico
{


    public function calcularGarantia($nombre, $precio)
    {
        $msg = ($precio > 1000)
            ? 'La (' . $nombre . ') tiene una garantía de 2 años.'
            : 'La (' . $nombre . ') tiene una garantía de 1 años.';
        return $msg;
    }
}

$smattv = new televisor();
echo $smattv->calcularGarantia('Smart TV Samsung', 2100);
echo '<br>';
$lavadoraLG = new lavadora();
echo $lavadoraLG->calcularGarantia('Lavadora LG Plus', 50);



// ABSTRACCIÓN : Crea su propia versión del método de su padre

// HERENCIA : Permite reutilizar código al heredar propiedades y métodos de la clase padre

// POLIMORFISMO : Permite que diferentes clases respondan de manera distinta al mismo método, promoviendo flexibilidad y reutilización de código

// ENCAPSULACIÓN : Protege los datos de un objeto, asegurando que solo puedan ser accedidos mediante métodos de clases hijas.






// clases POO.
// PHP con HTML;
// CRUD PHP - MYSQL.
// pagina sencilla modular
// clase nivelación con MYSQL (Insert, select, Create, Update);

// Mysqli
// POO PDO
