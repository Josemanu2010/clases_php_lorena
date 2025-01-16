<?php


// String, int, Float, Double, Arrays, objects, Null

// $nombre = 'José';
// $Nombre = 'María';
// $edad = 100;
// $saldo = 102.450;
// $numeros = [2, 5, 7, 10, 20];
// $is_active = true; // false

// define('APP_NAME', 'Mi página web');

// $edad++;
// ++$edad;

// echo APP_NAME;


// echo 'Hola, soy ' . $nombre . ' de edad: ' . $edad;
// echo '<br>';
// $saludo = sprintf('Hola, soy %s, con edad: %s', $nombre, $edad);
// var_dump($nombre);
// echo $saludo;
// echo '<br>';
// echo '<br>';

// if ($edad < 18) {
//     echo 'Es menor de edad';
// } else {
//     echo 'Es mayor de edad';
// }

// $mensaje = ($edad < 18) ? 'Si, es menor' : 'No, es mayor';
// echo $mensaje;


// Varibales
// Condiciones
// Estructuras cíclicas 
// Arreglos -> PUSH, PUT
// Clases - Funciones  {public , static}
// POO -> programación Orientada a Objtos - Herencia
// MySQL, select, insert, update, create, delete.
// Mysqli -> PDO con PHP
// PRUEBAS
// Formularios, 
// páginas dinámicas
// Modularización -> Header - Footer
// 


// echo '<br>';
// var_dump($Nombre);


/*
    Crear un programa para la reserva de un usuario a un restaurante
    El sistema requiere  guardar su información como: 
        nombres, apellidos, edad, teléfono, dirección, username.
    En primera instancia, deberá mostrar el mensaje de bienvenida mostrando su nombre y apellido completo
    Después, validar con una condición si el usuario está activo en el sistema con (is_active),
    De ser así, se le permitirá la entrada mostrando toda la información del usuario, 
    de lo contrario, el sistema le dirá que no hay reservas disponibles

*/
$nombres = 'Jose';
$apellidos = 'Londoño';
$edad = 31;
$tel = '3193884238';
$dir = 'Colombia';
$username = 'josemanu2010';
$is_active = true;

echo '<br>Bienvenido al sistema ' . $nombres . ' ' . $apellidos . '<br>';

if ($is_active) {
    $mensaje = sprintf('
        <br>
        Tu reserva fué satisfactoria. <br>
        Datos de contacto: <br>
        Nombres completos: %s %s <br>
        Edad: %s <br>
        Teléfono: %s <br>
        Dirección: %s <br>
        Username: %s <br>
        <br>
    ', $nombres, $apellidos, $edad, $tel, $dir, $username);
    echo $mensaje;
} else {
    echo 'Lo sentimos, no hay reservas disponibles';
}
