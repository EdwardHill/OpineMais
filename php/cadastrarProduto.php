<?php


 if (isset($_POST['nome'])) {
ob_start();

$nome = $_POST['nome'];
$descricao =$_POST['descricao'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];


include("../util/connection.php");
include ("../php/upload.php");

$result = mysql_query(" insert into produto(nome_produto,detalhes_produto,marca_produto,categoria_produto) values ('$nome','$descricao','$marca,'$categoria')");


echo '<h3>Produto Cadastrado!</h3><br />';
echo 'Nome: '.$nome_final."<br />";


}
///UPLOAD









