<?php

class Caderno {

    public $conteudo;

    public function escrever($texto) {
        $this->conteudo = $texto;
    }

    public function ler() {
        return $this->conteudo;
    }
}

$meuCaderno = new Caderno;
$meuCaderno->escrever("Hoje eu vou escrever no meu caderno");
echo $meuCaderno->conteudo;
/* echo $meuCaderno->ler(); */