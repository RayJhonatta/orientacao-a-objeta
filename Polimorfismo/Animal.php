<?php

class Animal {
    public function fazerSom() {
        echo "Som genérico de animal" . PHP_EOL;
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo" . PHP_EOL;
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando" . PHP_EOL;
    }
}

class Vaca extends Animal {
    public function fazerSom() {
        echo "A vaca está mugindo";
    }
}

function emitirSom(Animal $animal) {
    $animal->fazerSom();
}

$cachorro = new Cachorro;
$gato = new Gato;
$vaca = new Vaca;

emitirSom($cachorro);
emitirSom($gato);
emitirSom($vaca);