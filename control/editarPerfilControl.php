<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of editarPerfil
 *
 * @author Edward_Hill
 */
 include_once('../imports.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
   session_start();
   $serealizado = $_SESSION['usuario'];
   $usuario = unserialize($serealizado);
   
   $usuario->setNome($nome);
   $usuario->setEmail($email);
   $fachada = Fachada::getInstance();
   $fachada->editarUsuario($usuario);
   
   unset($_SESSION['usuario']);
   
   $serealizado = serialize($usuario);
   $_SESSION['usuario'] = $serealizado;

   header('Location: ../perfil.php');
