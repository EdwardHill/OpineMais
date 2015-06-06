<?php
include_once ('../imports.php');
//include ('../model/util/connection.php');
 if (isset($_POST['email'])) {
     ob_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $usuario = new Usuario($nome, $email,$senha);
    $fachada = Fachada::getInstance();
    $fachada->adicionarUsuario($usuario);
    
    $usuarioSerializado = serialize($usuario);
    $_SESSION['usuario'] = $usuarioSerializado;
    header('Location: ../home.php');
 }

?>
