<?php

class Pessoa {

protected $nome = "Ray";

protected function obterNome() {
  return $this->nome;
 }
}

class Homem extends Pessoa {
    
    public function mostraPessoa() {
        return $this->obterNome();
    }
} 

$minhaPessoa = new Homem;
echo $minhaPessoa->mostraPessoa();

