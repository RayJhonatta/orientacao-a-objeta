<?php

class Médico {
    public function Consultar() {
    echo " O Médico está consultando um paciente." . PHP_EOL;
    }
}

class Paciente {
    private $medico;

    public function __construct()
    {
        $this->medico = new Médico;
    }

    public function ReceberConsulta() {
        $this->medico->Consultar();
        echo " O Paciente está recebendo uma consulta de um médico." . PHP_EOL;
    }
}

$paciente = new Paciente;
$paciente->ReceberConsulta();