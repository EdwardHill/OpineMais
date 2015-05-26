<?php
include './php/connection.php';
include './util/sessao.php';


 if (isset($_POST['email'])) {
     session_start();
     ob_start();
     $nome = $_POST['nome'];
          $email = $_POST['email'];
              $senha = $_POST['senha'];
                   $telefone= $_POST['telefone'];

include("../util/connection.php");

    $result = mysql_query("insert into usuario(nome_usuario,email_usuario,senha_usuario,telefone_usuario) values ('$nome','$email','$senha','$telefone')");

    $_SESSION["mensagem"] = "Usuário Cadastrado!";
	header('Location:../home.php');
}

	
	

?>



