<?php

class Veiculos {

    public $marca;

    public function exibirInfo($texto) {
        $this->marca = $texto;
    }
}

class Carro extends Veiculos {

    public $quantidadePortas;

    public function exibirCarro() {
        return "Marca : $this->marca, quantidade de portas: $this->quantidadePortas" . PHP_EOL;
    }
}

class Moto extends Veiculos {

    public $rodas; 

    public function exibirMoto() {
        return "Marca: $this->marca, tem $this->rodas" . PHP_EOL;
    }
}

class Caminhao extends Veiculos {

    public $carga;

    public function exibirCaminhao() {
        return "Marca: $this->marca, possui uma carga de $this->carga kg" . PHP_EOL;
    }
}

$carro = new Carro();
$carro->marca = "Jeep";
$carro->quantidadePortas = 4;

$moto = new Moto;
$moto->marca = "Honda";
$moto->rodas = 2;

$caminhao = new Caminhao;
$caminhao->marca = "Mercedes";
$caminhao->carga = 230;

echo $carro->exibirCarro();
echo $moto->exibirMoto();
echo $caminhao->exibirCaminhao();