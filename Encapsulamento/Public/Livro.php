<?php

class Livro {

  public $titulo;

  function definirTitulo($texto) {
    $this->titulo = $texto;
  }
  function mostrarTitulo() {
    return $this->titulo;
  }
}

$falarTitulo = new Livro;
$falarTitulo->definirTitulo("Harry Potter e as Relíquias da morte ");
echo $falarTitulo->titulo;

/* 
class Livro {
    public $titulo;

    public function definirTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function mostrarTitulo() {
        echo "O título do livro é: $this->titulo.";
    }
}

// Crie dois objetos da classe Livro
$livro1 = new Livro();
$livro1->definirTitulo("O Senhor dos Anéis");

$livro2 = new Livro();
$livro2->definirTitulo("Harry Potter");

$livro1->mostrarTitulo(); // Saída: O título do livro é: O Senhor dos Anéis.
$livro2->mostrarTitulo(); // Saída: O título do livro é: Harry Potter.
*/