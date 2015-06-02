<?php
include_once("../model/entidades/Usuario.php");
include_once "../model/repositorios/RepositorioUsuario.php";


 if (isset($_POST['email'])) {
     session_start();
     ob_start();
     $nome = $_POST['nome'];
          $email = $_POST['email'];
              $senha = $_POST['senha'];
               

    $usu = new Usuario($nome, $email, $senha);
    $reposito = new RepositorioUsuario();
    $reposito->adicionar($usu);
}

?>



