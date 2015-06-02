<?php

include_once ('../imports.php');
include ('../model/util/connection.php');

if (isset($_POST['nome'])) {
    include ("../model/util/upload.php");
    ob_start();
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];
    
    $produto = new Produto();
    $produto->setCategoria($categoria);
    $produto->setDetalhes($descricao);
    $produto->setImagem($nome_final);
    $produto->setMarca($marca);
    $produto->setNome_produto($nome);
    $fachada = Fachada::getInstance();
    $fachada->adicionarProduto($produto);
   
   
}
?>










