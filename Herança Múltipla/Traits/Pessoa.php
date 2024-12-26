<?php

trait Nome {
    public function Nome() {
        echo "O nome dele é Luiz" . PHP_EOL;
    }
}

trait Idade {
    public function Idade() {
        echo "A idade dele é 13 anos";
    }
}

class Pessoa {
    use Nome, Idade;
}

$pessoa = new Pessoa;
$pessoa->Nome();
$pessoa->Idade();