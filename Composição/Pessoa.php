<?php

class Comer {
    public function Comer() {
        echo "Essa pessoa está se alimentando bem" . PHP_EOL;
    } 
}

class Beber {
    public function Beber() {
        echo "Essa pessoa está se hidratando bem" . PHP_EOL;
    }
}

class Pessoa {
    private $comer;
    private $beber;

    public function __construct()
    {
        $this->comer = new Comer;
        $this->beber = new Beber;
    }

    public function PessoaSaudavel() {
        $this->comer->Comer();
        $this->beber->Beber();
        echo "Essa pessoa é saudável";
    }
}

$pessoa = new Pessoa;
$pessoa->PessoaSaudavel();