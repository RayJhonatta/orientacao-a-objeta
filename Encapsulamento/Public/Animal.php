<?php

Class Animal {

public $nome;

function obterAnimal($texto) {
    $this->nome = $texto;
}

function falarAnimal() {
    return $this->nome;
}
}

$meuAnimal = new Animal;
$meuAnimal->nome = "Thor";
$meuAnimal->obterAnimal("Esse é o " . $meuAnimal->nome);
echo $meuAnimal->nome;