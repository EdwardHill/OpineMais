<?php
include_once ('../imports.php');
include ('../model/util/connection.php');

 if (isset($_POST['email'])) {

     ob_start();
     $nome = $_POST['nome'];
          $email = $_POST['email'];
              $senha = $_POST['senha'];

    $usu = new Usuario();
    $usu->setNome($nome);
    $usu->setEmail($email);
    $usu->setSenha($senha);
    $fachada = Fachada::getInstance();
    $fachada->adicionarUsuario($usu);

    printf($nome);
 }

?>
