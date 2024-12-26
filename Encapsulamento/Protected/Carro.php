<?php

class Carro {

   protected $marca = "Jeep";

   protected function obterCarro() {
    return $this->marca;
  } 
}

class Veiculos extends Carro {

    public function pegarCarro() {
      return $this->obterCarro();
    }
}

$meuCarro = new Veiculos;
echo $meuCarro->pegarCarro();