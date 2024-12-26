<?php

class Livro {
    public function Nome() {
        echo "O livro é Harry Potter" . PHP_EOL;
    } 
}

class Informações {
    private $Nome;

    public function __construct()
    {
        $this->Nome =  new Livro;
    }

    public function Autor() {
        $this->Nome->Nome();
        echo "O nome da autora é J.K.Rowling." . PHP_EOL;
    } 
}

$informacoes =  new Informações;
$informacoes->Autor();