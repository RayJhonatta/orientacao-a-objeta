<?php

class Viagem {

    protected $viagem = "Eu vou viajar para o Rio de Janeiro assistir o jogo do MENGÃOOOOOOOOO ";

    protected function marcarViagem() {
        return $this->viagem;
    }
}
 
class Local extends Viagem {

    public function obterViagem() {
        return $this->marcarViagem();
    }
}

$minhaViagem = new Local;
echo $minhaViagem->obterViagem();