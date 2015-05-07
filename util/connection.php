<?php
//session_start();
ob_start();
//Conexão de banco de dados 
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "opinemais";

$conn = mysql_connect($host, $usuario, $senha) or die (mysql_error());
$db = mysql_select_db($banco, $conn) or die (mysql_error());
$charset = mysql_set_charset("utf8");
?>