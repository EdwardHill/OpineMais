<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once("../imports.php");

$senhaAtual = $_POST['senhaAtual'];
$senhaNova = $_POST['senhaNova'];

$senhaCriptografada = md5($senhaAtual);

$serializado = $_SESSION['usuario'];
$usuario = unserialize($serializado);

if($usuario->getSenha() == $senhaCriptografada){
    $usuario->setSenha($senhaNova);
    
    $fachada = Fachada::getInstance();
    $fachada->editarUsuario($usuario);
    
    $serializado = serialize($usuario);
    $_SESSION['usuario'] = $serializado;
    
    $mensagem = 'Senha alterada com sucesso';
    header('Location: ../perfil.php?mensagem='.$mensagem);
}else{
    $mensagem = 'Senha atual não confere';
    header('Location: ../editarSenha.php?mensagem='.$mensagem);
}


