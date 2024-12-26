<?php

abstract class Hospital {
    abstract public function Funcao();

    public function Trabalho() {
        echo "Ele(a) trabalha no hospital" . PHP_EOL;
    }
}

class Médico extends Hospital {
    public function Funcao()
    {
        echo "A função dele é atender as pessoas." . PHP_EOL;
    }
}

class Enfermeira extends Hospital {
    public function Funcao()
    {
        echo "A função dela é auxiliar o médico e cuidar dos pacientes." . PHP_EOL;
    }
}

$medico = new Médico;
$medico->Trabalho();
$medico->Funcao();
$enfermeira= new Enfermeira;
$enfermeira->Trabalho();
$enfermeira->Funcao();