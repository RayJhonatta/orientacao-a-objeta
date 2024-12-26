<?php 

class Produtos {

    public $nome;
    public $preco;

    public function exibirInfo($nome , $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class ProdutoEletronico extends Produtos {

    public $garantia;

    public function exibirInfoProdutoEletrico() {
        return "O(a) $this->nome está custando $this->preco reais, mas com a garantia ele pode ficar de $this->garantia reais" . PHP_EOL;
    }
}

class ProdutoAlimenticio extends Produtos {

    public $dataValidade;

    public function exibirInfoProdutoAlimenticio() {
        return "O(a) $this->nome está custando $this->preco reais e ele fica até $this->dataValidade";
    }
}

$meuProdutoEletronico = new ProdutoEletronico;
$meuProdutoEletronico->nome = "Geladeira";
$meuProdutoEletronico->preco = "R$ 1.200";
$meuProdutoEletronico->garantia = "800";

$meuProdutoAlimenticio = new ProdutoAlimenticio;
$meuProdutoAlimenticio->nome = "Televisão";
$meuProdutoAlimenticio->preco = "R$ 2.000";
$meuProdutoAlimenticio->dataValidade = "12/09/2024";

echo $meuProdutoEletronico->exibirInfoProdutoEletrico();
echo $meuProdutoAlimenticio->exibirInfoProdutoAlimenticio();