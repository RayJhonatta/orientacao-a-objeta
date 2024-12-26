<?php

interface Dinheiro {
    public function Pagar();
    public function Receber();
}

class João implements Dinheiro {
    public function Pagar() {
        echo "João ele pagou o dinheiro que devia" . PHP_EOL;
    }

    public function Receber()
    {
        echo "João recebeu o dinheiro que estava precisando" . PHP_EOL;
    }
}

class Vinicus implements Dinheiro {
    public function Pagar()
    {
    echo "Vinicius Recebeu o dinheiro que faltava" . PHP_EOL;     
    }

    public function Receber()
    {
    echo "Vinicius Pegou o dinheiro";    
    }
}

$joao = new João;
$vinicius = new Vinicus;

$joao->Receber();
$vinicius->Pagar();