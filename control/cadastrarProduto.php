<?php

include_once ('../imports.php');
include ('../model/util/connection.php');
session_start();

if (isset($_POST['nome'])) {
    include ("../model/util/upload.php");
    ob_start();
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];

    $id_usuario = $_SESSION["id_usuario"];

    $produto = new Produto("",$nome,$descricao,$nome_final,"","","",$categoria,$marca,$id_usuario,"");

    // $produto->setCategoria($categoria);
    // $produto->setDetalhes($descricao);
    // $produto->setImagem($nome_final);
    // $produto->setMarca($marca);
    // $produto->setNome_produto($nome);
    // $produto->setId_Usuario($id_usuario);

    $fachada = Fachada::getInstance();
    $fachada->adicionarProduto($produto);

}
?>
