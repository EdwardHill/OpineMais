<?php
session_start();
include_once ('../imports.php');
//session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    $senhaCodificada = md5($senha);

    $result = mysql_query("select * from usuario where email='" .$email. "' and senha='". $senhaCodificada."' and status='".Status::ATIVO."'");
    $usuario = null;
    while ($row = mysql_fetch_array($result)) {
        $id_usuario = $row['id_usuario'];
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];
        $usuario = new Usuario($id_usuario, $nome, $email, $senha);
    }

    if($usuario != null){
      if(isset($_SESSION["mensagem"])){
          unset($_SESSION["mensagem"]);
      }
      $serializador = serialize($usuario);
      $_SESSION['usuario'] = $serializador;
      header('Location: ../home.php');
    }else{
      $mensagem = "Usuário ou Senha incorretos!<br/>Se você desativou seu acesso, solicite a reativação.";
      $_GET["mensagem"] = $mensagem;
      header('Location: ../login.php?mensagem='.$mensagem);
    }

?>
