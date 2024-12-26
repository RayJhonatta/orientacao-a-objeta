<?php

class Livro {
    public $titulo;
    public $autor;
    public $anoPublicacao;

    public function exibirInfo($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
    }
}

class LivroDigital extends Livro {
    public $tamanhoArquivo;

    public function exibirLivroDigital() {
        return "O livro $this->titulo do autor $this->autor foi lançado em $this->anoPublicacao e o tamanho dele é $this->tamanhoArquivo MB" . PHP_EOL;
    }
}

class LivroFisico extends Livro {
    public $peso;

    public function exibirLivroFisico() {
        return "O livro $this->titulo do(a) autor(a) $this->autor foi lançado em $this->anoPublicacao e o peso dele é $this->peso Kg" . PHP_EOL;
    }
}

$livroDigital = new LivroDigital;
$livroDigital->exibirInfo("Mágico de Oz", "L. Frank Baum", "17 de maio de 1900");
$livroDigital->tamanhoArquivo = 2;

$livroFisico = new LivroFisico;
$livroFisico->exibirInfo("Harry Potter e o Cálice de Fogo", "J. K. Rowling", "8 de julho de 2000");
$livroFisico->peso = 1.2; 


echo $livroDigital->exibirLivroDigital();
echo $livroFisico->exibirLivroFisico();
