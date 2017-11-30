<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $codigo;
    public $nome;
    public $preco;
    public $categoria;
    public $quantidadeEstoque;

    public function __construct($nome, $preco, $categoria, $estoque, $codigo = null){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->quantidadeEstoque = $estoque;
        $this->codigo = $codigo;
    }

    public function estaDisponivel(){
        if($this->quantidadeEstoque > 0)
        {
            return "disponivel";
        } else {
            return "indisponivel";
        }
    }

}
