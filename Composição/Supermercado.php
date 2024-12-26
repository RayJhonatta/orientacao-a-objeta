<?php

class AlimentosSaudaveis {
    public function AlimentosSaudaveis() {
        echo "Esses alimentos são saudáveis" . PHP_EOL;
    }
} 

class AlimentosIndustrializados {
    public function AlimentosIndustrializados() {
        echo "Esses alimentos são industrializados" . PHP_EOL;
    }
}

class Supermercado {
  private $alimentosSaudaveis;
  private $alimentosIndustrializados;
  
  public function __construct()
  {
    $this->alimentosSaudaveis = new AlimentosSaudaveis;
    $this->alimentosIndustrializados = new AlimentosIndustrializados;
  }

  public function PegarAlimentos() {
    $this->alimentosSaudaveis->AlimentosSaudaveis();
    $this->alimentosIndustrializados->AlimentosIndustrializados();
    echo "Esses são os alimentos que tem no supermercado";
  }
}

$superMercado = new Supermercado;
$superMercado->PegarAlimentos();