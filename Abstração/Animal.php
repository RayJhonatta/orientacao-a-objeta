<?php

abstract class Animal {
    abstract public function fazerSom();

    public function Comer(){
        echo "Esse animal ele pode comer" . PHP_EOL;
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo." . PHP_EOL;
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando." . PHP_EOL;
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
$cachorro->Comer();
$cachorro->fazerSom();
$gato->Comer();
$gato->fazerSom();