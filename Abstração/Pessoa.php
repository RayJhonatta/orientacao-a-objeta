<?php

abstract class Pessoa {
    abstract public function Comer();

    public function Profissao() {
        echo "Ele é Médico" . PHP_EOL;
    }
}

class Pedro extends Pessoa {
    public function Comer() {
        echo "Ele só pode comer no horário de almoço." . PHP_EOL;
    }
}

$pedro = new Pedro;
$pedro->Profissao();
$pedro->Comer();