<?php

class Carro
{
    // Atributos (ou propriedades)
    public $modelo;
    public $cor;
    public $velocidade = 0;

    // Métodos para acelerar
    public function acelerar()
    {
        $this->velocidade += 10;
        echo "O carro acelerou para " . $this->velocidade . "km/h" . PHP_EOL;
    }

    // Métodos para frear
    public function frear()
    {
        $this->velocidade -= 10;
        echo "O carro desacelerou para " . $this->velocidade . "km/h" . PHP_EOL;
    }
}

$meuCarro = new Carro();
$meuCarro->modelo = "Corolla";
$meuCarro->cor = "Branca";
$meuCarro->acelerar();
$meuCarro->frear();


