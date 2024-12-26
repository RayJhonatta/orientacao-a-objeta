<?php

class Calculadora {

    public $numero1;
    public $numero2;

    function Somar() {
     return $this->numero1 + $this->numero2;
    }
    
    function Subtrair() {
        return $this->numero1 - $this->numero2;
    }

    function Multiplicar() {
        return $this->numero1 * $this->numero2;
    }

    function Divivir() {
        return $this->numero1 / $this->numero2;
    }
}

$resultado = new Calculadora;
$resultado->numero1 = 5;
$resultado->numero2 = 5;
echo $resultado->Divivir();