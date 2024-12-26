<?php 

namespace App\Banco;

class Conexao {
    public function Conectar() {
        echo "Banco de dados conectado."; 
    }
}

$conexao = new \App\Banco\Conexao();
$conexao->Conectar();