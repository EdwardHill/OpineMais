<?php

include_once "../php/entidades/Usuario.php";
include_once "../php/repositorio/RepositorioUsuario.php";

 if (isset($_POST['email'])) {
     session_start();
     ob_start();
     $nome = $_POST['nome'];
          $email = $_POST['email'];
              $senha = $_POST['senha'];
                   $telefone= $_POST['telefone'];

    $usu = new Usuario($id_usuario, $nome, $email, $senha, $telefone);
    $reposito = new RepositorioUsuario();
    $reposito->adcionar($usu);
                   
}

	
	

?>



