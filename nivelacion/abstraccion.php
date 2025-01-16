<?php

/*
    Abstracción: Creamos nuestras propias versiones de métodos del padre
	Clase padre: abstract class nombre
	Propiedad: protected $variable
	Function: abstract function moverse(); // este no debe tener nada de llaves
	Hija extends padre: public function moverse() {return} // Aquí sobre escribo el método original
*/

// class padre haceralgo();


abstract class vehiculo
{
    protected $modelo;

    public function __construct() {}

    abstract function moverse();
    public function accion()
    {
        return 'Estoy haciendo una accion';
    }
}


class carro extends vehiculo
{
    public function moverse()
    {
        return 'El carro se está moviendo';
    }
}

$carro1 = new carro;
echo $carro1->moverse();
