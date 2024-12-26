<?php

class Supermercado {
    public function verPreco() 
    {
        echo "Os valores dos preços do supermercado são:" . PHP_EOL; 
    }
}

class AlimentosFrios extends Supermercado {
    public function verPreco()
    {
        echo "O preço dos produtos frios é de R$ 50,00" . PHP_EOL;
    }
}

class AlimetosIndustrializados extends Supermercado {
    public function verPreco()
    {
        echo "O preço dos produtos industrializados é de R$ 70,00" . PHP_EOL;
    }
}

$alimentosFrios = new AlimentosFrios;
$alimentosIndustrializados =  new AlimetosIndustrializados;

$alimentosFrios->verPreco();
$alimentosIndustrializados->verPreco();