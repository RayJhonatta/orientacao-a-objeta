<?php

class Motor {
    public function Ligar() {
        echo "O Motor está ligado." . PHP_EOL;
    }
}

class Carro {
  private $motor;

  public function __construct() {
    $this->motor = new Motor();
  }

  public function ligarCarro() {
    $this->motor->Ligar();
    echo "O Carro está ligado." . PHP_EOL;
  }
}

$carro = new Carro;
$carro->ligarCarro();