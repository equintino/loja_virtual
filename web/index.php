<?php
require_once "../validacao/Valida.php";
require_once "../classes/Index.php";
require_once "../classes/Comprador.php";
require_once "../classes/Carrinho.php";
require_once "../classes/Produto.php";
require_once "../dao/Dao.php";
require_once "../dao/CriterioProcuraPessoa.php";
 
/* Dados do Comprador(nome/login/cpf) "$comprador" */
$dao = new Dao();
$search = new CriterioProcuraPessoa();
$search->setTabela("tb_usuario");
$search->setArray(array("login"=>Valida::start()));
if($dados=$dao->encontre($search)){
    $key=each($dados)['key'];
    $comprador = new Comprador($dados[$key]->getArray()['nome'], $dados[$key]->getArray()['login'], $dados[$key]->getArray()['cpf']);

    /* Produtos */
    $produto1 = new Produto("0001",3.50,"fone de ouvido");
    $produto2 = new Produto("0002",5,"capa de celular");
    $produto3 = new Produto("0003",10.50,"fonte de walkman");

    /* Produtos escolhidos */
    $carrinho = new Carrinho($comprador);
    $carrinho->setProdutos($produto1);
    $carrinho->setProdutos($produto2);
    $carrinho->setProdutos($produto3);
}
/* Carrega a página */    
$qtd = isset($carrinho)?$carrinho->getQuantidade():0;
$index = new index();
$index->setQtd($qtd);
$index->carrega(); 