<?php
 if (isset($_POST['nome'])) {



$nome = $_POST['nome'];
$descricao =$_POST['descricao'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];


$con = mysql_connect("localhost","root","");
mysql_select_db("opinemais", $con);



$result = mysql_query("insert into produto (nome_produto,detalhes_produto,marca_produto,categoria_produto) values ('$nome','$descricao','$marca,'$categoria')", $con);


echo '<h3>Produto Cadastrado!</h3><br />';
echo 'Nome: '.$nome."<br />";


}
///UPLOAD









