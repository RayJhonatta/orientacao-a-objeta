<?php

class Filme {

    private $nome;

    public function verFilme($texto) {
        $this->nome = $texto;
    }

    public function pegarFilme() {
        return $this->nome;
    }
}

$meuFilme = new Filme;
$meuFilme->verFilme("Harry Potter e o prisoneiro de azkaban");
echo $meuFilme->pegarFilme();