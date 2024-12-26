<?php

interface Falar {
    public function Falar();
}

interface Dormir {
    public function Dormir();
}

class Joao implements Falar, Dormir {
    public function Falar()
    {
        echo "João ele gosta de falar" . PHP_EOL;
    }

    public function Dormir()
    {
        echo "João gosta de dormir";
    }
}

$pessoa = new Joao;
$pessoa->Falar();
$pessoa->Dormir();