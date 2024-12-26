<?php

class Pessoa {

  private $nome;

  public function definirNome($texto) {
     $this->nome = $texto;
  }

  public function pegarNome() {
    return $this->nome;
  } 
}

$modificarNome = new Pessoa;
$modificarNome->definirNome("Eu me chamo Ray"); 
echo $modificarNome->pegarNome();