<?php

class DiarioSegredo {

    private $segredo;

    public function EscreverSegredo($texto) {
        $this->segredo = $texto;
    }

    public function LerSegredo() {
         return $this->segredo;
    }
}

$meuSegredo = new DiarioSegredo;
$meuSegredo->EscreverSegredo("Eu amo programação");
// echo $meuSegredo->segredo;
echo $meuSegredo->LerSegredo();