<?php

ob_start();
 if (isset($_POST['nome'])) {

    $nome = $_POST['nome'];
    $descricao =$_POST['descricao'];
    $categoria = $_POST['categoria'];
    $marca = $_POST['marca'];

include("../model/util/connection.php");
include ("../model/util/upload.php");

    $result = mysql_query("insert into produto(nome_produto,detalhes,categoria_produto,marca_produto,imagem) values ('$nome','$descricao','$categoria','$marca','$nome_final')");


    echo '<h3>Produto Cadastrado!</h3><br />';
    echo 'Nome: '.$nome_final."<br />";


}

?>










