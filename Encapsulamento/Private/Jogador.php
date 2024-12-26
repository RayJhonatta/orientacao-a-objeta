<?php

class Jogador {

    private $nome;
    private $posicao;
    private $clube;
    private $salario;

    function definirJogador($texto) {
        $this->nome = $texto;
        $this->posicao = $texto;
        $this->clube = $texto;
        $this->salario = $texto;
    }

    function modificarJogador() {
        return $this->nome;
        return $this->posicao;
        return $this->clube;
        return $this->salario;
    } 
}

$meuJogador = new Jogador;
$meuJogador->definirJogador("Neymar joga na ponta esquerda no clube Al-Hilal e tem um salário de R$ 2.000 Reais. ");
echo $meuJogador->modificarJogador();