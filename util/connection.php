<?php



ob_start();

//Conexão de banco de dados 
$host = "localhost";
$usuarioBanco = "root";
$senhaBanco = "";
$banco = "opinemais";

$conn = mysql_connect($host, $usuarioBanco, $senhaBanco) or die (mysql_error());
$db = mysql_select_db($banco, $conn) or die (mysql_error());
$charset = mysql_set_charset("utf8");


?>