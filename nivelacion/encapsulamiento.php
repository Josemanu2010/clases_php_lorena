<?php

// ENCAPSULAMIENTO

// GETTERS & SETTERS

class persona
{
    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct()
    {
        // $this->nombre = $nombre;
        // $this->apellidos = $apellidos;
        // $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellido)
    {
        $this->apellidos = $apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}


$persona = new persona;
$persona->setNombre('Pepe');
echo $persona->getNombre();
