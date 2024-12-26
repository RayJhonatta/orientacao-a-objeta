<?php

class Profissão {
    public function verProfissões() {
        echo "Devemos ter uma profissão" . PHP_EOL;
    }
}

class Bombeiro extends Profissão {
    public function verProfissões()
    {
        echo "A profissão de bombeiro é muito importante" . PHP_EOL;
    }
}

class Polícial extends Profissão {
    public function verProfissões()
    {
        echo "A profissão de polícial também é muito importante" . PHP_EOL;      
    }
}

class Médico extends Profissão {
    public function verProfissões()
    {
        echo "A profissão de Médico é muito importante para o mundo";
    } 
}

function falarProfissão(Profissão $profissao) {
       $profissao->verProfissões();
}

$profissao = new Profissão;
$bombeiro = new Bombeiro;
$policial = new Polícial;
$medico = new Médico;

falarProfissão($profissao);
falarProfissão($bombeiro);
falarProfissão($policial);
falarProfissão($medico);