<?php


// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

require_once "../models/Produto.php";
require_once "../CrudProdutos.php";

//quando um valor da URL for igual a cadastrar faça isso
if ( $_GET['action'] == 'cadastrar'){

    $produto = new Produto($_POST['nome'],$_POST['preco'],$_POST['quantidade'],$_POST['categoria']);
    $crud = new CrudProdutos();
    $crud->salvar($produto);

header( 'location: ../views/admin/produtos.php?msg=cadastro realizado com sucesso   ');
}
/*
//quando um valor da URL for igual a editar faça isso
if ( ? == 'editar'){

    //algoritmo para editar
    //redirecione para a página de produtos
}

//quando um valor da URL for igual a excluir faça isso
if ( ? == 'excluir'){

    //algoritmo para excluir
    //redirecione para a página de produtos
}