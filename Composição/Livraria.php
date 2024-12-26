<?php

class Autor {
    public function NomeAltora() {
        echo "J.K.Rowling" . PHP_EOL;
    }

    public function NomeLivro() {
        echo "Harry Potter" . PHP_EOL;
    }
}

class Livro {
    private $autor;

    public function __construct()
    {
        $this->autor = new Autor;
    }

    public function pegarLivro() {
        $this->autor->NomeAltora();
        $this->autor->NomeLivro();
        echo "Esse livro dela(e) é muito famoso";
    }
}

$livro = new Livro;
echo $livro->pegarLivro();