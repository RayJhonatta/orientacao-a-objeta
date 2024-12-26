<?php

class Livro {
   public function lerLivro() {
    echo "O livro Harry Potter é bom" . PHP_EOL;
   }
}

class LivroDigital extends Livro {
    public function lerLivro() {
     echo "O livro Senhor dos Anéis também é bom" . PHP_EOL;
    }
}

class LivroFisico extends Livro {
    public function lerLivro() {
     echo "O livro O diário de um banana também é bom" . PHP_EOL;
    }
}

function falarLivro(Livro $livro) {
    $livro->lerLivro();
}

$livro = new Livro;
$livroDigital = new LivroDigital;
$livroFisico = new LivroFisico;

falarLivro($livro);
falarLivro($livroDigital);
falarLivro($livroFisico);