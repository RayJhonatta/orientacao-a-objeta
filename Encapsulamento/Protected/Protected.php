<?php

class AgendaFamilia {

    protected $compromisso;

    public function adicionarCompromisso($compromisso) {
        $this->compromissos = $compromisso;
    }

    protected function obterCompromissos() {
        return $this->compromissos;
    }
}

class Filho extends AgendaFamilia {
    public function mostrarCompromissos() {
        return "Compromissos da família: " . $this->obterCompromissos();
    }
}

$agendaFilho = new Filho();
$agendaFilho->adicionarCompromisso("Viagem no fim de semana.");
echo $agendaFilho->mostrarCompromissos();
// echo $agendaFilho->obterCompromissos(); 
