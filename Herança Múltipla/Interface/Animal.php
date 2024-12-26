<?php

interface Comer {
    public function Comer();
}

interface Andar {
    public function Andar();
}

class Animal implements Comer, Andar {
    public function Comer() {
        echo "O Animal ele deve comer para sobreviver" . PHP_EOL;
    }

    public function Andar() { 
        echo "O Animal ele anda para se locomover";
    }
}

$animal = new Animal;
$animal->Comer();
$animal->Andar();