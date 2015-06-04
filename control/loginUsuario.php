<?php
include_once ('../imports.php');
session_start();
   if (isset($_POST['email'])) {
      $email = $_POST['email'];
      $senha = $_POST['senha'];
    }

    $senhaCodificada = md5($senha);

    $result = mysql_query("select * from usuario where email='" .$email. "' and senha='". $senhaCodificada."'");

    while ($sql = mysql_fetch_array($result)) {
        $id_usuario = $sql['id_usuario'];
        $nome_usuario = $sql['nome'];
        $email_usuario = $sql['email'];
        $senha = $sql['senha'];
        $usuario = new Usuario($id_usuario, $nome, $email, $senha);
    }

    if($nome_usuario != null){
      $_SESSION["id_usuario"] = $id_usuario;
      $_SESSION["nome_usuario"] = $nome_usuario;
      $_SESSION["email_usuario"] = $email_usuario;
      header('Location: ../home.php');
    }else{
      $mensagem = "Usuário ou Senha incorretos!";
      $_SESSION["mensagem"] = $mensagem;
      header('Location: ../login.php');
    }

?>
