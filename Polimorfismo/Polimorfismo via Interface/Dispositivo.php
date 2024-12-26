<?php

interface Dispositivo {
    public function ligar();
    public function desligar();
}

class TV implements Dispositivo {
    public function ligar() {
        echo "A TV está ligada" . PHP_EOL;
    }

    public function desligar() {
        echo "A TV está desligada" . PHP_EOL;
    }
}

class Rádio implements Dispositivo {
    public function ligar() {
        echo "O rádio está ligado" . PHP_EOL;
    }

    public function desligar() {
        echo "O rádio está desligado" . PHP_EOL;
    }
}

$tv = new TV;
$radio = new Rádio;

$tv->ligar();
$radio->desligar();