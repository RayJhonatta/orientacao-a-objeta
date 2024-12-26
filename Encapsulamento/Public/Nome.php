<?php

class Pessoa {

public $nome;
public $idade;

function obterNome($texto) {
    $this->nome = $texto;
    $this->idade = $texto;
}

function falarNome() {
    return $this->nome;
    return $this->idade;
}

}

$meuNome = new Pessoa;
$meuNome->nome = "Ray";
$meuNome->idade = 16;
$meuNome->obterNome("Olá eu sou o $meuNome->nome e tenho $meuNome->idade anos");
echo $meuNome->falarNome();

/* 
class Pessoa {

public $nome;
public $idade;

function apresentar() {
echo "Olá eu sou o $this->nome e eu tenho $this->idade anos";
  }  
}

$pessoa = new Pessoa;
$pessoa->nome = "Ray";
$pessoa->idade = 16;
$pessoa->apresentar();
*/

