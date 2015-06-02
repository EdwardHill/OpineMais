<?php
include_once '../model/util/imports.php';


 if (isset($_POST['email'])) {
     
     ob_start();
     $nome = $_POST['nome'];
          $email = $_POST['email'];
              $senha = $_POST['senha'];
               
    $usu = new Usuario();
    $usu->setNome($nome);
    $usu->setEmail($email);
    $usu->setSenha($senha);
    $fachada = new Fachada();
    $fachada->adicionarUsuario($usu);
   
}

?>



