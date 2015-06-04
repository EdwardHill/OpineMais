<?php
include_once ('../imports.php');

   if (isset($_POST['email'])) {
      $email = $_POST['email'];
      $senha = $_POST['senha'];
    }

    printf("Email: ".$email);
    printf("Senha: ".$senha);

    $senhaCodificada = md5($senha);

    $result = mysql_query("select * from usuario where email='" .$email. "' and senha='". $senhaCodificada."'");

    while ($sql = mysql_fetch_array($result)) {
        $id_usuario = $sql['id_usuario'];
        $nome_usuario = $sql['nome'];
        $email_usuario = $sql['email'];
        $senha = $sql['senha'];
        $usuario = new Usuario($id_usuario, $nome, $email, $senha);
    }

    session_start();
    $_SESSION["id_usuario"] = $id_usuario;
    $_SESSION["nome_usuario"] = $nome_usuario;
    $_SESSION["email_usuario"] = $email_usuario;
    header('Location: ../home.php');

      // return $usuario;
    //  printf($_SESSION["nome_usuario"]);

?>
