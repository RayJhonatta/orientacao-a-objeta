<?php

trait Comer{
    public function Comer() {
        echo "Esse animal pode comer" . PHP_EOL;
    }
}

trait Dormir{
    public function Dormir() {
        echo "Esse animal pode dormir";
    }
}

class Cachorro {
    use Comer, Dormir;
}

class Gato {
    use Comer, Dormir;
}

$cachorro = new Cachorro;
$gato = new Gato;
$cachorro->Comer();
$gato->Dormir();