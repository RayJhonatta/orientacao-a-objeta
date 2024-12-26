<?php

class Animal {

    public $nome; 

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Cachorro extends Animal {

    public function reproduzirSom() {
    return $this->nome . " Faz: Au Au " . PHP_EOL;
    }
}

class Gato extends Animal {

    public function reproduzirSom() {
    return $this->nome . " Faz: Miau Miau " . PHP_EOL;
    }
}

class Papagaio extends Animal {

    public function reproduzirSom() {
    return $this->nome . " Faz: Piu Piu " . PHP_EOL;
    }
}

$cachorro = new Cachorro("Cachorro");
$gato = new Gato("Gato");
$papagaio = new Papagaio("Papagaio");

echo $cachorro->reproduzirSom();
echo $gato->reproduzirSom();
echo $papagaio->reproduzirSom();