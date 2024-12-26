<?php

class Carro {

  public $marca;
  
  function definirMarca($texto) {
    $this->marca = $texto;
  }

  function mostrarMarca() {
    echo "Esse carro é da marca $this->marca";
  }
}

$obterMarca = new Carro;
$obterMarca->definirMarca("Jeep");
echo $obterMarca->mostrarMarca();
