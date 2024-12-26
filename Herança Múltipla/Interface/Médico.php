<?php

interface Consultar {
    public function Consultar();
}

interface Medicar {
    public function Medicar();
}

interface Diagnosticar {
    public function Diagnosticar();
}

class Médico implements Consultar, Medicar, Diagnosticar {
    public function Consultar()
    {
        echo "O médico está consultando o paciente." . PHP_EOL;
    }

    public function Medicar() 
    {
       echo "O médico medicou o paciente com 2 remédios." . PHP_EOL;
    }

    public function Diagnosticar()
    {
        echo "O médico diagnosticou o paciente com uma doença rara.";
    }
}

$medico = new Médico;
$medico->Consultar();
$medico->Medicar();
$medico->Diagnosticar();
