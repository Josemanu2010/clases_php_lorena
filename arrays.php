<?php

// count($array): Cuenta los elementos del array.
// array_push($array, $valor): Agrega un elemento al final del array.
// array_pop($array): Elimina el último elemento del array.
// in_array($valor, $array): Verifica si un valor existe en el array.
// array_key_exists($clave, $array): Verifica si una clave existe en un array asociativo
// isset

// Arrays por INDEXACIÓN
// $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// for ($i = 0; $i < count($numeros); $i++) {
//     echo 'Número : ' . $numeros[$i] . '<br>';
// }
// $informacion = ['Pepe', 'Juan', 'Pedro', 2, 20];

// $juguetes = ['Carros', 'motos', 'pelota'];

// $juguetes[] = ['Muñecos', 'Barbies'];

// echo '<br>';
// var_dump($juguetes);
// echo '<br>';
// unset($juguetes[1]);
// echo '<br>';
// var_dump($juguetes);



// Arrays Asociativos
// $precio_juguetes = [
//     'Carro' => 250,
//     'Moto' => 300,
//     'Barbie' => 500,
//     'Mono' => 30,
//     'Camisa' => 70
// ];
// var_dump($precio_juguetes);
// foreach ($precio_juguetes as $pj => $key) {
//     echo 'El precio de ' . $pj . ' es: ' . $key . '<br>';
// }

// echo '<br><br>';
// $precio_juguetes['Mono'] = 30;
// $precio_juguetes['camisa'] = 70;



// // array_push($precio_juguetes, $nuevos_juguetes);
// echo '<br><br>';
// var_dump($precio_juguetes);
// echo $precio_juguetes['carro'];
// $precio_juguetes[] = [
//     'pelota' => 50
// ];

// 
// $precio_juguetes['spiderman'] = 50;
// echo '<br><br>';
// var_dump($precio_juguetes);

// echo '<br><br>';
// var_dump($precio_juguetes);
