<?php

/*
    Crear una clase persona con dos propiedades, nombre y edad
	Crear su método constructor para setear las propiedades que le pasamos al crear el objeto
	Crear un método que salude a la persona mostrando sus propiedades
    */

// Public = Accedido desde cualquier parte del sistema;
// private = Accedido solamente desde la misma clase;
// protected =  Accedido desde la clase padre y desde la clase hija;

class persona
{
    public $nombre;


    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    // Declarar Funciones - Identificador de acceso function NombreFunción
    public function saludar($accion)
    {
        return 'Hola :' . $this->nombre . ' ' . $accion;
    }
}

$persona1 = new persona('Pepe');
echo $persona1->saludar('Adiós');
