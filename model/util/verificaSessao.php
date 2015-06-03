<?php
include '../model/util/connection.php';
//include '../util/sessao.php';
//$email = $_POST['email'];
//$senha = $_POST['senha'];
//
// $_SESSION['email'] = $_POST['email'];
    function login($email,$senha) {
     $result = mysql_query(" SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'");
        $usuario = null;  
        while($sql = mysql_fetch_array($result)){
            
            $nome = $sql['nome'];
            $email = $sql['email'];
            $id = $sql['id'];
            $usuario = new Usuario($id_usuario, $nome, $email, $senha);
        }
        return $usuario;
    }


// if($result){
//     session_start();
//
// 	$_SESSION["id"] = $id;
// 	$_SESSION["nome"] = $nome;
// 	$_SESSION["senha"] = $senha;
// 	$_SESSION["mensagem"] = "Seja Bem Vindo, ";
// 	mysql_close($conn);
//
// 	header('Location: ../home.php?'.$id.'?'.$nome);
//
// }else{
// 	unset ($_SESSION["nome"]);
// 	unset ($_SESSION["senha"]);
// 	unset ($_SESSION["status"]);
//         unset($_SESSION["email"]);
// 	$_SESSION["mensagem"] = "Login Inválido, Tente Novamente";
// 	header('Location:../login.php?');
//
//
//
// }






?>
