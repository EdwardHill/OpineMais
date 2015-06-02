<?php
include '../model/util/connection.php';
//include '../util/sessao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

// $_SESSION['email'] = $_POST['email'];
//
//
//
//
// 	// $result = mysql_query(" SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'");
//   //
//   //       while($sql = mysql_fetch_array($result)){
//   //                           $nome = $sql['nome_usuario'];
// 	// 			$email = $sql['email_usuario'];
//   //                               $id = $sql['id_usuario'];
//
//
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



// }
//         }






?>
