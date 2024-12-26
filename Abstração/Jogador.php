<?php

abstract class Jogador {
    abstract public function Posicao();

    public function Time() {
        echo "Al-Hilal";
    }
}

class Neymar extends Jogador {
    public function Posicao()
    {
        echo "Ponta-Esquerda" . PHP_EOL;
    }
}

$neymar = new Neymar;
$neymar->Posicao();
$neymar->Time();