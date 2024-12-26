<?php

class Animal {
    public function fazerSom() {
        echo "Esse animal faz um som" . PHP_EOL;
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo";
    }
}

$cachorro = new Cachorro;
$cachorro->fazerSom();